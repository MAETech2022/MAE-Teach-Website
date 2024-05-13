<?php

namespace App\Http\Controllers\Admin;

use App\Exports\EmployeeAttendanceExport;
use App\Exports\EmployeeInventoryRequestExport;
use App\Exports\EmployeeVehicleRequestExport;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Gender;
use App\Models\InventoryRequest;
use App\Models\JobType;
use App\Models\Manager;
use App\Models\Office;
use App\Models\Project;
use App\Models\ReportingOfficer;
use App\Models\Scale;
use App\Models\ScaleType;
use App\Models\Section;
use App\Models\SerialItem;
use App\Models\SerialNumber;
use App\Models\User;
use App\Models\VehicleRequest;
use App\Models\Vendor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use File;
use DB;
use pdf;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;


class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['permission:View Users'])->only(['index', 'show']);
        $this->middleware(['permission:Edit Users'])->only(['edit', 'update', 'resetID', 'changePassword', 'change']);
        $this->middleware(['permission:Create Users'])->only(['create', 'store']);
        $this->middleware(['permission:Delete Users'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $query = User::query();
        $query->where('status', 'active');
        $query->where('id', '!=', auth()->user()->id);
        $users = $query->orderBy('created_at', 'DESC');

        return view('users.index', compact('users', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        if (auth()->user()->hasAnyRole(['Executive Director', 'Director General', 'Admin'])) {
            $roles = Role::all();
        } else {
            $roles = Role::where('name', 'Executive')->get();
        }

        $managers = User::whereHas('roles', function ($q) {
            $q->Where('name', 'Director')->
            orWhere('name', 'Executive Director')->
            orWhere('name', 'Director General');
        })->get();
//
//        $reportingOfficers = User::whereHas('roles', function ($q) {
//            $q->Where('name', 'Team Lead');})->get();

//        $projects = Project::all();
        $jobTypes = JobType::all();
        $genders = Gender::all();
        $designations = Designation::all();
        $scales = Scale::with('scale_types')->get();
        $offices = Office::all();
        $vendors = Vendor::all();
        $departments = Department::all();
//        $sections = Section::all();

        return view('users.create', compact('roles', 'jobTypes', 'genders', 'designations', 'scales', 'managers', 'offices', 'user', 'vendors', 'departments'));
    }

    /**
     * Store a newly created resource in storage.composer
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $data = array();

        $data['email_verified_at'] = Carbon::now();
        $data['password'] = $request->input('password');
        $data['project_id'] = $request->input('project_id');


        $user = User::create(array_merge($request->validated(), $data));

        if ($request->filled('role_id')) {
            $user->syncRoles($request->input('role_id'));
        }

        if ($request->filled('office_id')) {
            $user->offices()->sync($request->input('office_id'));
        }

        if ($request->filled('project_id2')) {
            $project_id = $request->input('project_id2');
            $user->projects()->sync($project_id);
        }

        //New changes on the request
        if ($request->filled('reporting_officer_id')) {

            $user->reportingOfficer()->create([
                'reporting_officer_id' => $request->reporting_officer_id
            ]);
        } else {
            $user->reportingOfficer()->create([
                'reporting_officer_id' => $request->manager_id
            ]);
        }


        if (auth()->user()->hasAnyRole(['Director', 'Team Lead'])) {
            $user->manager()->create([
                'user_manager_id' => auth()->user()->id
            ]);
        } else {

            $user->manager()->create([
                'user_manager_id' => $request->manager_id
            ]);
        }

        if ($request->hasFile('doc_name')) {
            $request->file('doc_name')->store('profile/images', 'public');
            $user->document()->create(['doc_name' => $request->file('doc_name')->hashName()]);
        }

        return redirect()->route('users.index')->with('success', 'User Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, User $user)
    {
        $active = 'home';
        if ($request->has('active')) {
            $active = $request->active;
        }

        $time = strtotime($request->date);

        $month = date('m', $time);
        $year = date('Y', $time);

        $data = array();
        $allData = array();

        $query = InventoryRequest::query()->where('user_id', $user->id)->with('approvals');
        $query2 = VehicleRequest::query()->where('user_id', $user->id)->with('approvals');


        if ($request->filled('date')) {
            $attendance = $user->attendance()->whereMonth('created_at', $month)->whereYear('created_at', $year)->get();
            $query->whereMonth('created_at', $month);

        } else {
            $attendance = $user->attendance()->whereMonth('created_at', Carbon::now()->month)->get();
            $query->whereMonth('date', Carbon::now()->month);
        }

        //Inventory request details
        $query22 = clone $query;
        $query33 = clone $query;
        $query44 = clone $query;

        $monthlyRequests = $query->count();

        $monthlyInprcess = $query22->whereHas('approvals', function ($quer) {
            $quer->where('approval_status_id', 4);
        })->count();

        $monthlyAccepted = $query33->whereHas('approvals', function ($quer) {
            $quer->where('approval_status_id', 3);
        })->count();


        $monthlyRejected = $query44->whereHas('approvals', function ($quer) {
            $quer->where('approval_status_id', 2);
        })->count();


        $query222 = clone $query2;
        $query333 = clone $query2;
        $query444 = clone $query2;

        $monthlyVehicleRequests = $query2->count();

        $monthlyVehicleInprcess = $query222->whereHas('approvals', function ($quer) {
            $quer->where('approval_status_id', 4);
        })->count();

        $monthlyVehicleAccepted = $query333->whereHas('approvals', function ($quer) {
            $quer->where('approval_status_id', 3);
        })->count();


        $monthlyVehicleRejected = $query444->whereHas('approvals', function ($quer) {
            $quer->where('approval_status_id', 2);
        })->count();

        $allData = array(
            'monthlyPresents' => $attendance->where('attendance_status_id', 1)->count(),
            'monthlyAbsents' => $attendance->where('attendance_status_id', 2)->count(),
            'monthlyLeaves' => $attendance->whereNotIn('attendance_status_id', [1, 2, 7, 8])->count(),
            'monthTotalOnTime' => $attendance->where('attendance_time_status_id', '==', 2)->count(),
            'monthTotalLate' => $attendance->where('attendance_time_status_id', '==', 1)->count(),
            'totalDaysInMonth' => Carbon::parse(now()->format('Y-m-d'))->daysInMonth,

            'monthlyRequests' => $monthlyRequests,
            'monthlyAccepted' => $monthlyAccepted,
            'monthlyInprocess' => $monthlyInprcess,
            'monthlyRejected' => $monthlyRejected,

            'monthlyVehicleRequests' => $monthlyVehicleRequests,
            'monthlyVehicleAccepted' => $monthlyVehicleAccepted,
            'monthlyVehicleInprocess' => $monthlyVehicleInprcess,
            'monthlyVehicleRejected' => $monthlyVehicleRejected,

        );

        return view('users.show', compact('user', 'active', 'allData', 'data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {

        $users = User::role('Director')->get();
        $projects = Project::all();
        $jobTypes = JobType::all();
        $genders = Gender::all();
        $designations = Designation::all();
        $scales = Scale::all();
        $offices = Office::all();
        $vendors = Vendor::all();
        $departments = Department::all();
        $projects = Project::where('department_id', $user->department_id)->get();
        $sections = Section::where('wing_id', $user->project_id)->get();

        $managers = User::whereHas('roles', function ($q) {
            $q->Where('name', 'Director')->
            orWhere('name', 'Executive Director')->
            orWhere('name', 'Director General');

        })->get();

        if (auth()->user()->hasAnyRole(['Executive Director', 'Director General', 'Admin'])) {

            $roles = Role::all();
        } else {
            $roles = Role::where('name', 'Executive')->get();

        }

        return view('users.create', compact('users', 'user', 'roles', 'managers', 'projects',
            'jobTypes', 'genders', 'designations', 'scales', 'offices', 'vendors', 'departments', 'sections'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, User $user)
    {
        try {
//            $userToUpdate = $user->load('document');

//            if ($request->scale_id && $request->vendor_id == null) {
//                $user->update('vendor_id', null);
//            } elseif ($request->vendor_id && $request->scale_id == null) {
//                $user->update('scale_id', null);
//            }

//            dd($request->validated()    );

            $user->update($request->validated());
            $user->roles()->detach();


//            $role_name = Role::find($request->role_id)->name;
//            $user->assignRole($role_name);


            if ($request->has('role_id')) {
                $user->syncRoles($request->input('role_id'));
//
            }

            if ($request->has('office_id')) {
//                $user->offices()->sync($request->input('office_id'));
                $user->offices()->sync($request->office_id);
            }

            if ($request->filled('project_id2')) {
                $user->projects()->sync($request->input('project_id2'));
            }

            //New changes on the request
            if ($request->filled('reporting_officer_id')) {

                if ($user->reportingOfficer) {

                    $user->reportingOfficer()->update([
                        'reporting_officer_id' => $request->reporting_officer_id
                    ]);
                } else {

                    $user->reportingOfficer()->create([
                        'reporting_officer_id' => $request->reporting_officer_id
                    ]);
                }


            } else {
                $user->reportingOfficer()->update([
                    'reporting_officer_id' => $request->manager_id
                ]);
            }

            if (auth()->user()->hasAnyRole(['Director', 'Team Lead'])) {
                $user->Manager()->update([
                    'user_manager_id' => auth()->user()->id,
                    'user_id' => $user->id
                ]);
            } else {
                $user->Manager()->update([
                    'user_manager_id' => $request->manager_id,
                    'user_id' => $user->id
                ]);
            }


            if ($request->hasFile('doc_name')) {

                $profileImage = $user->document()->where('doc_name', '!=', null)->first();
                if ($profileImage) {

                    $profileImagePath = public_path('storage/profile/images/' . $profileImage->doc_name);

                    if (File::exists($profileImagePath)) {
                        unlink($profileImagePath);
                    }

                    $request->file('doc_name')->store('profile/images', 'public');
                    $user->document()->update(['doc_name' => $request->file('doc_name')->hashName()]);

                } else {
                    if ($request->hasFile('doc_name')) {
                        $request->file('doc_name')->store('profile/images', 'public');
                        $user->document()->create(['doc_name' => $request->file('doc_name')->hashName()]);
                    }
                }
            }
//            return response()->json(['message' => 'success image uploaded successfully', 200]);

            return redirect()->route('users.index')->with('success', 'User Updated Successfully');
        } catch (\Throwable  $e) {
            dd($e->getMessage());
            return redirect()->back()->withToastError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return $user->delete();
    }

    public function changePassword(Request $request)
    {

        $user = User::findOrFail($request->id);

        /*
        * Validate all input fields
        */
        $this->validate($request, [
            'new_password' => 'required',
            'again_password' => 'same:new_password',
        ]);

        if ($request->new_password != null) {
            $newPassword = $request->new_password;
            $user->fill(['password' => $newPassword])->save();

            return redirect()->back()->with(['success' => "Password Changed successfully"]);

        } else {
            return redirect()->back()->with(['info' => "There was error in changing password, please try again"]);
        }

    }

    public function resetID(Request $request)
    {

        $user = User::findOrFail($request->id);
        $validatedData = $this->validate($request, [
            'id' => 'required|exists:users,id',
        ]);

        if ($user) {
            $data['device_id'] = null;
            $user->update(array_merge($validatedData, $data));

            return redirect()->back()->with(['success' => "Device id is removed successfully"]);

        } else {
            return redirect()->back()->with(['info' => "There was error in resetting device id, please try again"]);
        }

    }

    public function resetAllID(Request $request)
    {
        $user = User::query();
        $data['device_id'] = null;
        $user->update($data);
        return redirect()->back()->with(['success' => "All Device id is removed successfully"]);
    }

    public function change(Request $request)
    {

        $validatedData = $this->validate($request, [
            'user_id' => 'required|exists:users,id',
        ]);

        $users = User::where('id', $request->user_id)->first();
        $pre = $users->status;
        if ($pre == 'active') {
            $users->status = 'inactive';
        } else {
            $users->status = 'active';
        }
        $users->save();
        return redirect()->back()->with(['success' => "User status changed Successfully"]);

    }


    public function getUsers()
    {
        $user = User::where(["project_id" => request()->project_id])->get();
        return ["status" => true, "data" => $user];
    }

    public function getSerialItems()
    {
        $serialItems = SerialItem::where(["user_id" => request()->user_id])->with('item')->get();
        return ["status" => true, "data" => $serialItems];
    }

    public function getSerialNumbers()
    {
        $serialNumbers = SerialNumber::where(["serial_item_id" => request()->item_id])->get();
        return ["status" => true, "data" => $serialNumbers];
    }


    public function fetchReportingOfficer(Request $request)
    {

        $userProjectid = User::where('id', $request->manager_id)->pluck('project_id')->first();
        $users = User::query();
        $users->whereHas('roles', function ($que) {
            $que->where('name', 'Team Lead');
        })->where('project_id', $userProjectid);

        return response()->json($users->get());
    }

    public function getOfficeByAjaxFilter(Request $request)
    {
        $data = [];
        $office = Office::query();

        if ($request->has('q')) {
            $search = $request->q;
            $data = $office->where('name', 'LIKE', "%$search%")
                ->limit(20)
                ->get();
        }
        return response()->json($data);
    }

    public function getOfficeScaleType(Request $request)
    {
        $result = array();
//        $scales = Scale::query();

//        dd($request->jobTypeID);
//        $scales->with('scale_types', function ($query)  use ($request){
//            return $query->where('scale_types.job_type_id', '=' , '1');
//        })->get();

        $scales = ScaleType::with('scales')->where('job_type_id', '=', $request->jobTypeID)->first();

//        dd($scales);
        foreach ($scales->scales as $row) {
            $result[] = array(
                'id' => $row->id,
                'name' => $row->name ?? '',
            );
        }
//        dd($result);

        return response()->json($result);
    }

    public function inactiveUser(Request $request)
    {
        $data = array();
        $designations = Designation::all();
        $projects = Project::all();
        $query = User::query();
        $departments = Department::all();
        $sections = Section::all();

        if (auth()->user()->hasAnyRole(['Executive Director', 'Director General', 'Admin'])) {
            $query->whereHas('roles', function ($q) {
                $q->Where('name', '!=', 'Executive Director');
            });
        }

        if (auth()->user()->hasAnyRole(['Director', 'Team Lead'])) {
            $projects = Project::where('id', auth()->user()->project_id)->get();
            $query->whereHas('roles', function ($q) {
                $q->Where('name', 'Executive');
            })->where(['project_id' => auth()->user()->project_id]);
            $data['project_id'] = auth()->user()->project_id;
        }

        if ($request->filled('department_id')) {
            $query->where('department_id', $request->input('department_id'));
            $data['department_id'] = $request->input('department_id');
            $projects = Project::where('department_id', $data['department_id'])->get();

        }

        if ($request->filled('project_id')) {
            $query->where('project_id', $request->input('project_id'));
            $data['project_id'] = $request->input('project_id');
            $sections = Section::where('wing_id', $request->input('project_id'))->get();

        }

        if ($request->filled('section_id')) {
            $query->where('section_id', $request->input('section_id'));
            $data['section_id'] = $request->input('section_id');
        }

        if ($request->filled('designation_id')) {
            $query->where('designation_id', $request->input('designation_id'));
            $data['designation_id'] = $request->input('designation_id');
        }
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
            $data['name'] = $request->input('name');
        }

        $query->where('status', 'inactive');
        $query->where('id', '!=', auth()->user()->id);
        $users = $query->orderBy('created_at', 'DESC')->paginate(env('PAGINATE_PER_PAGE', 20));

        return view('users.inactive-user', compact('users', 'data', 'designations', 'projects', 'departments', 'sections'));
    }
}

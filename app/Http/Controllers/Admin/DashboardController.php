<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Attendance;
use App\Models\InventoryRequest;
use App\Models\LeaveRequest;
use App\Models\MeetingSchedule;
use App\Models\Project;

use App\Models\User;
use App\Models\VehicleRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//                    dd('dashboard');
           if (auth()->user()->hasAnyRole(['Admin'])) {
            $redirect = 'superAdminDashboard';
            return redirect()->route($redirect);

        }

        if (auth()->user()->hasAnyRole(['Employer'])) {
            $redirect = 'employerDashboard';
            return redirect()->route($redirect);

        }
        if (auth()->user()->hasAnyRole(['Candidate'])) {

            $redirect = 'candidateDashboard';
            return redirect()->route($redirect);

        }

        return view('backend.dashboard.index');
    }

}

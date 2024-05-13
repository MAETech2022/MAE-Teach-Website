<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class MembershipController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $memberships = Membership::select('*');
            return DataTables::of($memberships)
                ->addColumn('action', function ($membership) {
                    $actionBtns = '<a href="' . route('memberships.edit', $membership->id) . '" class="btn btn-primary m-2"><i class="fas fa-edit"></i> Edit</a>';
                    $actionBtns .= '<form action="' . route('memberships.destroy', $membership->id) . '" method="POST" class="delete-form" style="display:inline-block;">';
                    $actionBtns .= '<input type="hidden" name="_method" value="DELETE">';
                    $actionBtns .= '<input type="hidden" name="_token" value="' . csrf_token() . '">';
                    $actionBtns .= '<button type="submit" class="btn btn-danger m-2" onclick="return confirmDelete()"><i class="fas fa-trash-alt"></i> Delete</button>';
                    $actionBtns .= '</form>';
                    return $actionBtns;
                })
                ->addColumn('nationality', function ($state) {
                    return $state->nationality;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.memberships.index');
    }

    public function create()
    {
        return view('backend.memberships.create');
    }

    public function store(Request $request)
    {
        try {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'membership_fee' => 'required|numeric',
                'description' => 'required|string',
                'document_required' => 'required|string',
                'payment_procedure' => 'required|string',
                'register_online_link' => 'required|string',
                'website_link' => 'required|string',
                'query_email' => 'required|email',
                'whatsapp_no' => 'required|string',
            ]);

            if ($validator->fails()) {
                // Return validation errors
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            // Create a new membership instance
            $membership = new Membership();
            $membership->membership_fee = $request->membership_fee;
            $membership->description = $request->description;
            $membership->document_required = $request->document_required;
            $membership->payment_procedure = $request->payment_procedure;
            $membership->register_online_link = $request->register_online_link;
            $membership->website_link = $request->website_link;
            $membership->query_email = $request->query_email;
            $membership->whatsapp_no = $request->whatsapp_no;
            $membership->save();

            // Return a success response
            return redirect()->route('memberships.index')
                ->with('success', 'Membership updated successfully');

         } catch (\Exception $e) {
            // Handle any exceptions
            return redirect()->route('memberships.index')
                ->with('error', 'Failed to create membership' .$e->getMessage());
         }
    }

    public function show(Membership $membership)
    {
        return view('backend.memberships.show', compact('membership'));
    }

    public function edit(Membership $membership)
    {
        return view('backend.memberships.edit', compact('membership'));
    }


    public function update(Request $request, Membership $membership)
    {
        try {
            // Validate the request data
            $validator = Validator::make($request->all(), [
                'membership_fee' => 'required|numeric',
                'description' => 'required|string',
                'document_required' => 'required|string',
                'payment_procedure' => 'required|string',
                'register_online_link' => 'required|string',
                'website_link' => 'required|string',
                'query_email' => 'required|email',
                'whatsapp_no' => 'required|string',
            ]);

            if ($validator->fails()) {
                // Return validation errors
                return redirect()->back()->withErrors($validator->errors())->withInput();
            }

            // Update the membership instance
            $membership->update($request->all());

            // Return a success response
            return redirect()->route('memberships.index')
                ->with('success', 'Membership updated successfully');

        } catch (\Exception $e) {
            // Handle any exceptions
            return redirect()->route('memberships.index')
                ->with('error', 'Failed to update membership: ' . $e->getMessage());
        }
    }

    public function destroy(Membership $membership)
    {
        $membership->delete();

        return redirect()->route('memberships.index')
            ->with('success', 'Membership deleted successfully');
    }
}

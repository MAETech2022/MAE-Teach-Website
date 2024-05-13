<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionEmail;
use App\Mail\ContactFormSubmitted;
use Illuminate\Mail\SendException;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function subscribe(Request $request)
    {
        $userEmail = $request->input('email') ?? '';
        
        $formData['email'] = $userEmail;

        $mailToAddress = Config::get('mail.to.address');
        $mailFromAddress = Config::get('mail.from.address');

        try {
            // Mail::to($userEmail)->send(new SubscriptionEmail());
            Mail::to($mailToAddress)->send(new SubscriptionEmail($formData,$mailFromAddress,$mailToAddress));
            return response()->json(['message' => 'Subscription email sent successfully!']);
        }catch (SendException $exception) {
            return response()->json(['message' => 'Failed to send email: ' . $exception->getMessage()]);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Failed to send email: ' . $exception->getMessage()]);
        }


        return response()->json(['message' => 'Subscription email sent successfully!']);
    }//end of function

    public function saveContact(Request $request)
    {
        // Validate and process form data

        // Validate the form data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'subject' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'nullable|string',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // $formData = $request->only(['name','subject', 'email', 'message']);
        $formData = $validator->validated();

        // Send email
        $mailFromAddress = $formData['email'];
        $mailToAddress = Config::get('mail.to.address');
        $mailFromAddress = Config::get('mail.from.address');

        try {
            Mail::to($mailToAddress)->send(new ContactFormSubmitted($formData,$mailFromAddress,$mailToAddress));
            return response()->json(['message' => 'Contact us email sent successfully!']);
        }catch (SendException $exception) {
            return response()->json(['message' => 'Failed to send email: ' . $exception->getMessage()]);
        } catch (\Exception $exception) {
            return response()->json(['message' => 'Failed to send email: ' . $exception->getMessage()]);
        }
        
    }//end of function
   
}

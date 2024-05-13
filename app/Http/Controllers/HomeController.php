<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function page($name)
    {
        
        $name = $name ?? '';

        switch ($name) {
            case "about-us":
                return view('frontend.about-us');
                break;
            case "contact-us":
                return view('frontend.contact-us');
                break;
            case "projects":
                return view('frontend.projects');
                break;
            case "services":
                return view('frontend.services');
                break;
            default:
                abort(404);
        }

    }

    public function project($id){

        return view('frontend.project-single');

    }//end of function

    public function service($id){

        return view('frontend.service-single');

    }//end of function
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User as User;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('pages.index')->with(['page' => 'Homepage']);
    }

    public function about()
    {
        return view('pages.about')->with(['page' => 'About Us']);
    }
    public function blog()
    {
        return view('pages.blog')->with(['page' => 'Blog']);
    }
    public function contact()
    {
        return view('pages.contact')->with(['page' => 'Contact Us']);
    }
    public function terms()
    {
        return view('pages.terms')->with(['page' => 'Terms and Conditions']);
    }
    
    public function privacy()
    {
        return view('pages.privacy')->with(['page' => 'Privacy Terms']);
    }
    public function pricing()
    {
        return view('pages.pricing')->with(['page' => 'Plan & Pricing']);
    }
    public function copyright()
    {
        return view('pages.copyright')->with(['page' => 'Copyright Policy']);
    }
    public function forum()
    {
        return view('pages.forum')->with(['page' => 'Forum Rules']);
    }

}

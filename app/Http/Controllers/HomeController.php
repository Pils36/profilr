<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User as User;
use App\Models\AccountIndividual as AccountIndividual;
use Illuminate\Support\Facades\Hash;

use App\Traits\EndPoints;

class HomeController extends Controller
{

    use EndPoints;

    public $url, $post, $token;
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
        $this->url = "https://paysprint.ca/api/v1/classifiedbusinessdirectory";
        $this->token = "base64:JFM+PJaWD/pBypX+NhXudDrAmianZdGYZ41qz4WhXL0=";

        $data = $this->doGet($this->url, $this->token);


        return view('pages.index')->with(['page' => 'Homepage', 'data' => $data]);
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


    public function search(Request $req)
    {
        // Query Search
        $query = AccountIndividual::where('lastname', 'LIKE', '%' . $req->search . '%')->orWhere('firstname', 'LIKE', '%' . $req->search . '%')->get();

        return view('livewire.search-users')->with(['data' => $query]);
    }
}

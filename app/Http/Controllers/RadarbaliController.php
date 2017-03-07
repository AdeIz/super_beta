<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Radar;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class RadarbaliController extends Controller
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
     * @return Response
     */
    public function index()
    {
        return view('radarbali.index');
    }    
    // public function dashboard()
    // {
    //     return view('dashboard');
    // }

    public function create()
    {
        return view('radarbali.create');
    }

    public function store(Request $req)
    {

        $user = new radarbali();
        $user->name = $req->name;

        try
        {
            $user->save();
            return redirect()->back()->with('messages', ['User Name : ' . $user->name . ' has been created']);                      
        } 
        catch (\Exception $e)
        {
            return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
        }
    }

}
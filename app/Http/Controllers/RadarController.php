<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Category_radar;

class RadarController extends Controller
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
        return view('home');
    }

    public function create()
    {

        $categoriesradar = Category_radar::regular()->parent()->pluck('name','id');

        $data['categories'] = $categoriesradar;
        return view('radar.create', $data);
    }

    public function store(Request $request)
    //{
        // dd($request->all());
      //  return view('dashboard');
    //}
    
    {

        $radar = new Radar();
        $radar->username = $req->username;
        $radar->email = $req->email;
        $radar->password = $req->password;

        // try
        // {
        //     $user->save();
        //     return redirect()->back()->with('messages', ['User Name : ' . $user->name . ' has been created']);                      
        // } 
        // catch (\Exception $e)
        // {
        //     return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
        // }
    }    


    public function edit()
    {
        return view('dashboard');
    }

    public function update()
    {
        
    }
}
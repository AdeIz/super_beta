<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Category;

class NewsController extends Controller
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

        $categories = Category::regular()->parent()->pluck('name','id');

        $data['categories'] = $categories;
        return view('news.create', $data);
    }

    public function store(Request $request)
    {
  //      dd($request->all());
        return view('dashboard');
    }


    public function edit()
    {
        return view('dashboard');
    }

    public function update()
    {
        
    }
}
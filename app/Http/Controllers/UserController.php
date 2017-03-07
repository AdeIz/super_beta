<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{

	public function __construct()
	{

	}

	public function index()
	{
		return view('user.index')->with('users', User::all());
	}

	public function create()
	{
		return view('user.create');
	}

	public function store(UserRequest $req)
	{

		$user = new User();
		$user->username = $req->username;
		$user->email = $req->email;
		$user->password = $req->password;

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

	public function edit($id)
	{
		return view('user.edit')->with('userRow', User::find($id));
	}

	public function update(UserRequest $req, $id)
	{

		$user = User::find($id);
		$user->username = $req->username;
		$user->email = $req->email;
		$user->password = $req->password;

		try
		{
			$user->save();
			return redirect()->back()->with('messages', ['User Name : ' . $user->name . ' has been updated']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}		
	}

	public function destroy($id)
	{
		$user = User::find($id);
		$name = $user->username;
		User::destroy($id);
		return redirect()->back()->with('messages', ['User Name : ' . $name . ' has been deleted']);
	}


}
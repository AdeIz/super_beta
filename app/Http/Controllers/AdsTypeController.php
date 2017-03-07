<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdsType;
use App\Http\Requests\AdsTypeRequest;

class AdsTypeController extends Controller
{
	//create --> addnew form (view)
	//store --> submit form (redirect back / redirect somewhere else)

	//edit --> edit form (view)
	//update --> submit form (redirect back / redirect somewhere else)

	//index --> list (retrieve & view)

	//destroy --> (delete by id)

	public function __construct()
	{
	}

	public function index()
	{
		return view('adstype.index')->with('adstypes', AdsType::select('id', 'name')->get());		
	}

	public function create()
	{
		return view('adstype.create');
	}

	public function store(AdsTypeRequest $req)
	{
		
		$adstype = new AdsType();
		$adstype->name = $req->name;

		try
		{
			$adstype->save();
			return redirect()->back()->with('messages', ['AdsType Name : ' . $adstype->name . ' has been created']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}
	}

	public function edit($id)
	{
		return view('adstype.edit')->with('adsTypeRow', AdsType::find($id));
	}

	public function update(AdsTypeRequest $req, $id)
	{
		$adsType = AdsType::find($id);
		$adsType->name = $req->name;

		try
		{
			$adsType->save();
			return redirect()->back()->with('messages', ['Ads Type Name : ' . $adsType->name . ' has been updated']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}		
	}

	public function destroy($id)
	{
		$adstype = AdsType::find($id);
		$name = $adstype->name;
		AdsType::destroy($id);
		return redirect()->back()->with('messages', ['Ads Type Name : ' . $name . ' has been deleted']);	
	}
}

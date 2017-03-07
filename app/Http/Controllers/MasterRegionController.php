<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterRegion;
use App\Http\Requests\MasterRegionRequest;

class MasterRegionController extends Controller
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
		return view('master_region.index')->with('master_regions', MasterRegion::select('radar_id', 'name')->get());		
	}

	public function create()
	{
		return view('master_region.create');
	}

	public function store(MasterRegionRequest $req)
	{
		
		$master_region = new MasterRegion();
		$master_region->name = $req->name;

		try
		{
			$master_region->save();
			return redirect()->back()->with('messages', ['MasterRegion Name : ' . $master_region->name . ' has been created']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}
	}

	public function edit($id)
	{
		return view('master_region.edit')->with('masterRegionRow', MasterRegion::find($id));
	}

	public function update(MasterRegionRequest $req, $id)
	{
		$masterRegion = MasterRegion::find($id);
		$masterRegion->name = $req->name;

		try
		{
			$masterRegion->save();
			return redirect()->back()->with('messages', ['Master Region Name : ' . $masterRegion->name . ' has been updated']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}		
	}

	public function destroy($id)
	{
		$masterRegion = MasterRegion::find($id);
		$name = $masterRegion->name;
		MasterRegion::destroy($id);
		return redirect()->back()->with('messages', ['Region Name : ' . $name . ' has been deleted']);

	}


}

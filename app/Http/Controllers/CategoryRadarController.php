<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_radar;
use App\Http\Requests\CategoryRadarRequest;

class CategoryRadarController extends Controller
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

	//return view('category.index')->with('categories', Category::select('id', 'name', 'color', 'is_visible', 'news_type_id')->get());

		//Category::select('id', 'name', 'color', 'is_visible', 'news_type_id')->get()->children()
		//dd(view('category.index')->with('categories', Category::select('id', 'name', 'color', 'is_visible', 'news_type_id')->where('parent_id', null)->children()->get()));
		//dd(Category::with('children')->where('parent_id', null)->get());
		//dd(Category::with('children')->where('parent_id', null)->get());
		return view('categoryradar.index')->with('categories', Category_radar::with(['children'=>function($q){
			$q->select('id', 'name', 'color', 'is_visible', 'parent_id', 'news_type_id', 'is_fillable', 'radar_id');
			$q->orderBy('name', 'asc');
		}])->where('parent_id', null)->orderBy('name', 'asc')->get());
	}

	public function create()
	{
		return view('categoryradar.create');
	}

	public function store(CategoryRadarRequest $req)
	{
		

		$CategoryParentMaxOrderTopRow = Category_radar::select('order_top')->parent()->orderBy('order_top', 'desc')->first();
		
		$CategoryRadarParentMaxOrderBottomRow = Category_radar::select('order_bottom')->parent()->orderBy('order_bottom', 'desc')->first();

		$cat = new Category_radar();
		$cat->name = $req->name;
		$cat->color = $req->color;
		$cat->is_visible = 0;
		$cat->order_top = $CategoryParentMaxOrderTopRow->order_top + 1;
		$cat->order_bottom = $CategoryRadarParentMaxOrderBottomRow->order_bottom + 1;
		$cat->parent_id = null;
		$cat->news_type_id = 1;


	
		try
		{
			$cat->save();
			return redirect()->back()->with('messages', ['CategoryRadar Name : ' . $cat->name . ' has been created']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}
	}

	public function edit($id)
	{
		return view('categoryradar.edit')->with('categoryradarRow', Category_radar::select('id', 'name', 'color', 'is_visible', 'parent_id', 'news_type_id', 'is_fillable')->find($id));
	}

	public function update(CategoryRadarRequest $req, $id)
	{
		$cat = Category_radar::find($id);
		$cat->name = $req->name;
		$cat->color = $req->color;
		$cat->is_visible = $req->is_visible;
		$cat->news_type_id = $req->news_type_id;
		$cat->is_fillable = $req->is_fillable;

		//$cat->order_top = $req->order_top;
		//$cat->order_bottom = $req->order_bottom;
		//$cat->parent_id = $req->parent_id;

		try
		{
			$cat->save();
			return redirect()->back()->with('messages', ['CategoryRadar Name : ' . $cat->name . ' has been updated']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}		
	}

	public function destroy($id)
	{
		$cat = Category_radar::find($id);
		$name = $cat->name;
		Category_radar::destroy($id);
		return redirect()->back()->with('messages', ['CategoryRadar Name : ' . $name . ' has been deleted']);
	}

	public function getChild($id)
	{

		$childs = Category_radar::where('parent_id', $id)->pluck('name','id');
		if($childs and count($childs))
		{
			$category_radar = Category_radar::where('id',$id)->fillable()->pluck('name','id');
			if($category_radar)
			{
				$mergeArray = array_merge($category->toArray(), $childs->toArray());
				return $mergeArray;
			}
			else
			{
				return $childs;
			}
		}
		else
		{
			return response()->json(["false"],500);
		}
		
	}

	
}

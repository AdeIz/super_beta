<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
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
		return view('category.index')->with('categories', Category::with(['children'=>function($q){
			$q->select('id', 'name', 'color', 'is_visible', 'parent_id', 'news_type_id', 'is_fillable');
			$q->orderBy('name', 'asc');
		}])->where('parent_id', null)->orderBy('name', 'asc')->get());
	}

	public function create()
	{
		return view('category.create');
	}

	public function store(CategoryRequest $req)
	{
		
		$CategoryParentMaxOrderTopRow = Category::select('order_top')->parent()->orderBy('order_top', 'desc')->first();
		
		$CategoryParentMaxOrderBottomRow = Category::select('order_bottom')->parent()->orderBy('order_bottom', 'desc')->first();

		$cat = new Category();
		$cat->name = $req->name;
		$cat->color = $req->color;
		$cat->is_visible = 0;
		$cat->news_type_id=1;
		$cat->order_top = $CategoryParentMaxOrderTopRow->order_top + 1;
		$cat->order_bottom = $CategoryParentMaxOrderBottomRow->order_bottom + 1;
		$cat->parent_id = null;

		
		try
		{
			$cat->save();
			return redirect()->back()->with('messages', ['Category Name : ' . $cat->name . ' has been created']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}
	}

	public function edit($id)
	{
		return view('category.edit')->with('categoryRow', Category::select('id', 'name', 'color', 'is_visible', 'parent_id', 'news_type_id', 'is_fillable')->find($id));
	}

	public function update(CategoryRequest $req, $id)
	{
		$cat = Category::find($id);
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
			return redirect()->back()->with('messages', ['Category Name : ' . $cat->name . ' has been updated']);						
		} 
		catch (\Exception $e)
		{
			return redirect()->back()->with('errMessages', [(DEBUGMODE) ? $e->getMessage() : 'Failed. Please try again']);
		}		
	}

	public function destroy($id)
	{
		$cat = Category::find($id);
		$name= $cat->name;
		Category::destroy($id);
		return redirect()->back()->with('messages', ['Category Name : ' . $name . ' has been deleted']); 

	}

	public function getChild($id)
	{

		$childs = Category::where('parent_id', $id)->pluck('name','id');
		if($childs and count($childs))
		{
			$category = Category::where('id',$id)->fillable()->pluck('name','id');
			if($category)
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

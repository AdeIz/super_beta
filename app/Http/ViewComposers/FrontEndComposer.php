<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Category;

class FrontEndComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $headerCategories = Category::select('id','name')
                                    ->visible()
                                    ->parent()
                                    ->with(['children'=>function($query){
                                        $query->select('id','name','parent_id');
                                    }])
                                    ->regular()
                                    ->orderBy('order_top', 'asc')
                                    ->get();

        // $footerCategoriesFirst = Category::select('id','name')
        //                             ->visible()
        //                             ->parent()   
        //                             ->with(['children'=>function($query){
        //                                 $query->select('id','name','parent_id');
        //                             }])
        //                             ->has('children')
        //                             ->orderBy('order_top', 'asc')
        //                             ->get();                            
        // dd($footerCategoriesFirst->pluck('name'));
        $view->with('headerCategories', $headerCategories)
             // ->with('footerCategoriesFirst', $footerCategoriesFirst)
             ;
    }

     
}
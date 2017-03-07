<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {

        // view composer for backend
        View::composer('layouts.app', 'App\Http\ViewComposers\BackEndComposer');
        
        // view composer for frontend
        View::composer('master', 'App\Http\ViewComposers\FrontEndComposer');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
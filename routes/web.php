<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');
Route::get('/radarbali', 'RadarbaliController@index')->name('radarbali-index');
Route::get('/radarbanyuwangi', 'RadarbanyuwangiController@index')->name('radarbanyuwangi-index');
Route::get('/radarbojonegoro', 'RadarbojonegoroController@index')->name('radarbojonegoro-index');
Route::get('/radarbromo', 'RadarbromoController@index')->name('radarbromo-index');
Route::get('/radarjember', 'RadarjemberController@index')->name('radarjember-index');
Route::get('/radarjogja', 'RadarjogjaController@index')->name('radarjogja-index');
Route::get('/radarkediri', 'RadarkediriController@index')->name('radarkediri-index');
Route::get('/radarkudus', 'RadarkudusController@index')->name('radarkudus-index');
Route::get('/radarmadiun', 'RadarmadiunController@index')->name('radarmadiun-index');
Route::get('/radarmadura', 'RadarmaduraController@index')->name('radarmadura-index');
Route::get('/radarmalang', 'RadarmalangController@index')->name('radarmalang-index');
Route::get('/radarmojokerto', 'RadarmojokertoController@index')->name('radarmojokerto-index');
Route::get('/radarsemarang', 'RadarsemarangController@index')->name('radarsemarang-index');
Route::get('/radarsolo', 'RadarsoloController@index')->name('radarsolo-index');
Route::get('/radarsurabaya', 'RadarsurabayaController@index')->name('radarsurabaya-index');
Route::get('/radartulungagung', 'RadartulungagungController@index')->name('radartulungagung-index');

Route::group(['middleware'=>'auth'], function()
{
	Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');	

	// *********************************************** USER **************************************************

	Route::group(['prefix'=>'user'], function()
	{
		//Route::get('id}', 'UserController@index')->name('user-get');
		//Route::get('{category}/{slug}/{id}', 'UserController@create')->name('user-create');
		Route::get('create', 'UserController@create')->name('user-create');
		Route::post('store', 'UserController@store')->name('user-store');
		Route::get('list', 'UserController@index')->name('user-list');
		Route::get('/tarikRel', 'UserController@rel')->name('user-rel');
	});

	// *********************************************** PHOTO **************************************************

	Route::group(['prefix'=>'photo'], function()
	{
		// get photo comment
		Route::get('{id}/comment', 'CommentController@getPhoto')->where('id', '[0-9]+')->name('photo-comment');

		// insert comment to photo
		Route::get('{id}/comment/store', 'CommentController@storePhoto')->where('id', '[0-9]+')->name('photo-comment-store');

	});

	// *********************************************** VIDEO **************************************************

	Route::group(['prefix'=>'video'], function()
	{
		// get video comment
		Route::get('{id}/comment', 'CommentController@getVideo')->where('id', '[0-9]+')->name('video-comment');

		// insert comment to video
		Route::get('{id}/comment/store', 'CommentController@storeVideo')->where('id', '[0-9]+')->name('video-comment-store');

	});


	// *********************************************** NEWS **************************************************

	Route::group(['prefix'=>'news'], function()
	{
		// create news
		Route::get('create', 'NewsController@create')->name('news-create');

		// store news
		Route::post('store', 'NewsController@store')->name('news-store');

		// edit news
		Route::get('edit', 'NewsController@edit')->name('news-edit');

		// update news
		Route::post('update', 'NewsController@update')->name('news-update');

		// get video comment
		Route::get('{id}/comment', 'CommentController@getNews')->where('id', '[0-9]+')->name('news-comment');

		// insert comment to video
		Route::get('{id}/comment/store', 'CommentController@storeNews')->where('id', '[0-9]+')->name('news-comment-store');

	});


//GET create --> addnew form (view)

//POST store --> submit form (redirect back / redirect somewhere else)

//GET edit --> edit form (view)
//POST update --> submit form (redirect back / redirect somewhere else)

//GET index --> list (retrieve & view)

//POST destroy --> (delete by id return to calee)

	// ***************************************** MASTER: CATERGORY **************************************************

	Route::group(['prefix'=>'category'], function()
	{
		// get category create form
		Route::get('create', 'CategoryController@create')->name('category-create');
		
		// post store category
		Route::post('store', 'CategoryController@store')->name('category-store');


		// get category edit form
		Route::get('{id}/edit', 'CategoryController@edit')->where('id', '[0-9]+')->name('category-edit');

		// post update category 
		Route::post('{id}/update', 'CategoryController@update')->name('category-update');


		// post destroy category
		Route::post('{id}/destroy', 'CategoryController@destroy')->name('category-destroy');

		// get category list
		Route::get('/', 'CategoryController@index')->name('category-index');

		// get child category list
		Route::get('{id}/child', 'CategoryController@getChild')->name('category-child-get');

	});


	Route::group(['prefix'=>'categoryradar'], function()
	{
		// get category create form
		Route::get('create', 'CategoryRadarController@create')->name('categoryradar-create');
		
		// post store category
		Route::post('store', 'CategoryRadarController@store')->name('categoryradar-store');


		// get category edit form
		Route::get('{id}/edit', 'CategoryRadarController@edit')->where('id', '[0-9]+')->name('categoryradar-edit');

		// post update category 
		Route::post('{id}/update', 'CategoryRadarController@update')->name('categoryradar-update');


		// post destroy category
		Route::post('{id}/destroy', 'CategoryRadarController@destroy')->name('categoryradar-destroy');

		// get category list
		Route::get('/', 'CategoryRadarController@index')->name('categoryradar-index');

		// get child category list
		Route::get('{id}/child', 'CategoryRadarController@getChild')->name('categoryradar-child-get');

	});

	// *********************************************** ADSTYPE **************************************************

	Route::group(['prefix'=>'adstype'], function()
	{
		// get adstype create form
		Route::get('create', 'AdsTypeController@create')->name('adstype-create');
		
		//post store adstype
		Route::post('store', 'AdsTypeController@store')->name('adstype-store');

		// get adstype edit form
		Route::get('{id}/edit', 'AdsTypeController@edit')->where('id', '[0-9]+')->name('adstype-edit');

		// post update adstype
		Route::post('{id}/update', 'AdsTypeController@update')->name('adstype-update');

		// post destroy adstype
		Route::post('{id}/destroy', 'AdsTypeController@destroy')->name('adstype-destroy');

		// get adstype list
		Route::get('/', 'AdsTypeController@index')->name('adstype-index');		

	});

	// *********************************************** MASTER REGION ************************************************

	Route::group(['prefix'=>'master_region'], function()
	{
		// get master_region create form
		Route::get('create', 'MasterRegionController@create')->name('master_region-create');
		
		//post store master_region
		Route::post('store', 'MasterRegionController@store')->name('master_region-store');

		// get master_region edit form
		Route::get('{id}/edit', 'MasterRegionController@edit')->where('id', '[0-9]+')->name('master_region-edit');

		// post update master_region
		Route::post('{id}/update', 'MasterRegionController@update')->name('master_region-update');

		// post destroy master_region
		Route::post('{id}/destroy', 'MasterRegionController@destroy')->name('master_region-destroy');

		// get master_region list
		Route::get('/', 'MasterRegionController@index')->name('master_region-index');		

	});


	// *********************************************** USER **************************************************

	Route::group(['prefix'=>'user'], function()
	{
		// get user create form
		Route::get('create', 'UserController@create')->name('user-create');
		
		// post store user
		Route::post('store', 'UserController@store')->name('user-store');


		// get user edit form
		Route::get('{id}/edit', 'UserController@edit')->where('id', '[0-9]+')->name('user-edit');

		// post update user
		Route::post('{id}/update', 'UserController@update')->name('user-update');

		// post destroy user
		Route::post('{id}/destroy', 'UserController@destroy')->name('user-destroy');

		// get user list
		Route::get('/', 'UserController@index')->name('user-index');

	});

	// *********************************************** RADAR **************************************************

	Route::group(['prefix'=>'radar'], function()
	{
		// create radar
		Route::get('create', 'RadarController@create')->name('radar-create');

		// store radar
		Route::post('store', 'RadarController@store')->name('radar-store');

		// edit news radar
		Route::get('edit', 'RadarController@edit')->name('radar-edit');

		// update news radar
		Route::post('store', 'RadarController@update')->name('radar-update');

		// get video comment
		Route::get('{id}/comment', 'CommentController@getNews')->where('id', '[0-9]+')->name('radar-comment');

		// insert comment to video
		Route::get('{id}/comment/store', 'CommentController@storeNews')->where('id', '[0-9]+')->name('radar-comment-store');

	});

});
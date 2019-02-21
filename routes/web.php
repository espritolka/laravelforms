<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', ['as'=>'home','middleware'=>'mymiddle', function () {
    return view('welcome');
}]); */

Route::get('/logintest', ['as'=>'home', function(){
    return view('login');
}]);

Route::post('/testik', 'UsersController@store');

// Route::resource('/testik', 'UsersController');



Route::get('/registertest', ['as'=>'home', function(){
    return view('register');
}]);


Route::get('admin', function () {
    return view('welcome');
})->name('admin');

Route::get('admin/blog', function () {
    return view('admin_blog');
});

Route::post('/test', function () {

});

#Route::get('/', ['as'=>'home','uses'=>'Admin\IndexController@show']);

Route::get('/user/{id}', 'Test\UserController@show');

//Route::get('/', ['as'=>'home','middleware'=>'auth','uses'=>'Admin\IndexController@show']);

//Route::get('/about/{id}','FirstController@show');

Route::get('/about',['as'=>'about','uses'=>'Admin\IndexController@show_about']);

Route::get('/articles',['uses'=>'Admin\Core@getArticles']);

Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle']);

//Route::get('/article/{page}',['middleware'=>'mymiddle:admin','uses'=>'Admin\Core@getArticle','as'=>'article'])/* ->middleware(['mymiddle']) */;

//Route::get('/article/{page}',['uses'=>'Admin\Core@getArticle','as'=>'article','middleware'=>'mymiddle']);
//Route::get('/article/{page}','Admin\Core@getArticle')->middleware('auth');
//list pages
// Route::resource('/pages','Admin\CoreResource');

//Route::get('/article/{id}', ['as'=>'article', function ($id) {
//    echo $id;
//}]);


//Route::get('/page', function() {


//Route::get('/page/{id}/{cat}', function($id,$cat) {
//    echo '<pre>';
//    echo $id.'|'.$cat;
//    echo '</pre>';
//});
//    print_r($_ENV);
//    echo Config::get('app.locale');
//    echo '</pre>';
//    echo env('APP_ENV');



//Route::get('/page/{cat}/{id}', function($var1) {
//    echo '<pre>';
//    
//    echo $var1;
//
//
//    echo '</pre>';
//})->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+']);




//Route::group(['prefix'=>'admin/{id}'],function() {

//    Route::get('page/create/{var}',function($id) {
//    echo 'page/create';
//    return redirect()->route('article', array('id'=>25));
//	$route = Route::current();
	
//	echo $route->getName();
//	echo $route->getParameter('var',24);
//	print_r($route->parameters());
//    })->name('createpage');

//    Route::get('page/edit',function() {
//    echo 'page/edit';
//    });

//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

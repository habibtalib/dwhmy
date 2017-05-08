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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Auth::routes();

Route::get('/home', 'HomeController@index');


/*App::bind('App\Billing\Stripe' , function () {
    return new App\Billing\Stripe(config('services.stripe.secret'));
});*/

/*App::singleton('App\Billing\Stripe' , function () {
    return new App\Billing\Stripe(config('services.stripe.secret'));
});*/

//App::instance('App\Billing\Stripe' , $stripe);


//$stripe = App::make('App\Billing\Stripe');

//$stripe = resolve('App\Billing\Stripe');
//dd( resolve('App\Billing\Stripe'));

//Route::get('/', 'PostController@index')->name('home');

Route::get('/post/create', 'PostController@create');
Route::get('/post/{post}', 'PostController@show');
Route::post('/post', 'PostController@store');


Route::get('/post/tag/{tag}', 'TagsController@index');

Route::post('/post/{post}/comment', 'CommentController@store');

Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionController@create')->name('login');
Route::post('/login', 'SessionController@store');

Route::get('/logout', 'SessionController@destroy');


Route::get('/', 'MainController@index')->name('home');
Route::post('/', 'MainController@index');
Route::post('/customizer', 'MainController@customizer');
Route::get('/data', 'MainController@data');
Route::post('/sidebar_result', 'MainController@sidebar_result');
Route::post('/infobox', 'MainController@infoBox');
Route::post('/sidebar_detail', 'MainController@sidebar_detail');
Route::post('/listing', 'MainController@listing');
Route::get('/detail/{item}', 'MainController@detail');
Route::get('/edit/{item}', 'MainController@edit');
Route::get('/create', 'MainController@create');
Route::get('/listing', 'MainController@listing');
Route::post('/submit', 'MainController@submit');

Route::post('/update/{id}', 'MainController@update');

Route::post('/modal/sign-in', 'ModalController@signIn');
Route::post('/modal/register', 'ModalController@register');
Route::post('/modal/reset_password', 'ModalController@resetPassword');
Route::post('/modal/submit', 'ModalController@submit');
Route::post('/modal/item/{item}', 'ModalController@item');

Route::get('/contact-us', 'MainController@contactUs');
Route::get('/about-us', 'MainController@aboutUs');
Route::get('/img/{id}', 'MainController@getimage');
Route::get('/delete/{id}', 'MainController@deleteItem');

Route::get('event', 'EventController@index');
Route::get('class', 'ClassesController@index');
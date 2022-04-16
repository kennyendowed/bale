<?php
use Illuminate\Support\Facades\Route;
if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}
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

// Route::middleware(['auth'])->group(function(){
//   Route::get('categories', 'CategoryController@index')->name('categories');
//   Route::get('categories/{id}', 'CategoryController@show');
//   Route::get('tags','TagController@index')->name('tags');
//   Route::get('tags/{id}','TagController@show');
//   Route::get('posts','PostController@index')->name('posts');
//   Route::get('posts/{id}','PostController@show')->name('show-post');
//   Route::get('new-post','PostController@newpost')->name('add-post');
//   Route::post('new-post','PostController@store')->name('save-post');
//   Route::get('comments','CommentController@index')->name('comments');
//   Route::get('comments/{id}','CommentController@show');
//   Route::post('categories','CategoryController@store')->name('save-category');
//
// });
// Route::get('test', function () {
//   $post =User_tickets::find(1);
//   return $post->author;
//    // return new App\Http\Resources\CategoriesResource($post);
//
// });

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear', function() {
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  Artisan::call('view:clear');
 Artisan::call('route:clear');
 Artisan::call('config:cache');

   return "Cleared!";

});

// Route::get('/Authorization/{id?}', 'Auth\RegisterController@Authorization')->name('Authorization');
// Route::get('/',  'EventsController@welcome');
// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/sendContact','EventsController@sendEmail')->name('sendContact');
// Route::post('/creg2','EventsController@creg2')->name('creg2');

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Route::get('/ticket/{id?}', 'TicketsController@load_form')->name('ticket');

// Route::get('qr-code-g','TicketsController@buildQrCode')->name('qr-code-g');
// Route::post('/pay', 'TicketsController@redirectToGateway')->name('pay');
// Route::get('/callback', 'TicketsController@handleGatewayCallback');
// Route::get('/callback2', 'TicketsController@handleGatewayCallback2');
// Route::get('/payment', 'TicketsController@paymentpage')->name('payment');
// Route::post('/BuyTicket', 'TicketsController@createPackage')->name('buy_ticket');
// Route::post('/booking', 'TicketsController@createBooking')->name('booking');
// Route::get('/success', 'TicketsController@success')->name('success');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::middleware(['auth'])->group(function(){
// Route::get('/verify', 'TicketsController@confirm')->name('verify');
// Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
// Route::get('/rg', 'HomeController@rg')->name('rg');
// Route::get('/ct', 'HomeController@ct')->name('ct');
// // Route::get('up/{id}/{qrcode}','HomeController@up')->name('up');
// Route::get('up/{id}','HomeController@up')->name('up');
// Route::post('/create_food_item', 'HomeController@createFood')->name('create_food_item');
// Route::get('/create-Food', 'HomeController@showFood')->name('create-Food');
// Route::get('/create-Events', 'HomeController@showEvents')->name('create-Events');
// Route::post('/create_event_item', 'HomeController@createEvent')->name('create_event_item');
// Route::post('/tickets_type', 'HomeController@createEvent_Tickets')->name('create_event_ticket');

});

//staff || administrator AUTH
Route::group(['middleware'=>'check-permission:administrator|staff'], function () {
  //GET
//   Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
//    Route::post('/send_mail','HomeController@tEmail')->name('send_mail');
//    Route::get('delete/{id}','HomeController@export')->name('delete');
  
  // Route::get('/reg_all', 'OrderController@reg_all')->name('reg_all');
  // Route::get('/sales', 'OrderController@sales')->name('sales');
  // Route::get('/payment_history', 'OrderController@payment_history')->name('payment_history');
  //   Route::get('/deleteproduct', 'OrderController@deletePackage')->name('deleteproduct');
  // Route::get('/createproduct', 'OrderController@createproduct')->name('createproduct');
  // Route::post('/update_vendor_product', 'OrderController@update_vendor_product')->name('update_vendor_product');
  // Route::post('/create_vendor_product', 'OrderController@create_vendor_product')->name('create_vendor_product');

});

Route::group(['middleware'=>'check-permission:administrator'], function () {
  //GET
//   Route::get('/export','HomeController@export')->name('export');
// //     // Route::get('up/{id}/{qrcode}','HomeController@up')->name('up');
//   Route::get('delete/{id}','OrderController@delete')->name('delete');
//
//   //post
//   Route::post('/creg22','EventsController@creg22')->name('creg22');
});

Route::group(['middleware'=>'check-permission:administrator|staff|customer'], function () {
  //GET
  // Route::get('add-to-cart/{id}', 'OrderController@addToCart');
  // Route::get('cart', 'OrderController@cart');
  //   Route::get('history', 'OrderController@ViewSales');
  // Route::get('/callback', 'OrderController@handleGatewayCallback');
  // //POST
  // Route::post('/checkout','OrderController@checkout')->name('checkout');
  // Route::post('/checkOUT','OrderController@checkOUT')->name('checkOUT');
  // Route::patch('update-cart', 'OrderController@update');
  // Route::delete('remove-from-cart', 'OrderController@remove');
  // Route::post('/Payment', 'OrderController@createPackage')->name('buy_ticket');


});

Route::get('/{name?}/{id?}', 'HomeController@show')->name('order');
// Route::get('/{name?}', 'HomeController@order')->name('order');


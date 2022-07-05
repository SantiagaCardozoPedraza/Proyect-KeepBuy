<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomeComponet;
use App\Http\Livewire\CartComponet;
use App\Http\Livewire\ShopComponet;
use App\Http\Livewire\CheckoutComponet;
use App\Http\Livewire\ContactComponet;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;


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
});*/

Route::get('/',HomeComponet::class);

Route::get('/shop',ShopComponet::class);
Route::get('/cart',CartComponet::class)->name('producto.cart');
Route::get('/checkout',CheckoutComponet::class);
Route::get('/contact',ContactComponet::class);

Route:: get ('/producto/{slug}',DetailsComponent::class)->name('producto.details');








/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
*/
//para usuario
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
  
});

//for admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');

});
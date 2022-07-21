<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/about-us', [App\Http\Controllers\WelcomeController::class, 'aboutus'])->name('aboutus');
Route::get('/contact-us', [App\Http\Controllers\WelcomeController::class, 'contactus'])->name('contactus');
Route::get('/catalog', [App\Http\Controllers\WelcomeController::class, 'catalog'])->name('catalog');

Route::get('/property-list/{title_slug}', [App\Http\Controllers\WelcomeController::class, 'viewproperty'])->name('viewproperty');

Auth::routes(['reset' => false, 'logout' => false, 'confirm' => false, 'register' => false]);
Route::post('logout', [App\Http\Controllers\UserController::class, 'logout'])->name('logout');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');


Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('property', App\Http\Controllers\PropertyListController::class)->except(['destroy']);
    Route::get('property/delete/{id}', [App\Http\Controllers\PropertyListController::class, 'destroy'])->name('propertydelete');

    Route::prefix('account')->group(function () {
        Route::get('personal-info', [App\Http\Controllers\UserController::class, 'personalInfo'])->name('personalinfo');
        Route::get('password-security', [App\Http\Controllers\UserController::class, 'passwordSecurity'])->name('passwordsecurity');
        Route::get('my-property', [App\Http\Controllers\UserController::class, 'myProperty'])->name('myproperty');
        Route::get('wishlist', [App\Http\Controllers\UserController::class, 'wishlist'])->name('wishlist');
        Route::patch('profile-update', [App\Http\Controllers\UserController::class, 'profileUpdate'])->name('profileupdate');
        Route::patch('password-update', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatepassword');
    });

    Route::prefix('location')->group(function () {
        Route::resource('country', App\Http\Controllers\CountryController::class)->except(['destroy', 'show']);
        Route::resource('state', App\Http\Controllers\StateController::class)->except(['destroy', 'show']);
        Route::resource('city', App\Http\Controllers\CityController::class)->except(['destroy', 'show']);
    });

    Route::prefix('user-management')->group(function () {
        Route::resource('roles', App\Http\Controllers\RoleController::class)->except(['destroy', 'show']);
        Route::resource('user', App\Http\Controllers\UserController::class)->only(['index', 'edit', 'update']);
    });

    Route::prefix('realstate')->group(function () {
        Route::resource('aminity', App\Http\Controllers\AminityController::class)->except(['destroy', 'show']);
        Route::resource('near-location', App\Http\Controllers\NearLocationController::class)->except(['destroy', 'show']);
        Route::resource('property-type', App\Http\Controllers\PropertyTypeController::class)->except(['destroy', 'show']);
        Route::resource('delivery-unit', App\Http\Controllers\DeliveryUnitController::class)->except(['destroy', 'show']);
        Route::resource('priority', App\Http\Controllers\PriorityController::class)->except(['destroy', 'show']);
        Route::resource('priority-under', App\Http\Controllers\PriorityUnderController::class)->except(['destroy', 'show']);
        Route::resource('property-status', App\Http\Controllers\PropertyStatusController::class)->except(['destroy', 'show']);
        Route::resource('listing-category', App\Http\Controllers\ListingCategoryController::class)->except(['destroy', 'show']);
        Route::resource('listing-type', App\Http\Controllers\ListingTypeController::class)->except(['destroy', 'show']);
    });
});

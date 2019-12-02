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

Route::get('/','HomeController@getIndex')->name('home');
Route::get('/ticket-detail/{eventId}','HomeController@getTicketDetail')->name('ticket-detail');

//TODO::group router
Route::get('/sport','HomeController@getSportEvent')->name('sport');
Route::get('/music','HomeController@getMusicEvent');
Route::get('/conference','HomeController@getConferenceEvent');

Route::get('/event/{eventId}/ticket-booking/{userId}', 'BookingController@chooseTicket'); 

//Auth
/**
 * Route cho Admin
 */
Route::prefix('admin')->group(function(){
    /**
     * Gom nhóm các route cho phần admin
     */

    /**
     * URL: localhost/admin/
     * Route mặc định của admin
     */
    Route::get('/','Admin\AdminController@index')->name('admin.dashboard');


    /**
     *  URL: localhost/admin/dashboard
     * Route đăng nhập thanh công
     */
    Route::get('/dashboard','Admin\AdminController@index')->name('admin.dashboard');

    /**
     *  URL: localhost/admin/register
     * Route trả về view dùng để đăng kí tài khoản admin
     */
    Route::get('/register','Admin\AdminController@createAdmin')->name('admin.register');

    /**
     *  URL: localhost/admin/register
     * Route dùng để đăng kí một admin từ form POST
     */
    Route::post('/register','Admin\AdminController@storeAdmin')->name('admin.store');


    /**
     *  URL: localhost/admin/login
     * Route trả về để đăng nhập admin
     */
    Route::get('/login','Admin\LoginController@login')->name('admin.auth.login');


    /**
     *  URL: localhost/admin/login
     * Route xử lí quá trình đăng nhập của admin
     */
    Route::post('/login','Admin\LoginController@loginAdmin')->name('admin.auth.loginadmin');

    /**
     *  URL: localhost/admin/logout
     * Route dùng để đăng xuất
     */
    Route::POST('/logout','Admin\LoginController@logout')->name('admin.auth.logout');
});

Route::prefix('organizer')->group(function(){
    /**
     * URL: localhost/organizer/
     * Route mặc định của Organizer
     */
    Route::get('/','Organizers\OrganizerAuthController@index')->name('organizer.dashboard');

    /**
     * URL: localhost/organizer/dashboard
     * Route trả về view khi người dùng đăng nhập thành công
     */
    Route::get('/dashboard','Organizers\OrganizerAuthController@index')->name('organizer.dashboard');
    Route::get('/register','Organizers\OrganizerAuthController@createOrganizer')->name('organizer.auth.register');
    Route::post('/register','Organizers\OrganizerAuthController@storeOrganizer')->name('organizer.auth.store');
    Route::get('/login','Organizers\OrganizerAuthController@login')->name('organizer.auth.login');
    Route::post('/login','Organizers\OrganizerAuthController@loginOrganizer')->name('organizer.auth.loginOrganizer');
    Route::post('/logout','Organizers\OrganizerAuthController@logout')->name('organizer.auth.logout');

});


/**
 * Route cho user
 */
Route::prefix('user')->group(function (){
    Route::get('/create-event','UserController@getCreateEvent')->name('create-event');
});


/**
 * Route cho phần đăng nhập bằng google
 */
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');
Route::get('/logout','SocialController@logout')->name('logout');

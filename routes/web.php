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
Route::view('/', 'home',['page'=>'home'])->name('home');
Route::prefix('/activities')->group(function () {
    $folder = 'activities';
	Route::view('tutorials',"{$folder}.tutorials",['page'=>'activities'])->name('tutorials');
	// Route::view('hackathons',"{$folder}.hackathons",['page'=>'activities'])->name('hackathons');
	Route::view('seminars',"{$folder}.seminars",['page'=>'activities'])->name('seminars');
	Route::view('clubs',"{$folder}.clubs",['page'=>'activities'])->name('clubs');
});
Route::prefix('/achievements')->group(function () {
    $folder = 'achievements';
	Route::view('students',"{$folder}.student-projects",['page'=>'achievements'])->name('student-projects');
	Route::view('organization',"{$folder}.organization-projects",['page'=>'achievements'])->name('organization-projects');
    Route::view('reports',"{$folder}.reports",['page'=>'achievements'])->name('reports');
});
Route::view('/about', 'about',['page'=>'about','sub'=>'about'])->name('about');
Route::prefix('/about')->group(function () {
    $folder = 'about';
	Route::view('advisors',"{$folder}.advisors",['page'=>'about','sub'=>'advisors'])->name('advisors');
	Route::view('contact',"{$folder}.contact",['page'=>'about','sub'=>'contact'])->name('contact');
    Route::view('current',"{$folder}.current",['page'=>'about','sub'=>'current'])->name('current');
    Route::view('faqs',"{$folder}.faqs",['page'=>'about','sub'=>'faqs'])->name('faqs');
	Route::view('jobs',"{$folder}.jobs",['page'=>'about','sub'=>'jobs'])->name('jobs');
    Route::view('management',"{$folder}.management",['page'=>'about','sub'=>'management'])->name('management');
    Route::view('partners',"{$folder}.partners",['page'=>'about','sub'=>'partners'])->name('partners');
	Route::view('sponsors',"{$folder}.sponsors",['page'=>'about','sub'=>'sponsors'])->name('sponsors');
    Route::view('team',"{$folder}.team",['page'=>'about','sub'=>'team'])->name('team');
});
Route::view('/blog', 'blog',['page'=>'blog'])->name('blog');
Route::view('/help', 'help',['page'=>'help'])->name('help');

Auth::routes();

Route::get('/account', 'HomeController@index')->name('account');

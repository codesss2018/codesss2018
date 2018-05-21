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
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/courses/show','CourseController@show');
Route::get('/courses/show/all','CourseController@showAll');
Route::get('/course/show/{courseid}','CourseController@getShow');
Route::middleware(['auth','ensurelevel'])->group(function () {
    Route::prefix('/account')->group(function () {
        Route::get('profile','UserController@profileEdit')->name('private-profile');
        Route::get('courses','CourseController@my')->name('my-courses');
        Route::get('define/course/{courseid?}','CourseController@dashboardEditor')->name('dashboard-editor');
        Route::get('session/{sessid}','CodeSessionController@index')->name('session');

        //
        Route::get('comment/{commentid}','CommentController@threadFace')->name('face-thread-comments');
        Route::get('comments/{courseid}','CommentController@courseFace')->name('face-course-comments');
        Route::get('course/{courseid}','CourseController@detailFace')->name('face-course');

        Route::prefix('session/{sessid}')->group(function () {

            Route::get('define/course/{courseid?}','CourseController@appEditor')->name('app-editor');
            Route::get('courses/all','CourseController@index')->name('all-courses');
            Route::get('courses/my','CourseController@mySession')->name('session-courses');
            Route::post('course/create','CourseController@create');
            Route::post('course/edit/{courseid}','CourseController@update');
            Route::post('course/delete/{courseid}','CourseController@delete');
            Route::get('course/{courseid}','CourseController@detail')->name('course');
            Route::get('comments','CommentController@index')->name('comments');
            Route::prefix('course/{courseid}')->group(function (){
                Route::get('comments','CommentController@course')->name('course-comments');
                Route::get('comment/{commentid}','CommentController@thread')->name('thread-comments');
                Route::post('comment/create','CommentController@create');
                Route::post('comment/delete/{commentid}','CommentController@delete');
                Route::get('quiz/{quizid}','QuizController@get');
                Route::post('quiz/create/{quizid}','QuizController@create');
                Route::post('quiz/delete/{quizid}','QuizController@delete');
                Route::get('tutorial','TutorialController@index')->name('tutorial');
                Route::get('tutorial/{tutorialid}','TutorialController@get');
                Route::post('tutorial/create','TutorialController@create');
                Route::post('tutorial/edit/{tutorialid}','TutorialController@update');
                Route::post('tutorial/delete/{tutorialid}','TutorialController@delete');
            });
        });
    });
});

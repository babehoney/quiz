<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');
Route::get('/verification/{confirmationCode}','UserController@verify');
Route::post('/Registration','UserController@Registered');

Route::get('home', 'HomeController@index');
Route::get('contact','ContactController@index');
Route::post('contact-us','ContactController@create');
Route::get('quiz/{id}', 'QuizController@getSingleQuiz');

//Quiz submission and calculation
Route::post('quiz/result','QuizController@result');

Route::get('user/profile','UserController@userProfile');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



//Admin routes
Route::get('dashboard', 'AdminController@index');

Route::get('admin/quiz/new','AdminController@getCreateQuizPage');
Route::get('admin/quiz/all', 'AdminController@getQuizes');
Route::get('admin/quiz/{id}','AdminController@getQuiz');
Route::get('quiz/{id}/question/new','AdminController@getNewQuestionPage');
Route::get('admin/question/{id}', 'AdminController@getSingleQuestionPage');
Route::get('admin/skill/new','AdminController@getCreateSkillPage');

Route::post('new-quiz','AdminController@createNewQuiz');
Route::post('new-skill','AdminController@createNewSkill');
Route::post('quiz/{id}/question/add', 'AdminController@createNewQuestion');
Route::post('admin/question/answer/new','AdminController@addAnswer');

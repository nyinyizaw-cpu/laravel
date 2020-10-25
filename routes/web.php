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
//routes and controller
// Route::get('/','MainController@home')->name('mainpage');
// Route::get('testing','Maincontroller@testing')->name('testingpage');
// Route::get('a','MainController@a')->name('apage');
// template
Route::get('/','MyController@home')->name('homepage');
Route::get('about','MyController@about')->name('aboutpage');
Route::get('contact','MyController@contact')->name('contactpage');

 Route::get('service','MyController@service')->name('servicepage');
 Route::resource('student','StudentController');

<?php

namespace App\Http\Controllers;

use App\User;
use App\Session;
use App\Department;
use App\Course;
use App\Category;
use App\Unit;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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

$this->get('/', function () {
    return view('welcome');
});

$this->get('/signup', function () {

  $name = Department::get();
  $course = Course::get();
  $cat = Category::get();

  return view('auth/signup')->with('departments', $name)->with('courses', $course)->with('cats', $cat);
});

$this->get('/forstudent', function () {

  $name = Department::get();
  $course = Course::get();

  return view('studentportal')->with('departments', $name)->with('courses', $course);
});


$this->get('admin', function()
{
    $name = Department::get();
    $course = Course::get();
    return view('admin')->with('courses', $course)->with('departments', $name);
});

$this->auth();

$this->get('/home', 'HomeController@index');

$this->get('dept', 'IndexController@dept');
$this->post('dept', 'IndexController@addDept');
$this->get('cat', 'IndexController@cat');
$this->post('cat', 'IndexController@addCat');
$this->get('courses', 'IndexController@courses');
$this->post('courses', 'IndexController@addCourse');
$this->get('units', 'IndexController@units');
$this->post('units', 'IndexController@addUnit');
$this->get('session', 'IndexController@session');
$this->post('session', 'IndexController@addSession');
$this->get('asignunits', 'IndexController@getUnits');
$this->post('asignunits', 'IndexController@asignunits');
$this->get('mod{yr}{csr}{sem}', 'IndexController@getCourseUnits');
$this->get('test', 'IndexController@test');
$this->post('test', 'IndexController@addTest');

$this->get('regunits', 'IndexController@regunits');
$this->post('loadunits', 'IndexController@loadUnits');
$this->post('saveunits', 'IndexController@saveUnits');

$this->get('getres', 'IndexController@getResForm');
$this->post('loadres', 'IndexController@loadResForm');
$this->post('saveres', 'IndexController@saveRes');
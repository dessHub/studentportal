<?php

namespace App\Http\Controllers;

use App\User;
use App\Session;
use App\Department;
use App\Course;
use App\Category;
use App\Unit;
use App\Test;
use App\Module;
use App\Result;
use App\Registration;
use Validator;
use Auth;
use App\Http\Requests;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dept()
    {
        $name = Department::get();
        return view('deptForms')->with('departments', $name);
    }

    protected function addDept() {
      $rules = array(
              'name' => 'required|max:100'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/dept')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $department = new Department;
        $department->name     = Input::get('name');;

        // save report
        $department->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/dept');
         }

    }

    public function test()
    {
        $name = Test::get();
        return view('test')->with('tests', $name);
    }

    protected function addTest() {
      $rules = array(
              'name' => 'required|max:100'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/test')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $test = new Test;
        $test->name     = Input::get('name');;

        // save report
        $test->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/test');
         }

    }

    public function cat()
    {
        $name = Category::get();
        return view('category')->with('cats', $name);
    }

    protected function addCat() {
      $rules = array(
              'name' => 'required|max:100'
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/cat')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $cat = new Category;
        $cat->name     = Input::get('name');;

        // save report
        $cat->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/cat');
         }

    }

    public function courses()
    {
        $name = Course::get();
        $dept = Department::get();
        $cat = Category::get();
        return view('courseForm')->with('courses', $name)->with('departments', $dept)->with('cats', $cat);
    }

    protected function addCourse() {
      $rules = array(
              'name' => 'required|max:100',
              'code' => 'required|max:100',
              'dept' => 'required|max:100',
              'cat' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/courses')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $course = new Course;
        $course->name     = Input::get('name');
        $course->code     = Input::get('code');
        $course->department     = Input::get('dept');
        $course->category     = Input::get('cat');

        // save report
        $course->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/courses');
         }

    }

    public function units()
    {
        $name = Unit::get();;
        $cat = Category::get();
        return view('unitsForm')->with('units', $name)->with('cats', $cat);
    }

    protected function addUnit() {
      $rules = array(
              'name' => 'required|max:100',
              'code' => 'required|max:100',
              'cat' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/units')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        $unit = new Unit;
        $unit->name     = Input::get('name');
        $unit->code     = Input::get('code');
        $unit->category     = Input::get('cat');

        // save report
        $unit->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/units');
         }

    }

    public function session()
    {
        $name = Session::get();
        return view('sessions')->with('sessions', $name);
    }

    protected function addSession() {
      $rules = array(
              'semester' => 'required|max:100',
              'start' => 'required|max:100',
              'end' => 'required|max:100',
              'year' => 'required|max:100',
              'academic_year' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/session')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $count = Session::where('semester','=',Input::get('semester'))->where('start','=',Input::get('start'))->where('end','=',Input::get('end'))->where('year','=',Input::get('year'))->count();
        if($count > 0){
          return Redirect::to('/session');
        }else {
        $session = new Session;
        $session->semester     = Input::get('semester');
        $session->start     = Input::get('start');
        $session->end     = Input::get('end');
        $session->year     = Input::get('year');
        $session->academic_year     = Input::get('academic_year');

        // save report
        $session->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/session');
         }
         }

    }

    public function getUnits()
    {
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        return view('unitasignment')->with('sessions', $name)->with('units', $unit)->with('courses', $course);
    }

    protected function asignunits() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'course' => 'required|max:100',
              'code' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/asignunits')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $yr = Input::get('year');
        $crs = Input::get('course');
        $sem = Input::get('semester');
        $acd_yr = Input::get('academic_year');
        $sess = Input::get('session');
        $cod = Unit::get();
        $count = Module::where('semester','=',Input::get('semester'))->where('year','=',Input::get('year'))->where('course','=',Input::get('course'))->count();
        $coun = Module::where('course','=',Input::get('course'))->where('code','=',Input::get('code'))->count();
        if($count > 6){
            $name = Module::where('year','=',$yr)->where('course','=',$crs)->where('semester','=',$sem)->get();
            return view('course')->with('codes', $cod)->with('semester', $sem)->with('session', $sess)->with('course', $crs)->with('year', $yr)->with('academic_year', $acd_yr);
        }else {
          if($coun > 0){
              $name = Module::where('year','=',$yr)->where('course','=',$crs)->where('semester','=',$sem)->get();
              return view('course')->with('codes', $cod)->with('units', $name)->with('semester', $sem)->with('session', $sess)->with('course', $crs)->with('year', $yr)->with('academic_year', $acd_yr);
          }else {
        $module = new Module;
        $module->semester     = Input::get('semester');
        $module->session     = Input::get('session');
        $module->course     = Input::get('course');
        $module->code     = Input::get('code');
        $module->year     = Input::get('year');
        $module->academic_year     = Input::get('academic_year');

        // save report
        $module->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again

            $name = Module::where('year','=',$yr)->where('course','=',$crs)->where('semester','=',$sem)->get();
            return view('course')->with('codes', $cod)->with('units', $name)->with('semester', $sem)->with('session', $sess)->with('course', $crs)->with('year', $yr)->with('academic_year', $acd_yr);
         }
         }
       }

    }

    public function getResForm()
    {
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        $test = Test::get();
        return view('resultloader')->with('sessions', $name)->with('tests', $test)->with('units', $unit)->with('courses', $course);
    }

    protected function loadResForm() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'year_of_study' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'course' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/getres')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $yr = Input::get('year');
        $crs = Input::get('course');
        $sem = Input::get('semester');
        $acd_yr = Input::get('academic_year');
        $yr_std = Input::get('year_of_study');
        $sess = Input::get('session');
        $regno = Input::get('regNo');
        $test = Input::get('test');
        $students = Registration::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('course','=',$crs)->get();
        $results = Result::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('course','=',$crs)->get();
        $name = Module::where('year','=',$yr)->where('course','=',$crs)->where('semester','=',$sem)->where('session','=',$sess)->get();



              return view('resForm')->with('test',$test)->with('students', $students)->with('results', $results)->with('crs', $crs)->with('units', $name)->with('sem', $sem)->with('sess', $sess)->with('yr', $yr)->with('acd_yr', $acd_yr)->with('yr_std', $yr_std);

       }

    }

    protected function saveRes() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'year_of_study' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'course' => 'required|max:100',
              'marks' => 'required|max:100',
              'regNo' => 'required|max:100',
              'test' => 'required|max:100',
              'code' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/getres')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $yr = Input::get('year');
        $crs = Input::get('course');
        $sem = Input::get('semester');
        $acd_yr = Input::get('academic_year');
        $yr_std = Input::get('year_of_study');
        $sess = Input::get('session');
        $regno = Input::get('regNo');
        $mrks = Input::get('marks');
        $unit = Input::get('code');
        $test = Input::get('test');
        $students = Registration::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('course','=',$crs)->get();

        $name = Module::where('year','=',$yr)->where('course','=',$crs)->where('semester','=',$sem)->where('session','=',$sess)->get();
        $count = Result::where('semester','=',$sem)->where('year','=',$yr)->where('test','=',$test)->where('year_of_study','=',$yr_std)->where('session','=',$sess)->where('unit','=',$unit)->where('regNo','=',$regno)->count();

        if($count > 0){
          $results = Result::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('course','=',$crs)->get();
          return view('resForm')->with('test',$test)->with('students', $students)->with('results', $results)->with('crs', $crs)->with('units', $name)->with('sem', $sem)->with('sess', $sess)->with('yr', $yr)->with('acd_yr', $acd_yr)->with('yr_std', $yr_std);
        }else {
        $result = new Result;
        $result->semester     = $sem;
        $result->year_of_study     = $yr_std;
        $result->session     = $sess;
        $result->year     = $yr;
        $result->course     = $crs;
        $result->academic_year     = $acd_yr;
        $result->regNo     = $regno;
        $result->test     = $test;
        $result->marks     = $mrks;
        $result->unit     = $unit;

        // save report
        $result->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        $results = Result::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('course','=',$crs)->get();
        return view('resForm')->with('test',$test)->with('students', $students)->with('results', $results)->with('crs', $crs)->with('units', $name)->with('sem', $sem)->with('sess', $sess)->with('yr', $yr)->with('acd_yr', $acd_yr)->with('yr_std', $yr_std);
         }
         }

    }

    public function myres()
    {
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        $test = Test::get();
        $count = Registration::get();
        $res = Result::where('regNo','=',Auth::user()->regNo)->get();
        return view('results')->with('sessions', $name)->with('results', $res)->with('tests', $test)->with('units', $unit)->with('courses', $course);
    }

    protected function myResults() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'year_of_study' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'test' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/myresults')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $yr = Input::get('year');
        $crs = Input::get('code');
        $sem = Input::get('semester');
        $acd_yr = Input::get('academic_year');
        $yr_std = Input::get('year_of_study');
        $sess = Input::get('session');
        $regno = Input::get('regNo');
        $test = Input::get('test');

        $unit = Unit::get();
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        $tests = Test::get();
        $results = Result::where('semester','=',$sem)->where('test','=',$test)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('regNo','=',$regno)->get();

              return view('results')->with('sessions', $name)->with('results', $results)->with('tests', $tests)->with('units', $unit)->with('courses', $course);

       }

    }


    public function viewRes()
    {
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        $test = Test::get();
        $count = Registration::get();
        $res = Result::get();
        return view('results')->with('sessions', $name)->with('results', $res)->with('tests', $test)->with('units', $unit)->with('courses', $course);
    }

    protected function loadRes() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'year_of_study' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'course' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/viewresults')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $yr = Input::get('year');
        $crs = Input::get('course');
        $sem = Input::get('semester');
        $acd_yr = Input::get('academic_year');
        $yr_std = Input::get('year_of_study');
        $sess = Input::get('session');
        $regno = Input::get('regNo');
        $test = Input::get('test');

        $unit = Unit::get();
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        $tests = Test::get();
        $results = Result::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('academic_year','=',$acd_yr)->where('course','=',$crs)->get();

              return view('results')->with('sessions', $name)->with('results', $results)->with('tests', $tests)->with('units', $unit)->with('courses', $course);

       }

    }


    public function regunits()
    {
        $name = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        return view('unitasignment')->with('sessions', $name)->with('units', $unit)->with('courses', $course);
    }

    protected function loadUnits() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'year_of_study' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'course' => 'required|max:100',
              'code' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/asignunits')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $sess = Session::get();
        $unit = Unit::get();
        $course = Course::get();
        $count = Registration::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('regNo','=',$regno)->count();

      return view('results')->with('results', $count)->with('units', $unit)->with('sessions', $sess)->with('courses', $course);

       }

    }

    protected function saveUnits() {
      $rules = array(
              'semester' => 'required|max:100',
              'session' => 'required|max:100',
              'year' => 'required|max:100',
              'year_of_study' => 'required|max:100',
              'academic_year' => 'required|max:100',
              'code' => 'required|max:100',
          );

          $validator = Validator::make(Input::all(), $rules);

    // check if the validator failed -----------------------
    if ($validator->fails()) {

        // get the error messages from the validator
        $messages = $validator->messages();

        // redirect our user back to the form with the errors from the validator
        return Redirect::to('/regunits')
            ->withErrors($validator);

    } else {
        // validation successful ---------------------------

        // report has passed all tests!
        // let him enter the database

        // create the data for report
        //$count = 0;
        $yr = Input::get('year');
        $crs = Input::get('code');
        $sem = Input::get('semester');
        $acd_yr = Input::get('academic_year');
        $yr_std = Input::get('year_of_study');
        $sess = Input::get('session');
        $regno = Input::get('regNo');
        $count = Registration::where('semester','=',$sem)->where('year','=',$yr)->where('session','=',$sess)->where('regNo','=',$regno)->count();

        if($count > 0){
          return Redirect::to('/regunits');
        }else {
        $registration = new Registration;
        $registration->semester     = $sem;
        $registration->year_of_study     = $yr_std;
        $registration->session     = $sess;
        $registration->year     = $yr;
        $registration->course     = $crs;
        $registration->academic_year     = $acd_yr;
        $registration->regNo     = $regno;

        // save report
        $registration->save();

        // redirect ----------------------------------------
        // redirect our user back to the form so they can do it all over again
        return Redirect::to('/regunits');
         }
         }

    }



    public function getCourseUnits($yr,$csr,$sem)
    {
        $name = Module::where('year','=',$yr)->where('course','=',$crs)->where('semester','=',$sem)->get();
        return view('course')->with('units', $name);
    }





}

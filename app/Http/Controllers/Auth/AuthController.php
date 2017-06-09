<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Course;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'regNo' => 'required|max:255|unique:users',
            'phoneNo' => 'required|min:12|max:13|unique:users',
            'gender' => 'required|max:13',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['role'] === "Student"){
      $course = Course::where('code','=',$data['code'])->get();
      $crs = "";
      foreach($course as $key){
        $crs = $key->name;
      }
        return User::create([
            'name' => $data['name'],
            'regNo' => $data['regNo'],
            'phoneNo' => $data['phoneNo'],
            'guardian' => $data['prnt'],
            'email' => $data['email'],
            'role' => $data['role'],
            'course' => $crs,
            'code' => $data['code'],
            'department' => $data['dept'],
            'category' => $data['cat'],
            'notification' => $data['notification'],
            'gender' => $data['gender'],
            'password' => bcrypt($data['password']),
        ]);
    }elseif ($data['role'] === "Lecturer") {
        return User::create([
            'name' => $data['name'],
            'regNo' => $data['regNo'],
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'role' => $data['role'],
            'department' => $data['dept'],
            'notification' => $data['notification'],
            'gender' => $data['gender'],
            'password' => bcrypt($data['password']),
        ]);
    }else {
        return User::create([
            'name' => $data['name'],
            'regNo' => $data['regNo'],
            'guardian' => $data['std'],
            'code' => $data['code'],
            'phoneNo' => $data['phoneNo'],
            'email' => $data['email'],
            'role' => "Parent",
            'notification' => $data['notification'],
            'gender' => $data['gender'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

}

<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $redirectPath = '/home';
    protected $loginPath = '/login';
		protected $registerPath = '/register';

 		public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    public function getLogin() {
        return view('auth.login');
    }
    public function getRegister() {
        return view('auth.register');
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
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
				 		'username' => 'required|unique:users',
        ]);
    }

 		/*
 		 * handle user registration from a form post
 		 *
 		 */
		 public function postRegister(Request $request) {
			//construct the validator
			$validator = $this->validator($request->all());
			//redirect to /register if validation fails
			if ( $validator->fails()) {
			 return redirect($this->registerPath)->withErrors ( $validator );
			}
			//create and login a user.
			Auth::login($this->create( $request->all () ) );
			return redirect( $this->redirectPath () );

		 }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'role' => $data['role'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
				 		'username' =>$data['username'],
        ]);
    }



}

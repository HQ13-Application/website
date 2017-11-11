<?php

namespace Blurizon\Http\Controllers\Admin;

use Blurizon\User;
use Blurizon\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin');
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
            'fistname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'userCity' => 'required|string|max:255',
            'userState' => 'required|string|max:255',
            'userContry' => 'required|string|max:255',
            'userPhone' => 'required|string|max:255',
            'userAddress1' => 'required|string|max:255',
            'userAddress2' => 'required|string|max:255',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \Blurizon\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fistname' => $data['fistname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'userCity' => $data['userCity'],
            'userState' => $data['userState'],
            'userContry' => $data['userContry'],
            'userPhone' => $data['userPhone'],
            'userAddress1' => $data['userAddress1'],
            'userAddress2' => $data['userAddress2'],
        ]);
    }
}

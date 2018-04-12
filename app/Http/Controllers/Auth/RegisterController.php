<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'identity' => 'required|string|max:255',
            'kididentity1'=>'required|string|max:255',
            'classkid1'=>'required|string|max:255',
            'kidage1'=>'required|numeric|between:0,16',
            'kididentity2'=>'nullable|string|max:255',
            'classkid2'=>'nullable|string|max:255',
            'kidage2'=>'nullable|integer|between:0,16',
            'kididentity3'=>'nullable|string|max:255',
            'classkid3'=>'nullable|string|max:255',
            'kidage3'=>'nullable|numeric|between:0,16',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'identity' => $data['identity'],
            'kididentity1'=>$data['kididentity1'],
            'classkid1'=>$data['classkid1'],
            'kidage1'=>$data['kidage1'],
            'kididentity2'=>$data['kididentity2'],
            'classkid2'=>$data['classkid2'],
            'kidage2'=>$data['kidage2'],
            'kididentity3'=>$data['kididentity3'],
            'classkid3'=>$data['classkid3'],
            'kidage3'=>$data['kidage3'],
            'status'=> "parent",
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            
        ]);
    }
}

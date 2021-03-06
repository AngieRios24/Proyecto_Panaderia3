<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;


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
    protected $redirectTo = RouteServiceProvider::HOME;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'celular' => ['required', 'integer', 'min:10'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {


        $user = User::create([
            'tipo'=>$data['tipodocumento'],
            'documento'=>$data['documento'],
            'name' => $data['name'],
            'apellido'=>$data['apellido'],
            'celular'=>$data['celular'],
            'email' => $data['email'],
            'role' => $data['role'],
            'password' => Hash::make($data['password']),



        ]);

        $customer_document=$data['documento'];
        $customer_name=$data['name'];
        $customer_lastname=$data['apellido'];
        $customer_phone=$data['celular'];
        $customer_mail=$data['email'];
        $typedocument_id=$data['tipodocumento'];

        DB::select("SELECT AddCustomers('$customer_document','$customer_name',
        '$customer_lastname','$customer_phone', '$customer_mail',
        '$typedocument_id')");
    }

}

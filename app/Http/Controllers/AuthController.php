<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }


    public function loginSubmit(Request $request)
    {
        //form validatioin
        $request->validate(
            //rules
            [

                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'

            ],
            //error messages
            [
                'text_username.required' => 'O email é obrigatório',
                'text_username.email' => 'Email deve ser válido',
                'text_password.required' => 'A senha é obrigatória',
                'text_password.min' => 'A senha deve conter no minimo :min caracteres',
                'text_password.max' => 'A senha deve conter no máximo :max caracteres'
            ]



        );
        //get user input

        $username = $request->input('text_username');
        $password = $request->input('text_password');

        //teste db connection

        try {

            DB::connection()->getPdo() ;
            echo 'Connection is ok ';
        } catch (\PDOException $e) {
            echo 'Connection failed: ' .$e->getMessage();

        }
        echo 'FIM';
    }

    public function logout()
    {
        echo 'logout';
    }
}

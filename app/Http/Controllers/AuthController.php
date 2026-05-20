<?php

namespace App\Http\Controllers;

use App\Models\User;
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


        //check if user exists

        $user = User::where('email', $username)
            ->where('deleted_at', NULL)
            ->first();

        if (!$user) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Email e/ou senha inválidos');
        }
        //check password
        if (!password_verify($password, $user->password)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('loginError', 'Email e/ou senha inválidos');
        }

        //update last login
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();


        //login user

        session([
            'user' => [
                'id' => $user->id,
                'username'=> $user-> name
            ]
        ]);

        echo 'login com sucesso';





    }

    public function logout()
    {
        //logout from the application

        session()->forget('user');
        return redirect()->to('/login');

    }
}

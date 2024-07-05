<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    // Этот метод аутентифицирует администратора
    public function authenticate(Request $request) {

        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->passes()) {

            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('admin.dashboard');

            } else {
                return redirect()->route('admin.login')->with('error', 'Неверный адрес электронной почты или пароль.');
            }

        } else {
            return redirect()->route('admin.login')
            ->withInput()
            ->withErrors($validator);
        }
    }
}

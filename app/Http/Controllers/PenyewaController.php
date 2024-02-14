<?php

namespace App\Http\Controllers;

use App\Models\Penyewa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Admin;
use Illuminate\Support\Facades\Session;



class PenyewaController extends Controller
{
    public function Penyewa()
    {
        $penyewa = User::all();
        return view('penyewa.masterpenyewa', compact('penyewa'));

    }

    public function actionPenyewa(Request $request)
    {
        $data = [
            'email' => $request->input('Email'),
            'password' => $request->input('Password'),
        ];
        // dd(Auth::Attempt($data));


        if (Auth::Attempt($data)) {
            return redirect('masterpenyewa');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/login');
        }
    }


    public function actionlogout()
    {
        Auth::logout();
        return redirect('');
    }
}


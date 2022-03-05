<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $name = '' . Auth::user()->name . '';
        $tel = '' . Auth::user()->tel . '';
        $email = '' . Auth::user()->email . '';
        return view('index', ['name' => $name, 'tel' => $tel, 'email' => $email,]);
    }

    public function edit()
    {
        $id = '' . Auth::user()->id . '';
        $name = '' . Auth::user()->name . '';
        $tel = '' . Auth::user()->tel . '';
        $email = '' . Auth::user()->email . '';
        return view('edit', ['id' => $id, 'name' => $name, 'tel' => $tel, 'email' => $email,]);
    }
    public function completion(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        User::where('id', $request->id)->update($form);
        return redirect('/user');
    }
}

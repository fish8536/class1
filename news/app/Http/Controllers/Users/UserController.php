<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.login');
    }

    public function postLogin(Request $_oRequest, User $_oUser)
    {
        $email = $_oRequest->email;
        $password = $_oRequest->password;
        $user = $_oUser->where('email', $email)->first();
        if (empty($user->id) || !Hash::check($password, $user->password)) {
            return redirect()->back()->withErrors('No this user or wrong password!!');
        }
        $_oRequest->session()->put('userid', $user->id);
        $_oRequest->session()->put('userName', $user->name);
        return redirect()->back();
    }

    public function postLogout(Request $_oRequest)
    {
        if (empty($_oRequest->session()->get('userid'))) {
            $_oRequest->session()->flush();
            return redirect('/');
        }
        $_oRequest->session()->forget('userid');
        $_oRequest->session()->forget('userName');
        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $_oRequest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $_oRequest, User $_oUser)
    {
        if (!empty($_oUser->where('email', $_oRequest->email)->get()->first()) || $_oRequest->password !== $_oRequest->password_confirmation) {
            return redirect()->back()->withErrors('Already have this user or wrong password!!');
        }
        $_oUser->name = $_oRequest->name;
        $_oUser->email = $_oRequest->email;
        $_oUser->password = Hash::make($_oRequest->password);
        $_oUser->save();
        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

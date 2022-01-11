<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerLoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "manager/dashboard";

    public function __construct()
    {
        $this->middleware('guest:manager,manager/dashboard')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.manager.login');
    }

    protected function guard()
    {
        return \Auth::guard("manager");
    }
}

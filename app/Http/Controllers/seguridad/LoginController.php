<?php

namespace App\Http\Controllers\seguridad;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/admin/usuario';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('seguridad.index');
    }

    protected function authenticated(Request $request, $user)
    {
        $roles = $user->roles()->get();
        if ($roles->isNotEmpty()) {
            $user->setSession($roles->toArray());
        }else{
            $this->guard()->logout();
            $this->session()->invalidate();
            return redirect('seguridad/login')->withErrors(['error' => 'Este usuario no tiene un rol activo']);
        }
        
    }

    public function username()
    {
        return 'usuario';
    }

    
}

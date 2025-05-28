<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\employs;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showMenuForm()
    {
        return view('home');
    }

    public function showMenuEForm()
    {
        return view('homeEmploy');
    }

    public function login(Request $request){
        $credentials = $request -> only('name','pass');


        $employ = Employs::where('name', $credentials['name'])->first();

        if($employ && $credentials['pass']){
            Auth::guard('employs')->login($employ);

            if($employ->type == 1){
                
                return redirect()->intended('/menu');
            }
            if($employ->type == 2){

                return redirect()->intended('/menuEmploy');



            }

        }



        return back()->withErrors([
            'name' => 'Las credenciales no coinciden con nuestros registros.'
        ]);

    }

    public function logout(Request $request){
        Auth::guard('employs')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function verify(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',  
        ]);
        
        if(Auth::guard('akademik')->attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>'akademik'])){
            return redirect()->intended('/akademik/dashboard');
        }

        else if(Auth::guard('dekan')->attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>'dekan'])){
            return redirect()->intended('/dekan/dashboard');
        }

        
        else if(Auth::guard('ketua_program_studi')->attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>'ketua_program_studi'])){
            return redirect()->intended('/kaprodi/dashboard');
        }

        else if(Auth::guard('pembimbing_akademik')->attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>'pembimbing_akademik'])){
            return redirect()->intended('/pembimbing/dashboard');
        }

        else if(Auth::guard('mahasiswa')->attempt(['email'=>$request->email, 'password'=>$request->password, 'role'=>'mahasiswa'])){
            return redirect()->intended('/mahasiswa/dashboard');
        }
        else{
            return redirect('/')->with('msg', 'Email dan password salah');
        }

    }

    public function logout(){
        if(Auth::guard('akademik')->check()){
            Auth::guard('akademik')->logout();
        }
        else if(Auth::guard('dekan')->check()){
            Auth::guard('dekan')->logout();
        }
        else if(Auth::guard('ketua_program_studi')->check()){
            Auth::guard('ketua_program_studi')->logout();
        }
        else if(Auth::guard('pembimbing_akademik')->check()){
            Auth::guard('pembimbing_akademik')->logout();
        }
        else if(Auth::guard('mahasiswa')->check()){
            Auth::guard('mahasiswa')->logout();
        }
        
        return redirect(route('auth.index'));
    }
}

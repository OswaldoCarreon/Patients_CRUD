<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;

class loginController extends Controller
{
    public function login(){
        return view('./loginviews/loginView');
    }
    
    public function loginAuth(){
        $username = request('username');
        $pssw = request('password');
        
        $res = Login::where([
            ['username',$username],
            ['password',md5($pssw)]
        ])->first();

        //Jonas
        //imbossbitch

        if( $res != null ) {
            //echo $res;
            
            session(['username' => $res->username]);
            session(['role' => $res->role]); 
            return redirect('/');
        } else {
            echo "User or password incorrect";
        }
        /* echo "RES = {".$res."}";
        echo "Auth"; */
    }

    
    public function signup(){
        return view('./loginviews/signupView');
    }

    public function signupAuth(){
        $username = request('username');
        $pssw = request('password');

        echo $username . " " . $pssw;
        
        $user = Login::where('username',$username)->first();

        if( $user == null) { //No existe, entonces si lo puedo registrar
            echo "$ user = {".$user."}";
            $newUser = new Login();
            
            $newUser->username = $username; 
            $newUser->password = md5($pssw);

            $newUser->save();

            session(['username'=>$newUser->username]);
            session(['role'=>'user']);

            return redirect('/');


        } else {
            echo "User already registered";
            return redirect('/signup')->with('info','User already registered');
        }
        
        /* if( !is_empty($res) ) {
            return redirect('/home');
        } else {
            echo "User or password incorrect";
        }*/
        
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }


    public function welcome(){
        if( session('username') ){
            return view('welcome'); 
        } else {
            return redirect ('/');
        }

    } 

    public function home(){
        if( session('username') ){
            return redirect('/welcome');
    
        } else {
            /* echo "No session data"; */
            return view('homeView'); 
        }
    }
}

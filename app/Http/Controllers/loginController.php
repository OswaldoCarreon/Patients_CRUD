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
        /* $username = request('username');
        $pssw = request('password');
        
        $res = Login::where('username','username').andWhere('password',(encrypt)$pssw); */

        /* if( !is_empty($res) ) {
            return redirect('/home');
        } else {
            echo "User or password incorrect";
        }*/
        echo "Auth";
    }

    
    public function signup(){
        return view('./loginviews/signupView');
    }

    public function signupAuth(){
        $username = request('username');
        $pssw = request('password');

        echo $username . " " . $pssw;
        
        $user = Login::where('username','username')->first();

        if( $user == null) { //No existe, entonces si lo puedo registrar
            $newUser = new Login();

            $newUser->username = $username;
            $newUser->password = md5($pssw);

            $newUser->save();

        } else {
            echo "User already registered";
            return redirect('/signup');
        }
        
        /* if( !is_empty($res) ) {
            return redirect('/home');
        } else {
            echo "User or password incorrect";
        }*/
        
    }

    public function logout(){

    }

    public function isLogged(){

    }

   
}

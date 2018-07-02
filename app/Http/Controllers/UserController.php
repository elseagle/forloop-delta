<?php

namespace App\Http\Controllers;

use DB;
use Hash;
use App\Signup;
use Illuminate\Http\Request;
use Validator;

class UserController extends Controller
{
    public function signup(Request $request){
        $this->validate($request, [
            'email'=> 'required|email|unique:signups,email',
            'password' => 'required'
        ]);
        
        $signup = new Signup;
        $signup->firstname = $request->input('fname');
        $signup->lastname = $request->input('lname');
        $signup->email = $request->input('email');
        $signup->city = $request->input('city');
        $signup->country = $request->input('country');
        $signup->password = Hash::make($request->input('password'));

        if($signup->save()):
            $request->session()->put('authId',$signup->email.$signup->password);
            $email =strstr($signup->email, '@', true);

            return redirect()->route('dashboard', ['auth'=>$email]);
        else:
            return 'error communicating with db';
        endif;
    }

    public function login(Request $request){
        $this->validate($request, [
            'email'=> 'required',
            'password'=> 'required',
        ]);

        $password = $request->input('password');
        $email = $request->input('email');

        $hashed = DB::table('signups')->where('email', $email)->value('password');
        $request->session()->put('authId',$email.$hashed);


        if(DB::table('signups')->where('email', $email)->value('email')):
            if(Hash::check($password,$hashed)):
                // return view('dashboard')->with('details', $details);
                // return (array)$details;\
                $email = strtolower(strstr($email, '@', true));
                return redirect()->route('dashboard', ['auth'=>$email]);
            else:
                return 'Invalid username or password';
            endif;
        else:
                return 'Invalid username or password';
        endif;
        
    }

    public function dashboard(Request $request, $auth){
           
            $details = DB::table('signups')->where('email', $auth.'@gmail.com')->first();
            if(DB::table('signups')->where('email', $auth.'@gmail.com')->exists() == false && $request->session()->has('authId')){
                return 'error';
            }
            $authConfirm = (array)$details;
            
            if(strtolower($authConfirm['email'].$authConfirm['password']) == strtolower($request->session()->get('authId'))):
                return view('dashboard')->with('details',$authConfirm);
            else:
                return redirect()->route('/');
            endif;
            // return $auth.$request->session()->get('authId');

    }

    public function logout(Request $request){
        $request->session()->pull('authId');
        return redirect()->route('/');
    }

    public function index(){
        return view('index');
    }
}

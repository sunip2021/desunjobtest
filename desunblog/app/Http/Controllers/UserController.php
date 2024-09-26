<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function createUser() {
       return view('createuser');
    }
    public function saveUser(Request $request) {
        $name=$request->name;
        $email=$request->email;
        $password=md5($request->password);
        $subscribe=$request->subscribe;
        $userType=$request->user_type;
        $data=['name'=>$name,'email'=>$email,'subscribe'=>$subscribe,'user_type'=>$userType,'password'=>$password];
        $result=User::saveUser($data);
        if($result){
            dd("successful");
        }

    }
    public function login() {
        return view('login');
    }
    public function loginaction(Request $request) {
        $email=$request->email;
        $password=md5($request->password);
        $where=['email'=>$email,'password'=>$password];
        $result=User::login($where);
        if($result) {
            $id=$result->id;
            $request->session()->put('uid',$id);
            return redirect('/display');
        }
    }
}

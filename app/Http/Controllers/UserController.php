<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
        $theUser = User::where(["email"=>$req->email])->first();
        if(!$theUser){
            return "Email não encontrado no banco de dados!";
        }else if(!Hash::check($req->senha, $theUser->senha)){
            return "Senha incorreta!";
        }else{
            $req->session()->put("User", $theUser);
            return redirect("/");
        }
    }
}

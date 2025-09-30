<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consulta()
    {

        return "hola";

        $user = User::find(1);
        //$users = User::all();

        return $user->profile;
    }
}

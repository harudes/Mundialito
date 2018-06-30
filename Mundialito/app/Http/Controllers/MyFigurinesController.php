<?php

namespace Mundialito\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MyFigurinesController extends Controller
{
    public function index(){
        $figuritas = DB::table('users')
        			->join('figuritas_x_usuario', 'users.id', '=', 'figuritas_x_usuario.user_id')
        			->join('figuritas','figuritas_x_usuario.figurita_id','=','figuritas.id')
        			->value('figuritas.id');
        $data = ['figuritas'=>$figuritas];
        return view('myfigurines',$data);
    }
}

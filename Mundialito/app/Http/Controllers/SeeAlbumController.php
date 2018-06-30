<?php

namespace Mundialito\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SeeAlbumController extends Controller
{
    public function index($page)
    {
        $figuritas = DB::table('users')
        			->join('figuritas_x_usuario', 'users.id', '=', 'figuritas_x_usuario.user_id')
        			->join('figuritas','figuritas_x_usuario.figurita_id','=','figuritas.id')
        			->join('paises','figuritas.pais_id','=','paises.id')
        			->where('paises.id','=',$page)->get();
        $pais=DB::table('paises')->where('paises.id','=',$page)->value('nombre');
        $data = ['figuritas'=>$figuritas,'pais'=>$pais];
        /*foreach($figuritas as $figurita){
        	print_r($figurita);
        }*/
        //return 0;
        return view('myalbum',$data);
    }
}

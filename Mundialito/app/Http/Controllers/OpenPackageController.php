<?php

namespace Mundialito\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OpenPackageController extends Controller
{
    public function index(){
        $paquetes = DB::table('users')
        			->join('paquetes','paquetes.user_id','=','users.id')
        			->join('tipo_paquete','paquetes.rareza','=','tipo_paquete.id')->get()
        			/*->value('figuritas.id')*/;
        $data = ['paquetes'=>$paquetes];
        return view('openpackage',$data);
    }
}

<?php

namespace Mundialito\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BuyPackageController extends Controller
{
    public function index(){
        $paquetes = DB::table('tipo_paquete')->get();
        $data = ['paquetes'=>$paquetes];
        return view('buypackage',$data);
    }
}

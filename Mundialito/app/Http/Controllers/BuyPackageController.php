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

    public function buyPackage($rarity){
    	$cantidad=DB::table('users')
			->join('paquetes','paquetes.user_id','=','users.id')
			->join('tipo_paquete','paquetes.rareza','=','tipo_paquete.id')
			->where('paquetes.rareza','=',$rarity)
            ->where(function ($query) {
                $query->where('users.id','=',Auth::id());
            })->value('cantidad');
        DB::table('users')
        	->join('paquetes','paquetes.user_id','=','users.id')
            ->where('paquetes.rareza','=',$rarity)
            ->where(function ($query) {
                $query->where('users.id','=',Auth::id());
            })
            ->update(['paquetes.cantidad' => $cantidad + 1]);
        return $this->index();
    }
}

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
        			->join('tipo_paquete','paquetes.rareza','=','tipo_paquete.id')
        			->where('users.id','=',Auth::id())->get()
        			/*->value('figuritas.id')*/;
        $data = ['paquetes'=>$paquetes];
        return view('openpackage',$data);
    }

    public function abrir($rareza){
        switch ($rareza) {
		    case 0:
		        echo "i es igual a 0";
		        break;
		    case 1:
		        echo "i es igual a 1";
		        break;
		    case 2:
		        echo "i es igual a 2";
		        break;
		    case 3:
		        echo "i es igual a 2";
		        break;
		}
    }

    public function openPackage($rareza){
    	$cantidad=DB::table('users')
        			->join('paquetes','paquetes.user_id','=','users.id')
        			->join('tipo_paquete','paquetes.rareza','=','tipo_paquete.id')
        			->where('paquetes.rareza','=',$rareza)
		            ->where(function ($query) {
		                $query->where('users.id','=',Auth::id());
		            })->value('cantidad');
        if($cantidad>0){
        	$this->abrir($rareza);
        	DB::table('users')
        	->join('paquetes','paquetes.user_id','=','users.id')
            ->where('paquetes.rareza','=',$rareza)
            ->where(function ($query) {
                $query->where('users.id','=',Auth::id());
            })
            ->update(['paquetes.cantidad' => $cantidad -1]);
        }
        return $this->index();
    }
}

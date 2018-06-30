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
        			->where('users.id','=',Auth::id())->get();
        $data = ['paquetes'=>$paquetes];
        return view('openpackage',$data);
    }

    public function abrir($rareza){
    	$cantidad=DB::table('figuritas')->count();
    	//echo $cantidad;
    	for($i=1;$i<=5;$i++){
    		$figurita=rand(1, $cantidad);
    		$aux=DB::table('users')
    			->join('figuritas_x_usuario','figuritas_x_usuario.user_id','=','users.id')
    			->join('figuritas','figuritas.id','=','figuritas_x_usuario.figurita_id')
    			->where('figuritas.id','=',$figurita)
	            ->where(function ($query) {
	                $query->where('users.id','=',Auth::id());
	            })->count();
    		if($aux==0){
	            DB::table('figuritas_x_usuario')->insert([
	            'user_id' => Auth::id(),
	            'figurita_id' => $figurita,
	            'cantidad'=>1,
	            'pegada'=>0,
	        	]);
        	}
	        	else{
	        		$tiene=DB::table('users')
			    			->join('figuritas_x_usuario','figuritas_x_usuario.user_id','=','users.id')
			    			->join('figuritas','figuritas.id','=','figuritas_x_usuario.figurita_id')
			    			->where('figuritas.id','=',$figurita)
				            ->where(function ($query) {
				                $query->where('users.id','=',Auth::id());
				            })->value('figuritas_x_usuario.cantidad');
	        		DB::table('users')
	    			->join('figuritas_x_usuario','figuritas_x_usuario.user_id','=','users.id')
	    			->join('figuritas','figuritas.id','=','figuritas_x_usuario.figurita_id')
	    			->where('figuritas.id','=',$figurita)
		            ->where(function ($query) {
		                $query->where('users.id','=',Auth::id());
		            })->update(['figuritas_x_usuario.cantidad' => $tiene +1]);
	        	}		
    		
    	}
        /*switch ($rareza) {
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
		}*/
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

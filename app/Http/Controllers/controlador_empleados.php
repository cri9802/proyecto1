<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use Session;

class controlador_empleados extends Controller
{
    public function altaempleado(){

	$clavequesigue = empleados::withTrashed()->orderBy('id_empleado','desc')
								->take(1)
								->get();
	  if (count($clavequesigue)==0)
	  {
		  $id_emp = 1;
	  }
	  else
	  {
     $id_emp = $clavequesigue[0]->id_empleado+1;
      }
	
     return view ("sistema.altaempleado")
			->with('id_emp',$id_emp);
    }
	public function guardaempleados(Request $request){
		$id_empleado = $request->id_empleado;
        $nombre = $request->nombre;
        $app = $request->app;
        $apm = $request->apm;
		$email = $request->email;
		$password = $request->password;

		//no se recibe el archivo

		$this->validate($request,[

        'nombre' => 'required',
        'app' => 'app',
        'apm' => 'apm',
	    'email' => 'required|alpha|max:255',
		'password' => 'required|alpha|max:255',
		

	]);

		$emp = new empleados;
		$emp->id_empleado = $request->id_empleado;
        $emp->nombre = $request->nombre;	
        $emp->app = $request->app;
		$emp->apm = $request->apm;	
		$emp->email = $request->email;	
		$emp->password = $request->password;
		
		$emp->save();
		$proceso = "ALTA EMPLEADO";
		$mensaje = "Usuario guardado correctamente";
		return view("sistema.mensaje")->with('proceso',$proceso)->with('mensaje',$mensaje);
	}
	// 	public function reporteusuarios(){


	// 		if(Session::get('sesionidu')!=""){

	// 		$usuarios = usuarios::withTrashed()->orderBy('id_usuario','asc')->get();
	// 		return view ('sistema.reporteusuarios')->with('usuarios',$usuarios);
    //     }
	//         else
	//         {
	// 	    Session::flash('error','Es necesario logearse para continuar');
	//         }
	//         return redirect()->route('login');
			
	// }
	// 	public function eliminausuarios($id_usuario){

	// 		   usuarios::withTrashed()->where('id_usuario',$id_usuario)->forceDelete();
	// 		$proceso = "Eliminar Usuario";
	// 		$mensaje = "El Usuario ha sido borrado correctamente";
	// 		return view('sistema.mensaje')
	// 		->with('proceso',$proceso)
	// 		->with('mensaje',$mensaje);
	// 	}

	// 	public function eliminausuarios1($id_usuario){
	// 	//echo "Elimina $num_folio";
	// 	usuarios::find($id_usuario)->delete();
	// 	$proceso = "Elimina Usuario";
	// 	$mensaje = "El Usuario se elimino Correctamente";
	// 	return view('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	// }

	// public function restaurausuarios($id_usuario){
	// 	usuarios::withTrashed()->where('id_usuario',$id_usuario)->restore();
	// 	$proceso = "Restaurar Usuario";
	// 	$mensaje = "El Usuario se restauro correctamente";
	// 	return view ('sistema.mensaje')->with('proceso',$proceso)->with('mensaje',$mensaje);
	// }

	// 	public function modificausuarios($id_usuario){
	// 		//echo "Tipo Abogado a modificar $id_cliente";
	// 	$infom = usuarios::where('id_usuario','=',$id_usuario)->get();
	// 	 return view('sistema.modificausuarios')
	// 	 ->with('infom',$infom[0]);
	// 	}

// public function guardaedicionusuario(Request $request){
// 		//echo $request->nombre;
// 		$id_usuario = $request->id_usuario;
// 		$nombre = $request->nombre;
// 		$correo = $request->correo;
// 		$email = $request->email;
// 		$password = $request->password;
// 		$tipo_de_usuario = $request->tipo_de_usuario;



// 	$this->validate($request,[
// 		'nombre' => 'required',
// 		'correo' => 'required|email',
// 		'email' => 'required|alpha|max:255',
// 		'password' => 'required|alpha|max:255',
		

// 	]);
	
		
// 			$maest = usuarios::find($id_usuario);
// 			$maest->id_usuario = $request->id_usuario;
// 			$maest->nombre = $request->nombre;
// 			$maest->correo = $request->correo;

// 			$maest->email = $request->email;
// 			$maest->password = $request->password;
// 			$maest->tipo_de_usuario = $request->tipo_de_usuario;

			
			


// 			$maest->save();
// 			$proceso = "MODIFICACION DE USUARIOS";
// 			$mensaje = "USUARIO  modificado correctamente";
// $proceso = "Modificacion  Usuario";
// 			$mensaje = "El Usuario ha sido actualizado correctamente";
// 			return view('sistema.mensaje')
// 			->with('proceso',$proceso)
// 			->with('mensaje',$mensaje);
// }



}
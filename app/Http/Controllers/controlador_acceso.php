<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\empleados;
use Session;
use DB;


class controlador_acceso extends Controller
{
    public function login()
   {
	   return view ('sistema.login');
   }
   public function valida(Request $request)
   {
	  $email = $request->email;
      $password = $request->password;
	   $this->validate($request,[
	     'email'=>'required',
		   'password'=>'required',
	     ]);
	$consulta= empleados::withTrashed()->where('email',$email)->where('password','=',$password)->get();
	if(count($consulta)==0)
	{
		 Session::flash('error', 'El usuario o password no existe');
		 return redirect()->route('login');
	}
	else
    {
		if($consulta[0]->deleted_at!="")
		{
		Session::flash('error', 'El usuario esta desactivado, favor de consultar a su administrador');
		 return redirect()->route('login');
		}
		else
		{
		  Session::put('sesionname',$consulta[0]->nombre);
          Session::put('sesionide',$consulta[0]->id_empleado);
          
		return redirect()->route('principal');
		}
	}			 
   }
   public function principal()
   { 
      if(Session::get('sesionide')!="")
	  {
	   return view ('sistema.principal');
	  }
	  else
	  {
		  Session::flash('error', 'Es necesario iniciar sesion antes de continuar');
		 return redirect()->route('login');
	  }
   }
   public function cerrarsesion()
   {
	    Session::forget('sesionname');
	   Session::forget('sesionide');
	   Session::flush();
	   Session::flash('error', 'Session Cerrada Correctamente');
	   return redirect()->route('login');
   } 
}


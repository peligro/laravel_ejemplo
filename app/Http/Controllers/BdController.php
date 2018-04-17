<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mensaje as Mensaje;
use App\User as User;
use Illuminate\Http\Request;

class BdController extends Controller
{
    public function index()
    {
        
        $datos = Mensaje::paginate(10);
        //dd($datos);
        return view('bd.index',compact('datos'));
    }
    public function detalle(Mensaje $datos)
    {
        
        //$datos = Mensaje::find($id);
        //dd($datos);
        return view('bd.detalle',compact('datos'));
    }
    public function add()
    {
        $users=User::all();
        return view('bd.add',compact('users'));
    }
    public function add_post(Request $request)
    {
        
		$this->validate
        (
        	$request,
        	[
        		'mensaje'=>'required|min:3',
        	],
        	[
        		'mensaje.required'=>'El campo mensaje está vacío',
        	]
        );
        /*
        $this->validate
        (
        	$request,
        	[
        		'mensaje'=>'required|valida_rut',
        		'cualquiera'=>'required|min:2'
        	],
        	[
        		'mensaje.required'=>'El campo mensaje está vacío',
        		'mensaje.valida_rut'=>'El RUT ingresado no tiene un formato válido',
        		'cualquiera.required'=>'El campo cualquiera está vacío',
        	]
        );
        
        */
        $mensaje =Mensaje::create
        (
        	[
        		'content'=>$request->input('mensaje'),
        		'image'=>'http://www.cesarcancino.com/public/frontend/img/base/logo2.png',
                'user_id'=>$request->input('user_id'),		
        	]
        );
        $request->session()->flash('css', 'success');
        $request->session()->flash('mensaje', 'Se ha agregado el registro exitosamente');
        return redirect('/bd/listado');

    }
}
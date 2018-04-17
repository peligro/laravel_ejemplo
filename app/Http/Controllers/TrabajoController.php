<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TrabajoController extends Controller
{
    public function index()
    {
        return view('trabajo.index');
    }
    public function nosotros()
    {
        return view('trabajo.nosotros');
    }
    public function utilidades()
    {
        return view('trabajo.utilidades');
    }
    public function parametro($id1)
    {
        return ('parámetro1 = '.$id1);
    }
    public function parametros($id1,$id2)
    {
        return view('trabajo.parametros',compact('id1','id2'));
    }
}
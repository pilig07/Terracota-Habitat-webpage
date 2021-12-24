<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Roles;
use App\Imagen;
use App\Propiedad;
use App\Usuarios;

class UsuariosController extends Controller
{
    //
    public function indexReg()
    {
        //mostrar vista de captura de datos de usuario
        return view('registro');

    }

    public function guardaUsuario(Request $request)
    {
        //dd($request);
        $usuario = new Usuarios();

        $usuario->Nombre=$request->Nombre;
        $usuario->Usuario=$request->Usuario;
        $usuario->Email=$request->Email;
        $usuario->Pwd=$request->Pwd;
        $usuario->Indicio=$request->Indicio;
        $usuario->idRol=$request->idRol;

        $usuario->save();
        return redirect()->back();

    }
}

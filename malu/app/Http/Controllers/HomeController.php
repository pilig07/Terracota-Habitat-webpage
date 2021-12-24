<?php

namespace App\Http\Controllers;

use App\User;
use App\imagenes;
use App\propiedades;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PDF;
use Illuminate\Http\Request;
use users;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function verUsuarios()
    {
        $usuarios=user::all();
        return view('usuarios')->with('usuarios',$usuarios);
    }
  
    public function eliminar($id)
    {
        $usuarios=user::find($id);
        $usuarios->delete();
        return redirect('/usuarios');
    }

    public function guardausr(Request $request)
    {
        
        if(isset($request->identificador))
            $usuarios=user::find($request->identificador);
        else
            $usuarios=new user();

        $usuarios->name=$request->name;
        $usuarios->email=$request->email;
        $usuarios->nick=$request->nick;
        $usuarios->idRol=$request->idRol;

        $usuarios->save();

        if(isset($request->identificador))
            return redirect('/usuarios');

        return redirect()->back()->with('success','Usuario registrada con exito');
    }
    public function updateUsr(Request $request)
    {
        
        if(isset($request->identificador))
            $usuarios=user::find($request->identificador);
        else
            $usuarios=new user();

        $usuarios->name=$request->name;
        $usuarios->email=$request->email;
        $usuarios->nick=$request->nick;

        $usuarios->save();

        if(isset($request->identificador))
            return redirect('/perfil');
    }
    public function guardaProp(Request $request)
    {
        //dd($request);
        $propiedad = new propiedades();

        $propiedad->name=$request->name;
        $propiedad->location=$request->location;
        $propiedad->price=$request->price;
        $propiedad->description=$request->description;
        $propiedad->terrain=$request->terrain;
        $propiedad->save();
        $idP= $propiedad->id;
       return view('imagenPropiedad')->with('idPropiedad',$idP)->with('success','Propiedad registrada con éxito!');
       // return redirect()->back()->with('success','Propiedad registrado con éxito!');

    }
    public function guardaImg(Request $request)
    {
        //dd($request);
        $img = new imagenes();
        
        $path=$request->file('imagen')->store('public');
        $file = basename($path);
        $img->name=$file;
        $img->idP=$request->idP;
        
        $img->save();
        return view('home')->with('success','Propiedad e imagen registradas con éxito!');

    }

    public function catalogo()
    {
        $prop= propiedades::all();
        $img= imagenes::all();
        return view('catalogo')->with('propiedades',$prop)->with('imagenes',$img);
    }
    public function verProp()
    {
        $prop= propiedades::all();
        return view('verpropiedad')->with('propiedades',$prop);
    }
    public function eliminarP($id)
    {
        $propiedad=propiedades::where('idP',$id)->delete();
        $img= imagenes::where('idP',$id)->delete();
        return redirect('/verpropiedad');
    }
    public function guardaP(Request $request)
    {
        if(isset($request->identificador))
            //$prop = propiedades::where('idP', $request->identificador)->first();
            $prop1=DB::table('propiedades')->where("propiedades.idP","=",$request->identificador)
                ->update(["propiedades.name"=>$request->name,"propiedades.location"=>$request->location,"propiedades.price"=>$request->price,"propiedades.description"=>$request->description,"propiedades.terrain"=>$request->terrain]);
        else{
            $prop=new propiedades();
            $prop->name=$request->name;
            $prop->location=$request->location;
            $prop->price=$request->price;
            $prop->description=$request->description;
            $prop->terrain=$request->terrain;
            $prop->save();
        }

        if(isset($request->identificador))
            return redirect('/verpropiedad');

        return redirect()->back()->with('success','Propiedad registrado con exito');
    }
    public function detalleProp($id){
        
        $p = DB::table('propiedades')->select('idP','name','location','price','description','terrain')->where('idP','=', $id)->get();
        $i= DB::table('imagenes')->select('name')->where('idP','=', $id)->get();
       // dd($p);
       // dd($i);
        return view('propiedad',array('propiedad' => $p,'imagen'=> $i));
    }


    public function PruebaPDF($id){
       $p = DB::table('propiedades')->select('idP','name','location','price','description','terrain')->where('idP','=', $id)->get();
        //$pdf = PDF::loadView('pdf',array('propiedad' => $p));
    
        $pdf =PDF::loadView('pdf',compact('p'));
        return $pdf->download('invoice.pdf');
    }
}

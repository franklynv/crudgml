<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Perfil;
use App\Mail\Correo;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class UsuarioController
 * @package App\Http\Controllers
 */
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::paginate();
        $client  = new Client();
        $response  = $client ->request('GET', 'https://restcountries.com/v3.1/subregion/South%20America');
        $countries  = json_decode($response->getBody(), true);
        $countryNames = array_map(function ($country) {
        return $country['name']['common'];
        }, $countries);
        return view('usuario.index', compact('usuarios','countryNames'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        /**
         * Se consume la rest  Rest Countries se filtran los paises y se envia a la vista
         */
        $client  = new Client();
        $response  = $client ->request('GET', 'https://restcountries.com/v3.1/subregion/South%20America');
        $countries  = json_decode($response->getBody(), true);
        $countryNames = array_map(function ($country) {
        return $country['name']['common'];
        }, $countries);
        $perfils = Perfil::pluck('Perfil','id');
        $usuario = new Usuario();
        return view('usuario.create', compact('usuario','perfils','countryNames'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        request()->validate(Usuario::$rules);
        $usuario = Usuario::create($request->all());
         /**
         * Se llama a los administadores de la base de atos
         */
        $admins = DB::table('admins')
                ->select('Correo')
                ->latest('id')
                ->limit(1)
                ->get();

        $conteo ="Se Registro el usuario N°: ". DB::table('usuarios')->count()+1 ;        
        
        foreach($admins as $admin){
            /**
             * Envio de correo al administradores del sistema
             */
            $subject = strtolower($admin->Correo);
            $name="Se Creo Un Nuevo Usuario";
                Mail::to($subject)->send((new Correo($conteo,$name))->builds());
        }
        
        /**
         * Envio de correos de las personas que se registran en la plataforma
         */
        $subject = 'Su Registro fue Exitoso ';
        $emails = strtolower($request->input('Email'));
        $name = $request->input('Nombre');
        Mail::to($emails)->send((new Correo($name,$subject))->build());
     
        return redirect()->route('usuarios.index')
            ->with('success', 'Se registro con exito un nuevo usuario.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($valor)
    {
        $existe = DB::table('usuarios')
            ->where('NumDoc', $valor) 
            ->orWhere('Email', $valor)
            ->exists();
        return response()->json(['existe' => $existe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client  = new Client();
        $response  = $client ->request('GET', 'https://restcountries.com/v3.1/subregion/South%20America');
        $countries  = json_decode($response->getBody(), true);
        $countryNames = array_map(function ($country) {
            return $country['name']['common'];
        }, $countries);
        $perfils = Perfil::pluck('Perfil','id');
        $usuario = Usuario::find($id);

        return view('usuario.edit', compact('usuario','perfils','countryNames'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Usuario $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        request()->validate(Usuario::$rules);

        $usuario->update($request->all());

        return redirect()->route('usuarios.index')
            ->with('success', 'Se actualizo satifactoriamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();

        return redirect()->route('usuarios.index')
            ->with('success', 'Usuario deleted successfully');
    }
}


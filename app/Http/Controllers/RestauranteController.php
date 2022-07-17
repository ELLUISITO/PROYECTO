<?php

namespace App\Http\Controllers;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Restaurante;
use App\Ubicacione;
use App\Horario;
use App\Inflegal;
use App\Replegal;
use App\Redessociale;
use App\BD;
use App\Servicio;
use App\Tiposocasione;
use App\Tiposcomida;
use App\Imagene;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class RestauranteController
 * @package App\Http\Controllers
 */
class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurantes = Restaurante::where('id_usuarios',Auth::id())->paginate();

        return view('restaurante.index', compact('restaurantes'))
            ->with('i', (request()->input('page', 1) - 1) * $restaurantes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurante = new Restaurante();
        $user = Auth::user();

        //return response()->json(['user' =>$user]);
        
        return view('restaurante.create', compact('restaurante'))->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {      



        // dd($request->all());

        // return response()->json(['request' => $request->all()]);


        // request()->validate(Restaurante::$rules);

        //$request->id_usuarios = Auth::id();

        //return response()->json($request->id_usuarios, 200, $headers);

        //$restaurante = Restaurante::create($request->all() + ['id_usuarios' => auth()->id()]);

        //DB::update('update users set votes = 100 where name = ?', ['John']);


        DB::beginTransaction();

        try {



        // RESTAURANTE   
        // $restaurante = Restaurante::create($request->all());


        $restaurante = Restaurante::create([
            'id_usuarios'           =>  $request->id_usuarios = Auth::id(),
            'nombre_restauarante'   =>  $request->nombre_restauarante,
            'descripcion'           =>  $request->descripcion,
            'telefono'              =>  $request->telefono,
            'pagina_web'            =>  $request->pagina_web,
        ]);        


        // IMAGENES

      //
      //      'id_restaurantes' =>  $restaurante->id,
      //      'res_ruta'        =>  $request->res_ruta ->file()->store('/','public'),
      //      ->file('archivo')->store('public'),
//
       //   'res_ruta'        =>  $request->res_ruta,

       //   file('archivo')->store('public');
      //  ]);
        // Ubicacione
        $ubicacion = Ubicacione::create([
            'id_restaurantes' =>  $restaurante->id,
            'nombre_sede'     =>  $request->nombre_sede,
            'departamento'    =>  $request->departamento,
            'municipio'       =>  $request->municipio,
            'codigo_postal'   =>  $request->codigo_postal,
            'barrio'          =>  $request->barrio, 
            'direccion'       =>  $request->direccion,
            'anexo'           =>  $request->anexo,
        ]);

        // Horarios
        $horarios = Horario::create([
            'id_restaurantes'  =>  $restaurante->id,
            /*

            'dia_semana'       =>  $request->dia_semana, //Remplazar dia por categoria de horarios L-V, FSM, FVS
            'hora_apertura'    =>  $request->hora_apertura,
            'hora_cierre'      =>  $request->hora_cierre, 
            */  



            'dia_semana_LV'       =>  $request->dia_semana_LV, 
            'hora_apertura_LV'    =>  $request->hora_apertura_LV,
            'hora_cierre_LV'      =>  $request->hora_cierre_LV,

            'dia_semana_S'       =>  $request->dia_semana_S, 
            'hora_apertura_S'    =>  $request->hora_apertura_S,
            'hora_cierre_S'      =>  $request->hora_cierre_S,

            'dia_semana_DF'       =>  $request->dia_semana_DF, 
            'hora_apertura_DF'    =>  $request->hora_apertura_DF,
            'hora_cierre_DF'      =>  $request->hora_cierre_DF,
          
        ]);

        // Información Legal
        $informacion_legal = Inflegal::create([
            'id_restaurantes'    =>  $restaurante->id,
            'regimen_tributario' =>  $request->regimen_tributario,
            'tipo_persona'       =>  $request->tipo_persona,
            'tipo_documento'     =>  $request->tipo_documento,
            'numero_documento'   =>  $request->numero_documento,
            'razon_social'       =>  $request->razon_social,
        ]);

        // Representante Legal
        $representante_legal = Replegal::create([
            'id_restaurantes'   =>  $restaurante->id,
            'nombre'            =>  $request->nombre,      
            'apellido'          =>  $request->apellido,
            'tipo_documento'    =>  $request->tipo_documento,
            'numero_documento'  =>  $request->numero_documento,
        ]);

        // Redes Sociales
        $redes_sociales = Redessociale::create([
            'id_restaurantes'    =>  $restaurante->id,
            'red_social'         =>  $request->red_social,
            'usuario_red_social' =>  $request->usuario_red_social,
            'enlace_red_social'  =>  $request->enlace_red_social,
        ]);

        // Tipo de servicios MODELO TIPO SERVICIO CUAL ES------------
        $tipo_servicios = Servicio::create([
            'id_restaurantes'  =>  $restaurante->id,
            'servicio'         =>  $request->servicio, 
        ]);

        // Tipo de Ocasiones 
        $tipo_ocasione= Tiposocasione::create([
            'id_restaurantes'    =>  $restaurante->id,
            'tipo_ocasion'       =>  $request->tipo_ocasion, 
        ]);

        // Tipo de Comidas
        $tipo_comidas = Tiposcomida::create([
            'id_restaurantes'    =>  $restaurante->id,
            'tipos_comida'       =>  $request->tipos_comida,
        ]);


        DB::commit();


        } catch (\Throwable $th) {

            //throw $th;
            DB::rollback();
            throw $th;
            //throw $e;
        }    

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurante = Restaurante::find($id);

        return view('restaurante.show', compact('restaurante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurante = Restaurante::find($id);
        $user = Auth::user();

        return view('restaurante.edit', compact('restaurante'))->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Restaurante $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurante $restaurante)
    {
        request()->validate(Restaurante::$rules);

        $restaurante->update($request->all());

        return redirect()->route('restaurantes.index')
            ->with('success', 'Restaurante updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $restaurante = Restaurante::find($id)->delete();

        return redirect()->route('restaurantes.index')
            ->with('success', 'Restaurante deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Ubicacione;
use App\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class UbicacioneController
 * @package App\Http\Controllers
 */
class UbicacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ubicaciones = Ubicacione::paginate();
        return view('ubicacione.index', compact('ubicaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $ubicaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicacione = new Ubicacione();
        //$restaurante=restaurante::pluck('nombre_restauarante');

        $restaurante = Restaurante::where('id_usuarios',Auth::id())->pluck('nombre_restauarante','id');

    //    $restaurante = Restaurante::where('id_usuarios',Auth::id())->get();

        return view('ubicacione.create', compact('ubicacione','restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ubicacione::$rules);

        $ubicacione = Ubicacione::create($request->all());

        return redirect()->route('ubicaciones.index')
            ->with('success', 'Ubicacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ubicacione = Ubicacione::find($id);

        return view('ubicacione.show', compact('ubicacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubicacione = Ubicacione::find($id);
        $restaurante=restaurante::pluck('nombre_restauarante');

        return view('ubicacione.edit', compact('ubicacione','restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ubicacione $ubicacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ubicacione $ubicacione)
    {
        request()->validate(Ubicacione::$rules);

        $ubicacione->update($request->all());

        return redirect()->route('ubicaciones.index')
            ->with('success', 'Ubicacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ubicacione = Ubicacione::find($id)->delete();

        return redirect()->route('ubicaciones.index')
            ->with('success', 'Ubicacione deleted successfully');
    }
}

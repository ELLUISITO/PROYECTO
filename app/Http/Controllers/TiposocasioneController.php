<?php

namespace App\Http\Controllers;

use App\Tiposocasione;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Restaurante;


/**
 * Class TiposocasioneController
 * @package App\Http\Controllers
 */
class TiposocasioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposocasiones = Tiposocasione::paginate();

        return view('tiposocasione.index', compact('tiposocasiones'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposocasiones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposocasione = new Tiposocasione();
        $restaurante=restaurante::pluck('nombre_restauarante');
        return view('tiposocasione.create', compact('tiposocasione','restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiposocasione::$rules);

        $tiposocasione = Tiposocasione::create($request->all());

        return redirect()->route('tiposocasiones.index')
            ->with('success', 'Tiposocasione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposocasione = Tiposocasione::find($id);

        return view('tiposocasione.show', compact('tiposocasione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposocasione = Tiposocasione::find($id);
        $restaurante=restaurante::pluck('nombre_restauarante');

        return view('tiposocasione.edit', compact('tiposocasione','restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiposocasione $tiposocasione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiposocasione $tiposocasione)
    {
        request()->validate(Tiposocasione::$rules);

        $tiposocasione->update($request->all());

        return redirect()->route('tiposocasiones.index')
            ->with('success', 'Tiposocasione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposocasione = Tiposocasione::find($id)->delete();

        return redirect()->route('tiposocasiones.index')
            ->with('success', 'Tiposocasione deleted successfully');
    }
}

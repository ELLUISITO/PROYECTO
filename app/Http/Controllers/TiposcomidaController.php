<?php

namespace App\Http\Controllers;

use App\Tiposcomida;
use Illuminate\Http\Request;
use App\Restaurante;
use App\Http\Controllers;


/**
 * Class TiposcomidaController
 * @package App\Http\Controllers
 */
class TiposcomidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposcomidas = Tiposcomida::paginate();

        return view('tiposcomida.index', compact('tiposcomidas'))
            ->with('i', (request()->input('page', 1) - 1) * $tiposcomidas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposcomida = new Tiposcomida();
        $restaurante=restaurante::pluck('nombre_restauarante');
        return view('tiposcomida.create', compact('tiposcomida','restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tiposcomida::$rules);

        $tiposcomida = Tiposcomida::create($request->all());

        return redirect()->route('tiposcomidas.index')
            ->with('success', 'Tiposcomida created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiposcomida = Tiposcomida::find($id);

        return view('tiposcomida.show', compact('tiposcomida'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposcomida = Tiposcomida::find($id);
        $restaurante=restaurante::pluck('nombre_restauarante');

        return view('tiposcomida.edit', compact('tiposcomida','restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tiposcomida $tiposcomida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tiposcomida $tiposcomida)
    {
        request()->validate(Tiposcomida::$rules);

        $tiposcomida->update($request->all());

        return redirect()->route('tiposcomidas.index')
            ->with('success', 'Tiposcomida updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tiposcomida = Tiposcomida::find($id)->delete();

        return redirect()->route('tiposcomidas.index')
            ->with('success', 'Tiposcomida deleted successfully');
    }
}

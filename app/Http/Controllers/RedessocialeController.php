<?php

namespace App\Http\Controllers;

use App\Redessociale;
use Illuminate\Http\Request;
use App\Http\Controllers;
use App\Restaurante;



/**
 * Class RedessocialeController
 * @package App\Http\Controllers
 */
class RedessocialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redessociales = Redessociale::paginate();

        return view('redessociale.index', compact('redessociales'))
            ->with('i', (request()->input('page', 1) - 1) * $redessociales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $redessociale = new Redessociale();
        $restaurante=restaurante::pluck('nombre_restauarante');
        return view('redessociale.create', compact('redessociale','restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Redessociale::$rules);

        $redessociale = Redessociale::create($request->all());

        return redirect()->route('redessociales.index')
            ->with('success', 'Redessociale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $redessociale = Redessociale::find($id);

        return view('redessociale.show', compact('redessociale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $redessociale = Redessociale::find($id);
        $restaurante=restaurante::pluck('nombre_restauarante');

        return view('redessociale.edit', compact('redessociale','restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Redessociale $redessociale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redessociale $redessociale)
    {
        request()->validate(Redessociale::$rules);

        $redessociale->update($request->all());

        return redirect()->route('redessociales.index')
            ->with('success', 'Redessociale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $redessociale = Redessociale::find($id)->delete();

        return redirect()->route('redessociales.index')
            ->with('success', 'Redessociale deleted successfully');
    }
}

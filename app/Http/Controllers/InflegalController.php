<?php

namespace App\Http\Controllers;

use App\Inflegal;
use Illuminate\Http\Request;
use App\Restaurante;
use App\Http\Controllers;


/**
 * Class InflegalController
 * @package App\Http\Controllers
 */
class InflegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inflegals = Inflegal::paginate();

        return view('inflegal.index', compact('inflegals'))
            ->with('i', (request()->input('page', 1) - 1) * $inflegals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inflegal = new Inflegal();
        $restaurante=restaurante::pluck('nombre_restauarante');
        return view('inflegal.create', compact('inflegal','restaurante'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inflegal::$rules);

        $inflegal = Inflegal::create($request->all());

        return redirect()->route('inflegals.index')
            ->with('success', 'Inflegal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inflegal = Inflegal::find($id);

        return view('inflegal.show', compact('inflegal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inflegal = Inflegal::find($id);
        $restaurante=restaurante::pluck('nombre_restauarante');

        return view('inflegal.edit', compact('inflegal','restaurante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inflegal $inflegal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inflegal $inflegal)
    {
        request()->validate(Inflegal::$rules);

        $inflegal->update($request->all());

        return redirect()->route('inflegals.index')
            ->with('success', 'Inflegal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inflegal = Inflegal::find($id)->delete();

        return redirect()->route('inflegals.index')
            ->with('success', 'Inflegal deleted successfully');
    }
}

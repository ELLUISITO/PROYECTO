<?php

namespace App\Http\Controllers;

use App\Replegal;
use Illuminate\Http\Request;

/**
 * Class ReplegalController
 * @package App\Http\Controllers
 */
class ReplegalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $replegals = Replegal::paginate();

        return view('replegal.index', compact('replegals'))
            ->with('i', (request()->input('page', 1) - 1) * $replegals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $replegal = new Replegal();
        return view('replegal.create', compact('replegal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Replegal::$rules);

        $replegal = Replegal::create($request->all());

        return redirect()->route('replegals.index')
            ->with('success', 'Replegal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $replegal = Replegal::find($id);

        return view('replegal.show', compact('replegal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $replegal = Replegal::find($id);

        return view('replegal.edit', compact('replegal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Replegal $replegal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Replegal $replegal)
    {
        request()->validate(Replegal::$rules);

        $replegal->update($request->all());

        return redirect()->route('replegals.index')
            ->with('success', 'Replegal updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $replegal = Replegal::find($id)->delete();

        return redirect()->route('replegals.index')
            ->with('success', 'Replegal deleted successfully');
    }
}

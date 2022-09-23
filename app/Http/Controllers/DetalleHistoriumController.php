<?php

namespace App\Http\Controllers;

use App\Models\DetalleHistorium;
use Illuminate\Http\Request;

/**
 * Class DetalleHistoriumController
 * @package App\Http\Controllers
 */
class DetalleHistoriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleHistoria = DetalleHistorium::paginate();

        return view('detalle-historium.index', compact('detalleHistoria'))
            ->with('i', (request()->input('page', 1) - 1) * $detalleHistoria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $detalleHistorium = new DetalleHistorium();
        return view('detalle-historium.create', compact('detalleHistorium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(DetalleHistorium::$rules);

        $detalleHistorium = DetalleHistorium::create($request->all());

        return redirect()->route('detalle-historia.index')
            ->with('success', 'DetalleHistorium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleHistorium = DetalleHistorium::find($id);

        return view('detalle-historium.show', compact('detalleHistorium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detalleHistorium = DetalleHistorium::find($id);

        return view('detalle-historium.edit', compact('detalleHistorium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  DetalleHistorium $detalleHistorium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleHistorium $detalleHistorium)
    {
        request()->validate(DetalleHistorium::$rules);

        $detalleHistorium->update($request->all());

        return redirect()->route('detalle-historia.index')
            ->with('success', 'DetalleHistorium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $detalleHistorium = DetalleHistorium::find($id)->delete();

        return redirect()->route('detalle-historia.index')
            ->with('success', 'DetalleHistorium deleted successfully');
    }
}

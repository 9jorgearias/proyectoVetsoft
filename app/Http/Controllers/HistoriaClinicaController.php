<?php

namespace App\Http\Controllers;

use App\Models\HistoriaClinica;
use Illuminate\Http\Request;

/**
 * Class HistoriaClinicaController
 * @package App\Http\Controllers
 */
class HistoriaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historiaClinicas = HistoriaClinica::paginate();

        return view('historia-clinica.index', compact('historiaClinicas'))
            ->with('i', (request()->input('page', 1) - 1) * $historiaClinicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $historiaClinica = new HistoriaClinica();
        return view('historia-clinica.create', compact('historiaClinica'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(HistoriaClinica::$rules);

        $historiaClinica = HistoriaClinica::create($request->all());

        return redirect()->route('historia-clinicas.index')
            ->with('success', 'HistoriaClinica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $historiaClinica = HistoriaClinica::find($id);

        return view('historia-clinica.show', compact('historiaClinica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $historiaClinica = HistoriaClinica::find($id);

        return view('historia-clinica.edit', compact('historiaClinica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  HistoriaClinica $historiaClinica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HistoriaClinica $historiaClinica)
    {
        request()->validate(HistoriaClinica::$rules);

        $historiaClinica->update($request->all());

        return redirect()->route('historia-clinicas.index')
            ->with('success', 'HistoriaClinica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $historiaClinica = HistoriaClinica::find($id)->delete();

        return redirect()->route('historia-clinicas.index')
            ->with('success', 'HistoriaClinica deleted successfully');
    }
}

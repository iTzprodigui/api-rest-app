<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use Illuminate\Http\Request;

/**
 * Class DocenteController
 * @package App\Http\Controllers
 */
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $docentes = Docentes::paginate();

        return view('docente.index', compact('docentes'))
            ->with('i', (request()->input('page', 1) - 1) * $docentes->perPage()); */

            $docentes = Docentes::all();

            return \response($docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = new Docentes();
        return view('docente.create', compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Docentes::$rules);

        $docente = Docentes::create($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docentes::find($id);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docentes::find($id);

        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docente $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docentes $docente)
    {
        request()->validate(Docentes::$rules);

        $docente->update($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docente = Docentes::find($id)->delete();

        return redirect()->route('docentes.index')
            ->with('success', 'Docente deleted successfully');
    }
}

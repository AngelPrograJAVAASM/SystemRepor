<?php

namespace App\Http\Controllers;

use App\Models\Rpt;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\RptRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Employ;
use App\Http\Requests\EmployRequest;
use PgSql\Result;

class RptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $rpts = Rpt::paginate();


        return view('rpt.index', compact('rpts'))
            ->with('i', ($request->input('page', 1) - 1) * $rpts->perPage());
    }

    public function indexrpt(Request $request)
    {
                //
        $productos = Rpt::all();
        $data = array("lista_productos" => $productos);

        return response()->view("punto_requi.counter",$data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $rpt = new Rpt();
        $employ =  Employ::where('type', 2) -> get();
        $data = array("lista" => $employ);

        return view('rpt.create', compact('rpt'), $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RptRequest $request): RedirectResponse
    {
        Rpt::create($request->validated());

        return Redirect::route('rpt.index')
            ->with('success', 'Rpt Registro exitiso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $rpt = Rpt::find($id);

        return view('rpt.show', compact('rpt'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rpt = Rpt::find($id);
        $employ =  Employ::where('type', 2) -> get();
        $data = array("lista" => $employ);

        return view('rpt.edit', compact('rpt'), $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RptRequest $request, Rpt $rpt): RedirectResponse
    {
        $rpt->update($request->validated());

        return Redirect::route('rpt.index')
            ->with('success', 'Rpt Modificasion de datos, exitiso.');
    }

    public function destroy($id): RedirectResponse
    {
        Rpt::find($id)->delete();

        return Redirect::route('rpt.index')
            ->with('success', 'Rpt Eliminar registro, exitiso.');
    }

    
}

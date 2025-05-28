<?php

namespace App\Http\Controllers;

use App\Models\Returnmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReturnmailRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Rpt;
use App\Http\Requests\RptRequest;
use App\Models\Employ;
use App\Http\Requests\EmployRequest;

class ReturnmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $returnmails = Returnmail::paginate();

        return view('returnmail.index', compact('returnmails'))
            ->with('i', ($request->input('page', 1) - 1) * $returnmails->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $returnmail = new Returnmail();

        $rpt = Rpt::all();
        $employ =  Employ::where('type', 1) -> get();


        return view('returnmail.create', compact('returnmail','rpt','employ'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReturnmailRequest $request): RedirectResponse
    {
        Returnmail::create($request->validated());

        return Redirect::route('returnmail.index')
            ->with('success', 'Returnmail Registro exitiso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $returnmail = Returnmail::find($id);

        return view('returnmail.show', compact('returnmail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $rpt = Rpt::all();
        $employ =  Employ::where('type', 1) -> get();
        $returnmail = Returnmail::find($id);

        return view('returnmail.edit', compact('returnmail','rpt','employ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReturnmailRequest $request, Returnmail $returnmail): RedirectResponse
    {
        $returnmail->update($request->validated());

        return Redirect::route('returnmail.index')
            ->with('success', 'Returnmail Modificasion de datos, exitiso.');
    }

    public function destroy($id): RedirectResponse
    {
        Returnmail::find($id)->delete();

        return Redirect::route('returnmail.index')
            ->with('success', 'Returnmail Eliminar registro, exitiso.');
    }
}

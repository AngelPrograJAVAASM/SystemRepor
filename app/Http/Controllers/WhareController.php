<?php

namespace App\Http\Controllers;

use App\Models\Whare;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\WhareRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Req;
use App\Http\Requests\ReqRequest;


class WhareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $whares = Whare::paginate();

        return view('whare.index', compact('whares'))
            ->with('i', ($request->input('page', 1) - 1) * $whares->perPage());
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $whare = new Whare();

        $req = Req::all();
        $data = array("lista" => $req);

        return view('whare.create', compact('whare'), $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WhareRequest $request): RedirectResponse
    {
        Whare::create($request->validated());

        return Redirect::route('whare.index')
            ->with('success', 'Whare Registro exitiso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $whare = Whare::find($id);

        return view('whare.show', compact('whare'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $whare = Whare::find($id);
        $req = Req::all();
        $data = array("lista" => $req);

        return view('whare.edit', compact('whare' ),$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WhareRequest $request, Whare $whare): RedirectResponse
    {
        $whare->update($request->validated());

        return Redirect::route('whare.index')
            ->with('success', 'Whare Modificasion de datos, exitiso.');
    }

    public function destroy($id): RedirectResponse
    {
        Whare::find($id)->delete();

        return Redirect::route('whare.index')
            ->with('success', 'Whare Eliminar registro, exitiso.');
    }
}

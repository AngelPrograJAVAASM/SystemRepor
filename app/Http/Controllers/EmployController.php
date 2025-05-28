<?php

namespace App\Http\Controllers;

use App\Models\Employ;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\EmployRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $employs = Employ::paginate();

        return view('employ.index', compact('employs'))
            ->with('i', ($request->input('page', 1) - 1) * $employs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $employ = new Employ();

        return view('employ.create', compact('employ'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployRequest $request): RedirectResponse
    {
        Employ::create($request->validated());

        return Redirect::route('employs.index')
            ->with('success', 'Employ created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $employ = Employ::find($id);

        return view('employ.show', compact('employ'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $employ = Employ::find($id);

        return view('employ.edit', compact('employ'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployRequest $request, Employ $employ): RedirectResponse
    {
        $employ->update($request->validated());

        return Redirect::route('employs.index')
            ->with('success', 'Employ updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Employ::find($id)->delete();

        return Redirect::route('employs.index')
            ->with('success', 'Employ deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Req;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ReqRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\WhareController;
use illuminate\Http\JsonResponse;
use App\Models\Whare;
use App\Http\Requests\WhareRequest;


class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $reqs = Req::paginate();

        return view('req.index', compact('reqs'))
            ->with('i', ($request->input('page', 1) - 1) * $reqs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $req = new Req();

        return view('req.create', compact('req'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReqRequest $request): RedirectResponse
    {
        Req::create($request->validated());

        return Redirect::route('req.index')
            ->with('success', 'Req Registro exitiso.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $req = Req::find($id);

        return view('req.show', compact('req'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $req = Req::find($id);

        return view('req.edit', compact('req'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReqRequest $request, Req $req): RedirectResponse
    {
        $req->update($request->validated());

        return Redirect::route('req.index')
            ->with('success', 'Req Modificasion de datos, exitiso.');
    }

    public function destroy($id): RedirectResponse
    {
        Req::find($id)->delete();

        return Redirect::route('reqs.index')
            ->with('success', 'Req Eliminar registro, exitiso.');
    }

    public function punto_req(Request $request)
    {
        //

        $validatedData = $request->validate([
            'data.*.dre' => 'required|min:0',
            'data.*.spf' => 'required|min:0',
            'data.*.typ' => 'required|min:0',
            'data.*.cam' => 'required|min:0',
            'data.*.cos' => 'required|min:0',



        ]);


                $request->validate([
            'total' => 'required|numeric|min:0',
            'camr' => 'required|numeric|min:0',
            ]);

        Req::create(['all_reqs' => $request->input('total'), 'numeber_material' => $request->input('camr')]);

                $latestPost = Req::latest('id')->first();
                $latestPost->id;

        foreach ($validatedData['data'] as $row) {


            $nomReq = Whare::where('description', $row['dre']) -> value('id');


            if($nomReq != null){

                $prod = Whare::find($nomReq );

                $prod->quantity = $prod -> quantity + $row['cam'];

                $prod->save();


            }else{

                Whare::create(['description' => $row['dre'], 'specifications' => $row['spf'], 'tipo' => $row['typ'], 'quantity' => $row['cam'], 'cost_reqs' => $row['cos'], 'number_reqs' => $latestPost->id]);
            }


        }

        return response()->json([
                'message' => 'Venta se realizo correctamente'
            ]);


    }
}

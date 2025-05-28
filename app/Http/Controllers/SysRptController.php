<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RptRequest;
use App\Models\Rpt;
use App\Http\Requests\EmployRequest;
use App\Models\Employ;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Models\Returnmail;
use App\Http\Requests\ReturnmailRequest;

class SysRptController extends Controller
{
    public function index( ) {

        $emplos = Employ::all();
        $data = array("lista" => $emplos);
        $rpt = new Rpt();
        $rpts = Rpt::paginate();


        return response()-> view('system_repor.do_rpt',$data, 200);


    }//

    public function indexSeeRtq(Request $request): View
    {
        $rpts = Rpt::paginate();



        return view('system_repor.see_rpt', compact('rpts'))
            ->with('i', ($request->input('page', 1) - 1) * $rpts->perPage());
    }

    public function storeSys (RptRequest $request):RedirectResponse
    {
        Rpt::create($request->validated());

        return Redirect::route('indexSeeRtq')
            ->with('success', 'Proveedor registrado.');
    }

    public function ShowRtq($id)
    {
        $rpt = Rpt::find($id);

        return view('system_repor.show_rpt', compact('rpt'));
    }

    public function EditRtq($id): View
    {
        $rpt = Rpt::find($id);
        $employ =  Employ::where('type', 2) -> get();
        $data = array("lista" => $employ);

        return view('system_repor.edit_rpt', compact('rpt'), $data);
    }

    public function UpdateRtp(RptRequest $request, Rpt $rpt): RedirectResponse
    {
        $rpt->update($request->validated());

        return Redirect::route('indexSeeRtq')
            ->with('success', 'Rpt Modificasion de datos, exitiso.');
    }

    public function ShowReturnm($id)
    {

        $rpt = Rpt::find($id);
        $returnmail = Returnmail::where('id_rpt', $rpt->id)->first();
        if (!$returnmail) {
            return Redirect::route('indexSeeRtq')
            ->with('success', 'No hay respuesta.');
        }else{

            return view('system_repor.show_retur', compact('returnmail'));
        }
    }

    public function indexSeeRepon(Request $request): View
    {
        $rpts = Rpt::paginate();



        return view('system_repor.see_repon', compact('rpts'))
            ->with('i', ($request->input('page', 1) - 1) * $rpts->perPage());
    }

    public function CreateRepon($id): View
    {
        $returnmail = new Returnmail();

        $rpt = Rpt::all();
        $employ =  Employ::where('type', 1) -> get();


        return view('system_repor.do_repon', compact('returnmail','rpt','employ','id'));
    }

    public function StoreRepon (RptRequest $request, $id):RedirectResponse
    {
        Returnmail::create($request->validated());

        $prod = Rpt::find($id );

        $prod->attended = 1;

        $prod->save();

        return Redirect::route('indexSeeReponr')
            ->with('success', 'Proveedor registrado.');
    }








}

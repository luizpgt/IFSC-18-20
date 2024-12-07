<?php

namespace App\Http\Controllers;

use App\AssuntoModel;
use App\EscopoModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AssuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //metodo nao mais utilizado
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//--verified
    {
        if (Auth::id() === 1) {
            $objE = EscopoModel::orderBy('id')->get(); //passa os dados dos escopos para a tag select
            return view('admin.assuntos.create')->with('escopos', $objE);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//--verified
    {
        if (Auth::id() === 1) {
            $request->validate([
                'assunto' => 'required|unique:assuntos|max:255',
                'escopo_id' => 'required',
            ]);
            $objA = new AssuntoModel();
            $objA->assunto = ucwords($request->assunto);
            $objA->escopo_id = $request->escopo_id;
            $objA->save();

            return redirect()->action('IndexController@index')->withInput()->withErrors(['Assunto ' . $request->assunto . ' inserido com sucesso!']);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //metodo nao mais utilizado
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//--verified
    {
        if (Auth::id() === 1) {
            $objA = AssuntoModel::findorfail($id);
            $objE = EscopoModel::orderBy('id')->get(); //passa os dados dos escopos para tag select

            return view('admin.assuntos.edit')->with(['assunto' => $objA, 'escopos' => $objE]);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)//--verified
    {
        if (Auth::id() === 1) {
            $request->validate([
                'assunto' => 'required|unique:assuntos',
                'escopo_id' => 'required',
            ]);
            $objA = AssuntoModel::findorfail($request->id);
            $objA->assunto = ucwords($request->assunto);
            $objA->escopo_id = $request->escopo_id;
            $objA->save();
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Assunto ' . $request->assunto . ' editado com sucesso!']);;
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//--verified
    {
        if (Auth::id() === 1) {
            $objA = AssuntoModel::findOrFail($id);
            $data = $objA->assunto;
            $objA->delete();

            return redirect()->back()->withInput()->withErrors(['Assunto ' . $data . ' removido com sucesso!']);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    public function search(Request $request)//--verified
    {
        $query = DB::table('assuntos');
        if (!empty($request->assunto)) {
            $query->where('assunto', 'like', '%' . $request->assunto . '%');
        }
        $objA = $query->orderBy('id')->get();

        return view('assuntos.filter')->with(['assuntos' => $objA]);
    }
}

/*
return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
*/

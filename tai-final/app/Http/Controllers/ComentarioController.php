<?php

namespace App\Http\Controllers;

use App\ComentarioModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;


class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //--funcao descontinuada
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //--funcao descontinuada
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //--verified
    {
        if (!empty($request->comentario) || !empty($request->image)) {
            $objC = new ComentarioModel();
            $objC->thread_id = $request->thread_id;
            $objC->coment_id = $request->coment_id;
            $objC->user_id = $request->user_id;
            $objC->image = $request->image;
            $objC->comentario = $request->comentario;
            $objC->save();
            return redirect()->back()->withInput()->withErrors(['Comentario adicionado com sucesso!']);
        } else {
            return redirect()->back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //--verified
    {
        $objT = ThreadsModel::where('id', '=', $id)->first();
        $objC = ComentarioModel::where('thread_id', '=', $id)->get();
        if (empty($objT)) {
            return redirect()->back()->withInput()->withErrors(['Não foi possível encontrar esta sessão!']);
        }
        return view('threadComents')->with(['thread' => $objT, 'comentarios' => $objC]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //--verified
    {
        $objC1 = ComentarioModel::where('coment_id', '=', $id)->first();
        if (!empty($objC1)) {
            return redirect()->back()->withInput()->withErrors(['Este Comentário não pode ser editado pois possui respostas cadastradas!']);
        }
        $objC = ComentarioModel::findorfail($id);
        if (Auth::id() == $objC->user_id) {
            return view('comentarios.edit')->with(['comentario' => $objC]);
        } else {
            return redirect()->back()->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) //--verified
    {
        $objC = ComentarioModel::findorfail($request->id);
        if (Auth::id() == $objC->user_id) { //necessario comparar com == porque os atributos nao sao completamente identicos do mesmo tipo --mod
            if (!empty($request->comentario) || !empty($request->image)) {
                $objC->image = $request->image;
                $objC->comentario = $request->comentario;
                $objC->save();
                return redirect()->action('ComentarioController@show', $objC->thread_id)->withInput()->withErrors(['Comentário editado com sucesso!']);
            } else {
                return redirect()->back()->withInput()->withErrors(['Você não pode editar um comentário de forma vazia.']);
            }
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
    public function destroy($id) //--verified
    {
        $objC = ComentarioModel::findOrFail($id);
        $data = $objC->thread_id;
        if (Auth::id() === 1 || Auth::id() === $objC->user_id) {
            $objC->delete();
            return redirect()->back()->withInput()->withErrors(['Comentário removido com sucesso!']);
        } else {
            return redirect()->action('ComentarioController@show', $data)->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }
}

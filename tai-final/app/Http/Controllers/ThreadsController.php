<?php

namespace App\Http\Controllers;

use App\AssuntoModel;
use App\ComentarioModel;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ThreadsController extends Controller
{

    private $url = 'http://localhost:8002/api/threads';

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
    public function create($id) //--verified
    {
        $objA = AssuntoModel::where('id', '=', $id)->first(); //dados para tag select
        return view('threads.create')->with('assunto', $objA);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //--verified
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);
        $response = Http::post($this->url . '/create/do', [
            'assunto_id' => $request->assunto_id,
            'user_id' => $request->user_id,
            'title' => $request->title,
            'image' => $request->image,
            'desc' => $request->desc,
        ]);
        return redirect()->action('ThreadsController@filterByAssunto', $request->assunto_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //--funcao descontinuada
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) //--verified
    {
        $objC = ComentarioModel::where('thread_id', '=', $id)->first();
        if (!empty($objC)) {
            return redirect()->action('ComentarioController@show', $id)->withInput()->withErrors(['Esta Thread não pode ser editada pois possui respostas cadastradas!']);
        }
        $response = Http::get($this->url . '/' . $id);
        $objT = json_decode(json_encode($response->json()));
        if (Auth::id() === $objT->user_id) {
            $objA = AssuntoModel::orderBy('id')->get();
            return view('threads.edit')->with(['thread' => $objT, 'assuntos' => $objA]);
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
    public function update(Request $request) //--verified
    {
        if (Auth::id() == $request->user_id) {
            $objC = ComentarioModel::where('thread_id', '=', $request->id)->first();
            if (!empty($objC)) {
                return redirect()->action('ComentarioController@show', $request->id)->withInput()->withErrors(['Esta Thread não pode ser editada pois possui respostas cadastradas!']);
            } else {
                $request->validate([
                    'title' => 'required',
                    'image' => 'required',
                    'desc' => 'required',
                ]);

                $response = Http::put($this->url . '/update/do/' . $request->id, [
                    'assunto_id' => $request->assunto_id,
                    'user_id' => $request->user_id,
                    'title' => $request->title,
                    'image' => $request->image,
                    'desc' => $request->desc,
                ]);

                return redirect()->action('ComentarioController@show', $request->id)->withInput()->withErrors(['Thread editada com sucesso!']);
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
        $responseget = Http::get($this->url . '/' . $id);
        $objT = json_decode(json_encode($responseget->json()));
        if (Auth::id() === $objT->user_id || Auth::id() === 1) {
            $response = Http::delete($this->url . '/destroy' . '/' . $id);
            return redirect()->action('ThreadsController@filterByAssunto', $objT->assunto_id)->withInput()->withErrors(['Thread removida com sucesso!']);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    public function search(Request $request) //--verified
    {
        $response = Http::post($this->url . '/search/do', [
            'title' => $request->title,
        ]);
        $objT = json_decode(json_encode($response->json()));
        return view('threads.filter')->with(['threads' => $objT]);
    }

    public function filterByAssunto($id) //--verified
    {
        $response = Http::get($this->url . '/filter' . '/' . $id);
        $objT = json_decode(json_encode($response->json()));
        if (!empty($objT)) {
            $objA = AssuntoModel::where('id', '=', $objT[0]->assunto_id)->first();
            return view('threadsList')->with(['threads' => $objT, 'assunto' => $objA]);
        } else {
            return redirect()->action('ThreadsController@create', $id)->withInput()->withErrors('Este assunto ainda não possui conversas. Inicie uma nova Thread!');
        }
    }

    public function filterByUser($id) //--verified
    {
        $response = Http::get($this->url . '/user/filter' . '/' . $id);
        $objT = json_decode(json_encode($response->json()));

        return view('threadsList')->with(['threads' => $objT]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ThreadsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThreadApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $objT = ThreadsModel::orderBy('id')->get();
        //dd($objT);
        return $objT;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return ThreadsModel::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ThreadsModel  $threadsModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $objT = ThreadsModel::findOrFail($id);

        return $objT;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThreadsModel  $threadsModel
     * @return \Illuminate\Http\Response
     */
    public function edit(ThreadsModel $threadsModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThreadsModel  $threadsModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $objT = ThreadsModel::findOrFail($id);

        return $objT->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThreadsModel  $threadsModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $objT = ThreadsModel::findOrFail($id);
        return $objT->delete();
    }

    public function search(Request $request)
    {
        $query = DB::table('threads');

        if (!empty($request->title)) {
            $query->where('title', 'like', "%" . $request->title . "%");
        }
        if (!empty($request->desc)) {
            $query->where('desc', 'like', "%" . $request->desc . "%");
        }

        $objT = $query->orderBy('id')->get();
        return $objT;

    }

    public function filterByAssunto($id)
    {
        $objT = ThreadsModel::where('assunto_id', '=', $id)->orderBy('created_at', 'desc')->get();
        //dd($objT);
        return $objT;
    }

    public function filterByUser($id)
    {
        $objT = ThreadsModel::where('user_id', '=', $id)->orderBy('created_at', 'desc')->get();
        //dd($objT);
        return $objT;
    }
}

<?php

namespace App\Http\Controllers;

use App\ComentarioModel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $url = 'http://localhost:8002/api/threads';

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)//--verified
    {
        $objU = User::where('id', '=', $id)->first();
        $objC = ComentarioModel::where('user_id', '=', $id)->orderBy('created_at', 'desc')->paginate(15); //alterei

        $response = Http::get($this->url . '/user/filter' . '/' . $id);
        $objT = json_decode(json_encode($response->json()));

        return view('user.profile')->with(['threads' => $objT, 'user' => $objU, 'comentarios' => $objC]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)//--verified
    {
        $objU = User::where('id', '=', $id)->first();

        if (Auth::id() == $objU->id) {
            return view('user.edit')->with('user', $objU);
        } else {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    public function editPassword($id)//--verified
    {
        $objU = User::where('id', '=', $id)->first();

        if (Auth::id() == $objU->id) {
            return view('user.editPassword')->with('user', $objU);
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

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $objU = User::findorfail($request->id);
        if (Auth::id() == $objU->id) {
            $objU->name = ucwords($request->name);
            $objU->email = $request->email;
            $objU->save();
            return redirect()->back()->withInput()->withErrors(['Usuário ' . $request->name . ' editado com sucesso!']);
        } elseif (Auth::id() !== $objU->id) {
            return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
        }
    }

    public function updatePassword(Request $request)//--verified
    {

        $request->validate([
            'password' => 'required',
            'password_confirm' => 'required',
        ]);
        if ($request->password === $request->password_confirm) {
            $objU = User::findorfail($request->id);
            $objU->password =  Hash::make($request->password);
            if (Auth::id() == $objU->id) {
                $objU->save();
                return redirect()->back()->withInput()->withErrors(['Senha editada com sucesso!']);
            } elseif (Auth::id() !== $objU->id) {
                return redirect()->action('IndexController@index')->withInput()->withErrors(['Você não tem a permissão necessária para efetuar esta ação!']);
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['As senhas inseridas não conferem!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)//--verified
    {
        $query = DB::table('users');
        if (!empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        $objU = $query->orderBy('id')->get();

        return view('user.filter')->with(['users' => $objU]);
    }

    public function TelaSearch()//--verified
    {
        $objU = User::orderBy('id')->paginate(35);
        return view('user.filter')->with(['users' => $objU]);
    }
}

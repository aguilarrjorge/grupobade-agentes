<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; // necesario para usar el metodo HTTP y poder consumir API´s
use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{

    public function home(){
        //$apiUsuarios = HTTP::get('http://localhost:4200/api/user');
        $usuarios = User::all();
        return view('administrador/home', compact('usuarios'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return $usuarios;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = password_hash($request->password, PASSWORD_DEFAULT);
        $usuario->save();

        return User::all();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return User::all();
    }
}

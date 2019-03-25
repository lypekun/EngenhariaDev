<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UsuarioController extends Controller
{
    //
	public function index()
    {
        $usuarios = User::orderBy('created_at', 'desc')->paginate(10);
        return view('usuarios.index',['usuarios' => $usuarios]);
    }
  
    public function create()
    {
        return view('usuarios.create');
    }
  
    public function store(Request $request)
    {
        $usuario = new User;
        $usuario->nome        = $request->nome;
        $usuario->trabalho_resumo        = $request->trabalho_resumo;
        $usuario->trabalho_autor         = Auth::user()->name;
        $usuario->trabalho_orientador    = $request->trabalho_orientador;
        $usuario->trabalho_coorientador  = $request->trabalho_coorientador;
        $usuario->trabalho_assunto       = $request->trabalho_assunto;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('message', 'User created successfully!');
    }
  
    public function show($id)
    {
        //
         $usuarios = User::findOrFail($id);
         return view('usuarios.show',['usuarios' => $usuarios]);
    }
  
    public function edit($id)
    {
        $usuario = User::findOrFail($id);
        return view('usuarios.edit',compact('usuario'));
    }
  
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $usuario->trabalho_titulo        = $request->trabalho_titulo;
        $usuario->trabalho_resumo        = $request->trabalho_resumo;
        $usuario->trabalho_autor         = Auth::user()->name;
        $usuario->trabalho_orientador    = $request->trabalho_orientador;
        $usuario->trabalho_coorientador  = $request->trabalho_coorientador;
        $usuario->trabalho_assunto       = $request->trabalho_assunto;
        $usuario->save();
        return redirect()->route('usuarios.index')->with('message', 'Usuário updated successfully!');
    }
  
    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return redirect()->route('home')->with('alert-success','Usuario hasbeen deleted!');
    }
}

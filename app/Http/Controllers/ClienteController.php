<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class ClienteController extends Controller
{
    public function index()
    {
        $clientes =Clientes::paginate(5);
        return view('clientes.index', compact('clientes'));
    }

    public function create(){
        return view('clientes.create');
     }

    
    public function store(Request $request)
     {
          $request->validate([
               'nit' => 'required',
               'nombresapellidos' => 'required',
               'razonsocial' => 'required',
               'tipodocumento' => 'required',
               'numerodocumento' => 'required',
               'correoelectronico' => 'required',
               'telefono' => 'required',
               'pais' => 'required',
               'departamento' => 'required',
               'municipio' => 'required'
           ]);

        Clientes::create($request->all());
         // $roles = $request->input('roles', []);
         // $user->syncRoles($roles);
         return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente');
     }
}

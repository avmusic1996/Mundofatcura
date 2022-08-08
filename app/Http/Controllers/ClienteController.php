<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Clientes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;


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
           if($request->get('edit')==1){
            Clientes::create($request->all());
            return redirect()->route('clientes.index')->with('success', 'Cliente registrado correctamente');
           }
           else
           {

            $id = $request->get('idcliente');
            Clientes::whereid($id)->update(request()->except(['_token', 'edit', 'idcliente']));
           return redirect()->route('clientes.index')->with('success', 'Usuario actualizado correctamente');
           }

      
         // $roles = $request->input('roles', []);
         // $user->syncRoles($roles);
         
     }

     public function update(Request $request, $id)
     {
          $data = $request->only([
               'nit',
               'nombresapellidos',
               'razonsocial',
               'tipodocumento',
               'numerodocumento',
               'correoelectronico',
               'telefono',
               'pais',
               'departamento',
               'municipio'
           ]);

        // Clientes::create($request->all());
        //  // $roles = $request->input('roles', []);
        //  // $user->syncRoles($roles);
        //  return redirect()->route('clientes.index')->with('success', 'El Cliente ha sido ACTUALIZADO correctamente');

         $clientes->update($data);
           return redirect()->route('clientes.index')->with('success', 'Usuario actualizado correctamente');
     }

    


    public function byCliente(request $request){
        $id = $request->get('id');

         $consulta = DB::table('clientes as cliente')
             ->select('cliente.id','cliente.nit','cliente.nombresapellidos','cliente.razonsocial','cliente.tipodocumento','numerodocumento','cliente.correoelectronico','cliente.telefono','cliente.celular','cliente.pais','cliente.departamento','cliente.municipio')
             ->where('cliente.id', '=', $id)
             ->get();
             return json_encode($consulta);
    }


    public function destroy($id)
    {
        $clientes = Clientes::Find($id);
        // if ($clientes != null) {
        //     $clientes->delete();
        //     return redirect()->route('clientes.index')->with(['message'=> 'Successfully deleted!!']);
        // }
        $clientes->delete();
        return redirect()->route('clientes.index')->with(['message'=> 'Wrond ID!!']);
   
    }
}
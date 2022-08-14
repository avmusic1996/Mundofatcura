<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;
use Session;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return view("categoria.index",compact('categorias'));
    }
     public function create(){
        $categorias = Categoria::all();
        return view('categoria.create',compact('categorias'));
     }
    
    public function store(Request $request){


        Categoria::create($request->all());

        // $categoria = new CategoriaProducto($request->all());
        
        // if($request->hasFile('urlfoto')){

        //     $imagen = $request->file('urlfoto');
        //      $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
        //      Image::make($imagen->getRealPath())
        //      ->resize(1024,null,function($constraint){ $constraint->aspectRatio();  })
        //      ->save( public_path('/img/categoria/'.$nuevonombre));

        //    $categoria->urlfoto = $nuevonombre;
        // }
        // $categoria->slug    =   Str::slug($request->nombre);
         
         return redirect()->route('categoria.index')->with('success', 'Usuario creado correctamente');

     }

     public function bycategorias(request $request){
        $id = $request->get('id');

         $consulta = DB::table('categorias as categoria')
             ->select('categoria.id','categoria.titulo')
             ->where('categoria.idusuario', '=', $id)
             ->get();
             $res = '<select style="height: 35px; padding-left: 14px;color:#5E6472;border:0px; width:100%;" name="categoria_id" class="form-input" id="cateogira_id" required>';
             foreach ($consulta as $categoria) {

                $res1 = '<option value="'.$categoria->titulo.'">'.$categoria->titulo.'</option>';
                $res = $res.$res1;
            }
            $res = $res.'</select>';
             return ($res);
        
    }

    // public function bycatepro(request $request){
    //     $id = $request->get('stockpro');

    //      $consulta1 = DB::table('productos as producto')
    //          ->select('producto.stockpro','producto.stockpro')
    //          ->where('producto.stockpro', '=', $id)
    //          ->get();
    //          $res = '<p>';
    //          foreach ($consulta1 as $producto) {

    //             $res1 = ''.$producto->stockpro.'';
    //             $res = $res.$res1;
    //         }
    //         $res = $res.'</p>';
    //          return ($res);
        
    // }
    



     public function show($id){
         Session::put('categoria_id',$id);
             return redirect('categoria.index');
     }


     public function update(Request $request, Categoria $id)
     {

        $categoria = Categoria::findOrFail($id);
         $categoria->titulo=$request->input('titulo');
         $categoria->titulo=$request->input('descripcion');
        // $categoria->fill($request->all());
            //  $foto_anterior     = $categoria->urlfoto;
    
    
            //  if($request->hasFile('urlfoto')){
    
            //      $rutaAnterior = public_path('/img/categoria/'.$foto_anterior);
            //      if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
    
            //      $imagen = $request->file('urlfoto');
            //      $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            //      Image::make($imagen->getRealPath())
            //      ->resize(1024,null,function($constraint){ $constraint->aspectRatio();  })
            //      ->save( public_path('/img/categoria/'.$nuevonombre));
    
            //      $categoria->urlfoto = $nuevonombre;
            //  }
            //  $categoria->slug    =   Str::slug($request->nombre);
            $categoria->update($categoria);
             return redirect()->route('categoria.index', $categoria->id)->with('success', 'Usuario actualizado correctamente');
         }
     public function edit($id){
             $categoria = Categoria::findOrFail($id);
             return view('categoria.edit',compact('categoria'));
        }

    
    public function destroy($id){
         $categoria = Categoria::findOrFail($id);
    //      $borrar = public_path('/img/categoria/'.$categoria->urlfoto);
    //  if(file_exists($borrar)){ unlink(realpath($borrar)); }

     $categoria->delete();

     return back()->with('succes', 'Usuario eliminado correctamente');
     }
    // public function update(Request $request,$id){

    //     $categoria = CategoriaProducto::findOrFail($id);
    //     $categoria->fill($request->all());
    //     $foto_anterior     = $categoria->urlfoto;


    //     if($request->hasFile('urlfoto')){

    //         $rutaAnterior = public_path('/img/categoria/'.$foto_anterior);
    //         if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

    //         $imagen = $request->file('urlfoto');
    //         $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
    //         Image::make($imagen->getRealPath())
    //         ->resize(1024,null,function($constraint){ $constraint->aspectRatio();  })
    //         ->save( public_path('/img/categoria/'.$nuevonombre));

    //         $categoria->urlfoto = $nuevonombre;
    //     }
    //     $categoria->slug    =   Str::slug($request->nombre);
    //     $categoria->save();
    //     return redirect('/categoria');
    // }

    // public function edit($id){
    //     $categoria = CategoriaProducto::findOrFail($id);
    //     return view('categoria.edit',compact('categoria'));
    // }

    // public function show($id){
    //     Session::put('categoria_id',$id);
    //     return redirect('/productos');
    // }

    // public function destroy($id){
    //     $categoria = CategoriaProducto::findOrFail($id);
    //     $borrar = public_path('/img/categoria/'.$categoria->urlfoto);
    //     if(file_exists($borrar)){ unlink(realpath($borrar)); }

    //     $categoria->delete();

    //     return redirect('/categoria');
    // }
}






// use Illuminate\Http\Request;

// class CategoriaProducto extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }

<?php

namespace App\Http\Controllers;






use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Support\Str;
use Image;
use Session;

class ProductosController extends Controller
{
    public function index(){
        return view('productos.index');
     }
    public function create(){
         return view('productos.create');
     }
    // public function store(Request $request){

    //     $producto = new Producto($request->all());
        
    //     if($request->hasFile('urlfoto')){

    //         $imagen = $request->file('urlfoto');
    //         $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            
    //         ->resize(1024,null,function($constraint){ $constraint->aspectRatio();  })
    //         ->save( public_path('/img/producto/'.$nuevonombre));

    //         $producto->urlfoto = $nuevonombre;
    //     }
        
    //     $producto->slug    =   Str::slug($request->nombre);
    //     $producto->save();
    //     return redirect('/productos');

    // }
    // public function update(Request $request,$id){

    //     $producto = Producto::findOrFail($id);
    
    //     $foto_anterior     = $producto->urlfoto;


    //     if($request->hasFile('urlfoto')){

    //         $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
    //         if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

        
    //         $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
    //         Image::make($imagen->getRealPath())
            
    //         ->save( public_path('/img/producto/'.$nuevonombre));

    //         $producto->urlfoto = $nuevonombre;
    //     }
    //     $producto->slug    =   Str::slug($request->nombre);
    //     $producto->save();
    //     return redirect('/producto');
    // }

    public function edit($id){ 
        $producto = Productos::findOrFail($id);
         return view('productos.edit',compact('producto'));
     }

    
    // public function destroy($id){
    //     $producto = Producto::findOrFail($id);
    //     if(file_exists($borrar)){ unlink(realpath($borrar)); }

    //     $producto->delete();

    //     return redirect('/admin/producto');
    // }
}






// use Illuminate\Http\Request;

// class ProductosController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         return view('productos.index');
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
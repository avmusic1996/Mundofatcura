<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Productos;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;
use Session;

class ProductosController extends Controller
{
    
    function fetch_image(Request $request)
    {
    $folder = $request->get('folder');
    $imagen1 = DB::table('productos')->where('folder',$folder)->value('imagenuna');
  
    $images = \File::allFiles(public_path('productos/' . $folder));
    $output = '<div class="container"><div class="row">';
    
    
    $folder ='productos/' . $folder . '/';
    // $imagen1 = DB::table('inmuebles')->select('imagenuna')->where('folder', '=', $folder)->first();
    $estilo = '';
    $btn = '';
    $btn2 = '';
    foreach($images as $image)
    {
    
    $fijarimagen = "'".$image->getFilename()."'";
    if ($imagen1 == $image->getFilename()) {
        $estilo = 'filter: blur(1px); border: 3px solid #fda30e;';
        $btn = 'display:none;';
    }
   
    $output .= '<div class="col-md-3 mb-3">
                <div class="row d-flex justify-content-center">
                <div class="col-md-12 text-center">
                <img src="'.asset($folder . $image->getFilename()).'" class="img-thumbnail" style="margin:8px; margin-bottom: 3px; max-width: 380px!important; max-height: 200px!important; width: 100%; height: 100%;'.$estilo.'"/>
                </div>
                <div class="col-md-5 col-sm-12 mt-4">
                <button type="button" class="btn btn-danger remove_image" id="'.$image->getFilename().'">Eliminar foto</button>
                </div>
                <div class="col-md-3 col-sm-12 mt-4">
                <button onclick="fijar_imagen('.$fijarimagen.');" type="button" class="btn btn-primary set_image" id="'.$image->getFilename().'" style="'.$btn.'">Fijar </button>
                </div>
                
                </div>

            </div>';
     $estilo = '';
     $btn = '';
     $btn2 = '';
        }

   
     $output .= '</div></div>';
     echo $output;
     
    }
    public function index(){
        $productos = Productos::all();
        return view('productos.index',compact('productos'));
     }
    public function create(){
        $folder = Str::random(15);  
        return view ('productos.create', ['folder' => $folder]);
  
     }
     public function store(Request $request)
     {
        $request->validate([
            'nombrepro' => 'required',
            'categoria_id' => 'required',
            'stockpro' => 'required',
            'marcapro' => 'required',
            'codigopro' => 'required',
            'modelopro' => 'required',
            'codigoprosku' => 'required',
            'iva' => 'required',
            'valorunidad' => 'required',
        ]);
        
        Productos::create($request->all());
        return redirect()->route('productos.index')->with('success', 'producto registrado correctamente');

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
    public function update(Request $request,$id){

        $producto = Productos::find($id);
        $producto->nombrepro=$request->input('nombrepro');
        $producto->categoria_id=$request->input('categoria_id');
        $producto->stockpro=$request->input('stockpro');
        $producto->marcapro=$request->input('marcapro');
        $producto->codigopro=$request->input('codigopro');
        $producto->modelopro=$request->input('modelopro');
        $producto->codigoprosku=$request->input('codigoprosku');
        $producto->iva=$request->input('iva');
        $producto->valorunidad=$request->input('valorunidad');
        $producto->save();
        return redirect()->route('productos.index')->with('success', 'Usuario actualizado correctamente');
        // $producto = Producto::findOrFail($id);
    
        // $foto_anterior     = $producto->urlfoto;


        // if($request->hasFile('urlfoto')){

        //     $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
        //     if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

        
        //     $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
        //     Image::make($imagen->getRealPath())
            
        //     ->save( public_path('/img/producto/'.$nuevonombre));

        //     $producto->urlfoto = $nuevonombre;
        // }
        // $producto->slug    =   Str::slug($request->nombre);
        // $producto->save();
        // return redirect('/producto');
    }


    public function edit($id){ 
        $producto = Productos::findOrFail($id);
         return view('productos.edit',compact('producto'));
     }

    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);
         $producto->delete();
         return back()->with('succes', 'El producto se ha eliminado correctamente');
    }
    public function upload_image(Request $request)
    {
        $image = $request->file('file');

        $folder = $request->input('folder');

        $path = "productos";

        
        $pathimage = $path . $folder;

        $imageName = time().'.'.$image->extension();

        $image->move(public_path('productos/' . $folder),$imageName);

        return response()->json(['success'=>$imageName]);
       
    }
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
    
// }
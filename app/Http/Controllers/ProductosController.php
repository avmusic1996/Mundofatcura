<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\Productos;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;
use Session;

class ProductosController extends Controller
{
    public function upload_image(Request $request)
    {
        $image = $request->file('file');

        $folder = $request->input('folder');

        $path = "img-productos";

        
        $pathimage = $path . $folder;

        $imageName = time().'.'.$image->extension();

        $image->move(public_path('img-productos/' . $folder),$imageName);

        return response()->json(['success'=>$imageName]);
       
    }

    function fetch_image(Request $request)
    {
    $folder = $request->get('folder');
    $imagen1 = DB::table('productos')->where('folder',$folder)->value('imagenuna');
  
    $images = \File::allFiles(public_path('img-productos/' . $folder));
    $output = '<div class="container"><div class="row">';
    
    
    $folder ='img-productos/' . $folder . '/';
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
    
    // function fetch_image_show(Request $request)
    // {
    // $folder = $request->get('folder');
    // $images = \File::allFiles(public_path('img-productos/' . $folder));

    // $contar = 1;
    // $output = '';
    // $folder ='img-productos/' . $folder . '/';
    // foreach($images as $image)
    // {
    
    // $output .= '<div class="slide" style=" z-index: 1;position: absolute;width: 100%;
    // clip-path: circle(0% at 0 50%);">
    //             <img src="'.asset($folder . $image->getFilename()).'" style="width: 100%;" id="'.$contar.'"/></div>';
    
    //             $contar++;
    // }
    // $output .= '';
 
    //  echo $output;
     
    // }


    function fetch_image_show(Request $request)
    {
    $folder = $request->get('folder');
    $images = \File::allFiles(public_path('img-productos/' . $folder));

    $contar = 1;
    $output = '<div col-md-5 col-sm-12 p-2 slidercontent" id="uploadedimageshow"><ul id="sb-slider" class="sb-slider">';
    $folder ='img-productos/' . $folder . '/';
    foreach($images as $image)
    {
    
    $output .= '<li>
                <img src="'.asset($folder . $image->getFilename()).'" class="img-thumbnail" style="max-width: 430px; width:100%; max-height:300px; height:100%;" alt="image1" id="'.$contar.'"/>
                </li>';
                $contar++;
    }
    $output .= '</ul>
                <div id="nav-arrows" class="nav-arrows">
                    <a href="#">Next</a>
                    <a href="#">Previous</a>
                </div>
                <div id="nav-dots" class="nav-dots">
                            <span class="nav-dot-current"></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                </div></div>'; 
     echo $output;
     
    }

    function delete_image(Request $request)
    {
        $folder = $request->get('folder');
        $folder ='img-productos' . $folder . '/';
     if($request->get('name'))
     {
        
      \File::delete(public_path($folder . $request->get('name')));
     }
    }
    public function index(){
        $productos = Productos::all();
        return view('post.index',compact('productos'));
     }
     
    public function create(Request $request){
        $folder = Str::random(15);
        $folderx ="img-productos/";
        $path = $folderx . $folder;

        $ruta= public_path($path);
        if(!File::isDirectory($ruta))
        {
        File::makeDirectory($ruta, 0777, true, true);
        }

        $request = ucfirst($request);

        return view ('post.create', ['folder' => $folder]);
     }

     public function store(Request $request) {
        Productos::create($request->all());
        return redirect()->route('post.index')->with('success', 'producto registrado correctamente');
      }
     public function newproduct(Request $request)
     {
        $request->validate([
            'nombrepro' => 'required',
            'categoria_id' => 'required',
            'stockpro' => 'required',
            'folder' => 'required',
            'marcapro' => 'required',
            'codigopro' => 'required',
            'modelopro' => 'required',
            'codigoprosku' => 'required',
            'iva' => 'required',
            'valorunidad' => 'required',
            'imagenuna' => 'required',
        ]);
        
        Productos::create($request->all());
        return redirect()->route('post.index')->with('success', 'producto registrado correctamente');

     }
     public function show($id)
     {

        $producto = Productos::findOrFail($id);
        //   dd($user);
         return view('post.show', compact('producto'));
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
        return redirect()->route('post.index')->with('success', 'Usuario actualizado correctamente');
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
         return view('post.edit',compact('producto'));
     }

    public function destroy($id)
    {
        $producto = Productos::findOrFail($id);
         $producto->delete();
         return back()->with('succes', 'El producto se ha eliminado correctamente');
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
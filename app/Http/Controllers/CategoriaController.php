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
         
         return redirect()->route('categoria.index')->with('success', 'Su categoria fue creada correctamente');

     }

     public function storedos(Request $request){
        Categoria::create($request->all());         
         return redirect()->route('post.create')->with('success', 'Su nueva CATEGORIA fue creada correctamente');

     }
    //  public function byconteo(request $request)
    // {
    //     $stock = $request->get('stockpro');
    //     $low = 5;
    //     $lowmedium = 15;
    //     $medium = 25;
    //     $mediumfull = 33;
    //     $full = 40;
    //     $consulta = DB::table('productos as producto')
    //     ->select('producto.stockpro')
    //     ->get();
    //     $etiqueta = '<a>';

    //         foreach ($consulta as $producto) {
    //             $resul = $producto->stockpro;
    //             if ($resul <= $low) {
    //                 $resul1 = '<div style="display:flex; justify-content: center; align-items:center;width:44px; height:30px; background:red; border-radius:50px; color:white;"><label style="position:relative;top:4px;">'.$producto->stockpro.'</label></div>';
    //             }elseif ($resul <= $lowmedium) {
    //                 $resul1 = '<div style="display:flex; justify-content: center; align-items:center;width:30px; height:30px; background:#FF7400; border-radius:50px; color:white;"><label>'.$producto->stockpro.'</label></div>';
    //             }
    //             elseif ($resul <= $medium) {
    //                 $resul1 = '<div style="display:flex; justify-content: center; align-items:center;width:30px; height:30px; background:#FFE800; border-radius:50px; color:white;"><label>'.$producto->stockpro.'</label></div>';
    //             }
    //             elseif ($resul <= $mediumfull) {
    //                 $resul1 = '<div style="display:flex; justify-content: center; align-items:center;width:30px; height:30px; background:#CDFF00; border-radius:50px; color:white;"><label>'.$producto->stockpro.'</label></div>';
    //             }
    //             elseif ($resul <= $full) {
    //                 $resul1 = '<div style="display:flex; justify-content: center; align-items:center;width:30px; height:30px; background:#2FDC00; border-radius:50px; color:white;"><label>'.$producto->stockpro.'</label></div';
    //             }
    //             $etiqueta = $resul1.'</a>';
    //             return ($etiqueta);
                
                                
    //         }
            
    // }


     public function bycategorias(request $request){
        $id = $request->get('id');

         $consulta = DB::table('categorias as categoria')
             ->select('categoria.id','categoria.titulo')
             ->where('categoria.idusuario', '=', $id)
             ->get();
             $res = '<select style="   border-radius: 5px 5px 5px 5px;
             transition: 0.2s linear;
             border: 1px solid #797373;
             background: transparent; height: 35px; padding-left: 14px;color:#5E6472; width:100%;" name="categoria_id" class="form-input" id="cateogira_id" required>';
             foreach ($consulta as $categoria) {

                $res1 = '<option value="'.$categoria->titulo.'">'.$categoria->titulo.'</option>';
                $res = $res.$res1;
            }
            $res = $res.'</select>';
             return ($res);
    }

    


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

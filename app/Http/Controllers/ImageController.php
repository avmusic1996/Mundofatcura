<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use App\Models\productos;
use Illuminate\Support\Facades\DB;
class ImageController extends Controller


{


    public function index()
    {
        $producto = Productos::all();
        return view('productos.create')->with('cliente',$productos);
    }
    //  @return \Illuminate\Http\Response
  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upload_image(Request $request)
    {
        $image = $request->file('file');

        $folder = $request->input('folder');

        $path = "imagen-producto";

        
        $pathimage = $path . $folder;

        $imageName = time().'.'.$image->extension();

        $image->move(public_path('imagen-producto/' . $folder),$imageName);

        return response()->json(['success'=>$imageName]);
       
    }
    function fetch_image(Request $request)
    {
    $folder = $request->get('folder');
    $imagen1 = DB::table('inmuebles')->where('folder',$folder)->value('imagenuna');
    $imagen2 = DB::table('inmuebles')->where('folder',$folder)->value('imagendos');
    $images = \File::allFiles(public_path('imagenes-inmueble/' . $folder));
    $output = '<div class="container"><div class="row">';
    
    
    $folder ='imagen-producto/' . $folder . '/';
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
    if ($imagen2 == $image->getFilename()) {
        $estilo = 'filter: blur(1px); border: 3px solid #fda30e;';
        $btn2 = 'display:none;';
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
                <button onclick="fijar_imagen('.$fijarimagen.');" type="button" class="btn btn-primary set_image" id="'.$image->getFilename().'" style="'.$btn.'">Fijar 1</button>
                </div>
                <div class="col-md-3 col-sm-12 mt-4">
                <button onclick="fijar_imagen2('.$fijarimagen.');" type="button" class="btn btn-primary set_image" id="'.$image->getFilename().'" style="'.$btn2.'">Fijar 2</button>
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
    function delete_image(Request $request)
    {
        $folder = $request->get('folder');
        $folder ='imagen-producto/' . $folder . '/';
     if($request->get('name'))
     {
        
      \File::delete(public_path($folder . $request->get('name')));
     }
    }


    function set_image(Request $request)
    {
        $folder = $request->get('folder');
        $nombreimagen = $request->get('nombreimagen');
        inmuebles::where('folder', $folder)
          ->update(['imagenuna' => $nombreimagen]);
    }

    function set_image2(Request $request)
    {
        $folder = $request->get('folder');
        $nombreimagen = $request->get('nombreimagen');
        inmuebles::where('folder', $folder)
          ->update(['imagendos' => $nombreimagen]);
    }



    function fetch_image_show(Request $request)
    {
    $folder = $request->get('folder');
    $images = \File::allFiles(public_path('imagenes-inmueble/' . $folder));

    $contar = 1;
    $output = '<div id="wowslider-container1" style="width: 100%;"><div class="ws_images" id="uploaded_image"><ul>';
    $folder ='imagenes-inmueble/' . $folder . '/';
    foreach($images as $image)
    {
    
    $output .= '<li>
                <img src="'.asset($folder . $image->getFilename()).'" style="max-height: 450px!important; width: 100%;" height: 300px!important; class="img-thumbnail" id="wows1_'.$contar.'"/></li>';
    
                $contar++;
    }
    $output .= '</ul></div><div class="ws_bullets">';
                foreach($images as $image)
                    {
                    
                    $output .= '<a href="#" title="01 (1)"><span><img src="'.asset($folder . $image->getFilename()).'" style="width:100px; height: 80px;" class="img-thumbnail" alt="01 (1)"/>'.$contar.'</span></a>';
                    
                                $contar++;
                    }
    $output .= '</div><div class="ws_shadow"></div></div>
    <script type="text/javascript" src="../assets/slider/js/wowslider.js"></script>
    <script type="text/javascript" src="../assets/slider/js/script.js"></script>'; 
     echo $output;
     
    }



    function fetch_image_modal(Request $request)
    {
    $folder = $request->get('folder');
    $images = \File::allFiles(public_path('imagenes-inmueble/' . $folder));

    $contar = 1;
    $output = '';
    $folder ='imagenes-inmueble/' . $folder . '/';
    foreach($images as $image)
    {
    
    $output .= '
                <img src="'.asset($folder . $image->getFilename()).'" style="max-height: 600px!important; width: 100%;" height: 300px!important;" class="img-thumbnail" id="'.$contar.'"/>';
                $contar++;
    }
    $output .= '';
     echo $output;
     
    }
    // <img  class="img-thumbnail" style="max-width: 350px!important; max-height: 200px!important; width: 100%; height: 100%;"/>


}
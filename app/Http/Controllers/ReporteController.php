<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class ReporteController extends Controller
{
    //

    public function enviarReporte(Request $request){
              
        // return $request;
        // try {
            // Validar la solicitud y guardar el evento en la base de datos
            $request->validate([
                'direccion' => 'required|string',
                'imagen' => 'required|image|mimes:jpg,jpeg,png',
                'descripcion' => 'required|string',
            ],
        ['required' => 'El campo :attribute es obligatorio escribirlo.',
          'image'=>'Es obligatorio subir una imagen. ']);
        
            // Subir la imagen al servidor y obtener su nombre
            $imagen = $request->file('imagen');
        
            if ($imagen) {
                // Almacenar la imagen en el directorio storage
                $imagenNombre = $imagen->store('public/reportes');
        
                // Actualizar la ruta para almacenar en la base de datos
                $imagenRuta = Storage::url($imagenNombre);
        
                $reporte = new Reporte();
                $reporte->user_id = auth()->user()->id;
                $reporte->direccion = $request->direccion;
                $reporte->imagen = $imagenRuta;
                $reporte->descripcion = $request->descripcion;
                
                $reporte->save();

                  // Devolver una respuesta JSON de éxito
        return response()->json([
            'success' => 'Reporte guardado correctamente, gracias por reportar.'
        ]);
            } else {
                throw new \Exception('No se ha proporcionado una imagen válida.');
            }
        // } catch (\Exception $e) {
        //     \Log::debug($e);
        //     // Manejar la excepción
        //     return back()->with('error', 'Error al procesar el reporte: ' . $e->getMessage());
        // }
       

       
}
public function misReportes(){

    $user = Auth::user();
  $reporte = $user->reportes;
   return view('home', ['reporte' => $reporte]);           
}

public function editarReporte($id)
{
    // Usar findOrFail en lugar de find para manejar automáticamente la excepción si no se encuentra el reporte
    $datoReporte = Reporte::find($id);

    // Utilizar un nombre de variable más descriptivo para pasar a la vista
    return view('auth.editar', compact('datoReporte'));
}



public function actualizarReporte($id, Request $request)
{

    try {
        // Validar la solicitud
        $request->validate([
            'direccion' => 'required|string',
            'imagen' => 'required|image|mimes:jpg,jpeg,png',
            'descripcion' => 'required|string',
        ], [
            'required' => 'El campo :attribute es obligatorio.',
            'image' => 'Es obligatorio subir una imagen.',
        ]);

        // Obtener el modelo por ID
        $reporte = Reporte::findOrFail($id);

        // Procesar la imagen si se proporciona
        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            
            // Almacenar la imagen en el directorio storage
            $imagenNombre = $imagen->store('public/reportes');
    
            // Actualizar la ruta para almacenar en la base de datos
            $imagenRuta = Storage::url($imagenNombre);

            // Actualizar el modelo con los datos de la solicitud, incluyendo la nueva ruta de la imagen
            $reporte->update([
                'direccion' => $request->input('direccion'),
                'imagen' => $imagenRuta,
                'descripcion' => $request->input('descripcion'),
            ]);
        }
        session()->flash('reporte-actualizado', 'Su reporte fue actualizado.');
        // Redirigir a la página anterior con mensaje de éxito
        return redirect()->route('home')->with('Datos actualizados.');


    } catch (ValidationException $e) {
        // Manejar errores de validación
        //return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Exception $e) {
        // Manejar otros errores
        //return response()->json(['error', 'No se pudo actualizar el reporte. Error: '] . $e->getMessage());
    }
}

public function eliminarReporte($id){
    try {
    
        $eliminar = Reporte::find($id);
        $eliminar->delete();

        return response()->json(['success', 'El reporte ha sido eliminado correctamente.']);
    } catch (\Exception $e) {
        return response()->json(['error', "No se pudo eliminar el reporte: {$e->getMessage()}"] );
    }
}

public function reportesDeUsuarios(){
    // Cargar informes con usuarios relacionados usando eager loading
    $reportes = Reporte::with('user')->orderByDesc('created_at')->paginate(3);


    return view('welcome', ['reportes' => $reportes]);
}



}


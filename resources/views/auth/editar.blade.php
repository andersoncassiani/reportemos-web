@extends('layouts.app')
<title>Editar reporte</title>
<link rel="icon" href="{{ asset('img/logo-de-reciclar.png') }}" type="img/jpg"> <!-- Para ponerle icono a la Web -->
@section('content')

<div class="container">


    <h4 class="fs-3 fw-bold">Editar</h4>

    <form action="{{route('actualizar', $datoReporte->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="border border-success w-100 border-3 rounded p-4">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mt-1 text-success">Direccion</label>
                <input type="text" class="form-control" id="exampleFormControlInput1"
                    value="{{ $datoReporte->direccion }}" name="direccion" id="direccion" required>
                <span id="direccionError" class="text-danger"></span>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label mt-3 text-success">Agregar imagen del residuo</label>
                <input type="file" id="imagen" name="imagen" class="form-control mt-1 text-success" required>

                @if($datoReporte->imagen)
                <img src="{{ asset($datoReporte->imagen) }}" class="mt-1" alt="Imagen actual" width="100px">
                @endif

                <span id="imagenError" class="text-danger"></span>
            </div>



            <div class="mb-3">
                <label for="descripcion" class="form-label mt-1 text-success">Descripción</label>
                <textarea type="text" id="descripcion" name="descripcion"
                    class="form-control" required>{{$datoReporte->descripcion}}</textarea>
                <span id="descripcionnError" class="text-danger"></span>
            </div>

        </div>


        <div class="mb-3 text-center">
            <button class="btn btn-success fs-5 mt-2 fw-bold w-50" type="submit">Actualizar</button>
        </div>
    </form>


</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
</script>



@endsection
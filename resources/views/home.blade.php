@extends('layouts.app')

@section('content')


<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if(session()->has('error'))
                <div class="card-header bg-danger fs-4 fw-bold text-light">Reportes</div>
                {{ session('error') }}
                </div>
                @endif
                <div class="card-header bg-success fs-4 fw-bold text-light">Reportes</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Button trigger modal -->
<button type="button" class="btn btn-success text-white text-bold shadow " data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="bi bi-plus "></i> Agregar nuevo reporte
</button>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="formReporte" action="{{ route('reportar') }}" enctype="multipart/form-data">
        @csrf
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-bold" id="exampleModalLabel">Nuevo reporte</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3">
                        <label class="form-label text-success">Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion"
                            placeholder="Donde se encuntra el residuo.">
                        <span id="direccionError" class="text-danger"></span>


                        <label class="form-label mt-3 text-success">Agreagar imagen del residuo</label>
                        <input type="file" class="form-control" name="imagen" id="imagen">
                        <span id="imagenError" class="text-danger"></span>
                        
                    </div>


                    <div class="row">

                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-lg-12">
                            <div>
                                <label class="form-label text-success">Descripcion del lugar</label>
                                <textarea class="form-control" rows="3" name="descripcion" id="descripcion"
                                    placeholder="Describe de forma detalla el lugar donde se encuntra el residuo."></textarea>
                        <span id="descripcionError" class="text-danger"></span>

                            </div>
                        </div>
                    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn  btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-success" name="btnRegistrar">Reportar</button>
      </div>
    </div>
    </form>
  </div>
</div>
     
                </div>
            </div>

            <h5 class="mt-4">Tu listado de reportes</h5>
            <div id="mostrarReportes" class="card p-4 mb-2 bg-white shadow rounded text-dark">
          <div class="row align-items-center">

        <!-- Logo Section -->
        @if(count($reporte) > 0)
    @foreach($reporte as $repo)
        <div class="col-md-3 col-sm-6 col-lg-3 mb-2">
            <img class="rounded" width="90px" height="105px" src="{{ asset('storage/reportes') . '/' . $repo->imagen }}" alt="Imagen Reporte">
        </div>

        <div class="col-md-6 col-sm-6 col-lg-6">
            <h5 class="text-success">{{$repo->direccion}}</h5>
            <p class="text-dark">
                {{$repo->descripcion}}
            </p>
        </div>


        <div class="col-md-3 col-sm-6 col-lg-3 d-flex justify-content-end align-items-center">
            <a href="{{route('editar', $repo->id)}}" class="text-dark mx-2">
                <i class="bi bi-pencil-square fs-2"></i> 
            </a>
            
            <form id="eliminarReporte" action="{{route('eliminar', $repo->id)}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('DELETE')
            <button type="button" id="form-submit-form" class="text-danger mx-2 btn btn-sm">
                <i class="bi bi-trash3-fill fs-2"></i> 
            </button>
            </form>
        </div>
    @endforeach
@else
    <p class="fs-3 opacity-25 text-success text-center">Usted aun no ha hecho ningun reporte.</p>
@endif
        <!-- Actions Section -->
       
    </div>
</div>
             </div>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
         $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        } 
    });
    </script>

<script src="{{ asset('js/crearReporte.js') }}"></script>
<script src="{{ asset('js/eliminarReporte.js') }}"></script>

<!--Libreria SweeAlert2-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if(session()->has('reporte-actualizado'))
<script>
    swal("{{session()->get('reporte-actualizado')}}", "Hemos actualizado tu reporte exitosamente");
</script>
@endif
</div>
@endsection

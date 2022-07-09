@extends('adminlte::page')

@section('title', 'Edidicios')

@section('content')
    <div class="container-md p-5 my-5 border">
        <form action="/edificios/creado" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <h3 class="form-label">Creación de Edificios</h3>
                <br>
            </div>
            @csrf
            <div class="mb-3">
                <label class="form-label">Edificio</label>
                <input type="text" name="desc_edificio" class="form-control form-control-sm" placeholder="Nombre Edificio">
                <input type="text" name="usuario_creacion" class="form-control form-control-sm" value="{{  Auth::user()->name }}" hidden>
                <input type="text" name="usuario_modificacion" class="form-control form-control-sm" value="{{  Auth::user()->name }}" hidden>
            </div>
            <div class="mb-3 form-check">
                <input type="hidden" name="activo" class="form-check-input" value="0" checked>
                <input type="checkbox" name="activo" class="form-check-input" value="1" checked>
                <label class="form-check-label" for="exampleCheck1">Edificio Activo</label>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>




@stop


@section('css')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Styles -->
    @livewireStyles

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        console.log('Hi123!');
    </script>
@stop

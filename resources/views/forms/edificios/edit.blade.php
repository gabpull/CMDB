@extends('adminlte::page')

@section('title', 'Editar Edificio')

@section('content')
    <div class="container-md p-5 my-5 border">
        <form action="/edificios/{{ $edificio->id }}" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <h3 class="form-label">Modificación de Edificios</h3>
                <br>
            </div>
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Edificio</label>
                <input type="text" name="desc_edificio" class="form-control form-control-sm" placeholder="Nombre Edificio" value="{{ $edificio->desc_edificio }}">
                @error('desc_edificio')
                    <br>
                    <div class="alert alert-danger" role="alert">{{ $message  }}</div>
                @enderror
                <input type="text" name="usuario_modificacion" class="form-control form-control-sm" value="{{  Auth::user()->id }}" hidden>
            </div>
            <div class="mb-3 form-check">
                <input type="hidden" name="activo" class="form-check-input" value="0" @if ($edificio->activo == 1 ) checked @else @endif>
                <input type="checkbox" name="activo" class="form-check-input" value="1" @if ($edificio->activo == 1 ) checked @else @endif >
                <label class="form-check-label" for="exampleCheck1">Edificio Activo</label>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
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

@extends('adminlte::page')

@section('title', 'Editar Marca')

@section('content')
    <div class="container-md p-5 my-5 border">
        <form action="/marcas/{{ $marca->id }}" enctype="multipart/form-data" method="POST">
            <div class="mb-3">
                <h3 class="form-label">Modificación de Marcas</h3>
                <br>
            </div>
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input type="text" name="desc_marca" class="form-control form-control-sm" placeholder="Nombre Marca" value="{{ $marca->desc_marca }}">
                @error('desc_marca')
                    <br>
                    <div class="alert alert-danger" role="alert">{{ $message  }}</div>
                @enderror
                <input type="text" name="usuario_modificacion" class="form-control form-control-sm" value="{{  Auth::user()->id }}" hidden>
            </div>
{{--             <div class="mb-3 form-check">
                <input type="hidden" name="activo" class="form-check-input" value="0" @if ($marca->activo == 1 ) checked @else @endif>
                <input type="checkbox" name="activo" class="form-check-input" value="1" @if ($marca->activo == 1 ) checked @else @endif >
                <label class="form-check-label" for="exampleCheck1">Marca Activo</label>
            </div> --}}
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

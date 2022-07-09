@extends('adminlte::page')

@section('title', 'Edidicios')

@section('content')

    <div>
        <a href="/edificios/crear" class="btn btn-primary ">
            {{ __('Add new') }}
        </a>
    </div>
    <hr>

    <table class="table align-middle mb-1 bg-white table-responsive-sm table-hover table-condensed">
        <thead class="bg-light">
            <tr>
                <th>Nombre</th>
                <th>Estado</th>
                <th>Usuario Ultima Edisión</th>
                <th>Creación</th>
                <th>Fecha Creación</th>
                <th>Fecha Ultima Edición</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($edificios as $edificio)
                <tr>
                    <td class="align-middle"> {{ $edificio->desc_edificio }} </td>
                    <td class="align-middle"><span
                            class="badge @if ($edificio->activo == 1) badge-success @else badge-info @endif rounded-pill">
                            @if ($edificio->activo == 1)
                                {{ 'Activo' }}
                            @else
                                {{ 'Inactivo' }}
                            @endif
                        </span> </td>
                    <td class="align-middle"> {{ $edificio->usuario_modificacion }} </td>
                    <td class="align-middle"> {{ $edificio->usuario_creacion }} </td>
                    <td class="align-middle text-wrap">{{ $edificio->created_at }}</td>
                    <td class="align-middle">{{ $edificio->updated_at }}</td>
                    <td class="align-middle">
                        <divclass="flex">
                            <a href="/edificios/editar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    width="15" height="15">
                                    <path fill-rule="evenodd"
                                        d="M17.263 2.177a1.75 1.75 0 012.474 0l2.586 2.586a1.75 1.75 0 010 2.474L19.53 10.03l-.012.013L8.69 20.378a1.75 1.75 0 01-.699.409l-5.523 1.68a.75.75 0 01-.935-.935l1.673-5.5a1.75 1.75 0 01.466-.756L14.476 4.963l2.787-2.786zm-2.275 4.371l-10.28 9.813a.25.25 0 00-.067.108l-1.264 4.154 4.177-1.271a.25.25 0 00.1-.059l10.273-9.806-2.94-2.939zM19 8.44l2.263-2.262a.25.25 0 000-.354l-2.586-2.586a.25.25 0 00-.354 0L16.061 5.5 19 8.44z">
                                    </path>
                                </svg></a>            
                            <a href="/edificios/eliminar" class="btn btn-danger btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="15" height="15">
                                    <path fill-rule="evenodd"
                                        d="M16 1.75V3h5.25a.75.75 0 010 1.5H2.75a.75.75 0 010-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75zm-6.5 0a.25.25 0 01.25-.25h4.5a.25.25 0 01.25.25V3h-5V1.75z">
                                    </path>
                                    <path
                                        d="M4.997 6.178a.75.75 0 10-1.493.144L4.916 20.92a1.75 1.75 0 001.742 1.58h10.684a1.75 1.75 0 001.742-1.581l1.413-14.597a.75.75 0 00-1.494-.144l-1.412 14.596a.25.25 0 01-.249.226H6.658a.25.25 0 01-.249-.226L4.997 6.178z">
                                    </path>
                                    <path
                                        d="M9.206 7.501a.75.75 0 01.793.705l.5 8.5A.75.75 0 119 16.794l-.5-8.5a.75.75 0 01.705-.793zm6.293.793A.75.75 0 1014 8.206l-.5 8.5a.75.75 0 001.498.088l.5-8.5z">
                                    </path>
                                </svg>
                            </a>
                            </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>





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

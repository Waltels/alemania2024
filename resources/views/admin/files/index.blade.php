@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Arvivos recividos de las y los maestros</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <label class="text-center">ARCHIVOS RECIBIDOS</label>
            <div class="table-responsive text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Maestra/o</th>
                            <th>name</th>
                            <th>description</th>
                            <th>bajra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td>{{$file->id}}</td>
                            <td>{{$file->user->name}}</td>
                            <td>{{$file->name}}</td>
                            <td>{{$file->description}}</td>
                            <td>
                                <button class="btn btn-btn btn-success">Descargar</button>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
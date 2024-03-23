@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Documentos</h1>
@stop

@section('content')
    <div class="card">
        <div class='card-header'>
            <a class="btn btn-success"  href="{{route('admin.documentos.create')}}">Insertar nuevo documento</a>
        </div>


        <div class="car-body">
            <table class="table table-striped">
                
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach ($documentos as $documento)
                        <tr>
                            <td>{{$documento->id}}</td>
                            <td>{{$documento->name}}</td>
                            <td>{{$documento->description}}</td>
                            <td width='10px'>
                                <a  class= 'btn btn-secondary' href="{{route('admin.documentos.edit', $documento)}}">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.documentos.destroy', $documento)}}" method="POST">
                                    @method ('delete')
                                    @csrf
                                    <button class= 'btn btn-danger' type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                     @endforeach
                    </tbody>
            </table>
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
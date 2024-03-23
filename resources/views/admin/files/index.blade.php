@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <p>CONTROL DE ARCHIVOS RECIVIDOS POR LA DIRECCION DE LA UNIDAD EDUCATIVA ALEMANIA</p>
@stop

@section('content')
    <div class="card">
        <label class="ml-4 mt-2 text-lg">ARCHIVOS RECIBIDOS</label>
        <div class="card-header">
            <div class="form control">
                <input wire:keydown='limpiar_page' wire:model='searh' class="form-control w-100" placeholder="Ecriba un nombre">
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nº de Documento</th>
                            <th>Maestra/o</th>
                            <th>Description del Documento</th>
                            <th>Ver Documento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($files as $file)
                        <tr>
                            <td>{{$file->id}}</td>
                            <td>{{$file->user->name}}</td>
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
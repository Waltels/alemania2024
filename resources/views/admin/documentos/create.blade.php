@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR NUEVO DOCUMENTO</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!!Form::open(['route'=>'admin.documentos.store'])!!}

        @include('admin.roles.partials.formdoc')

        {!! Form::submit('Crear documento', ['class'=> 'btn btn-success mt-2']) !!}
        {!!Form::close()!!}

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
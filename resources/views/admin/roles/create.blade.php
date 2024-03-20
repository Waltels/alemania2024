@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>crear nuevo rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!!Form::open(['route'=>'admin.roles.store'])!!}
            @include('admin.roles.partials.form')

                {!! Form::submit('Crear Rol', ['class'=> 'btn btn-primary mt-2']) !!}
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
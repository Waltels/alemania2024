@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Escritorio</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!!Form::model($role,['route'=>['admin.roles.update', $role], 'method'=>'put'])!!}
            @include('admin.roles.partials.form')

                {!! Form::submit('Actualizar Rol', ['class'=> 'btn btn-primary mt-2']) !!}
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
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Asignar Rol</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="h5">Nombre:</h1>
            <p class="form-control">{{$user->name}}</p>
            <h1 class="h5">Lista de Roles</h1>
            {!! Form::model($user, ['route'=>['admin.users.update', $user], 'method'=>'put']) !!}
            @foreach ($roles as $role)
           <div>
                <label>
                        {!! Form::checkbox('roles[]', $role->id, null, ['class'=> 'mr-1']) !!}
                        {{$role->name}}   
                </label>
             </div>   
            @endforeach

            {!! Form::submit('Guardar rol', ['class'=> 'btn btn-primary mt.2']) !!}
            {!! Form::close() !!}
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
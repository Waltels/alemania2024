<div class= 'form-group'>
    {!!Form::label('name','Nombre')!!}
    {!!Form::text('name',null, ['class'=> 'form-control is-invalid', 'placeholder'=>'escriba un nombre'])!!}
</div>

<strong>Permisos</strong>

    @foreach($permissions as $permission)
    <div>
    <label>
    {!!Form::checkbox('permissions[]', $permission->id, null,['class'=> 'mr-1'])!!}
    </label>
    {{$permission->name}}
    </div>
   
    @endforeach
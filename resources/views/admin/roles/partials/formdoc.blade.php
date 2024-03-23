<div class= 'form-group'>
    {!!Form::label('name','Nombre')!!}
    {!!Form::text('name',null, ['class'=> 'form-control is-invalid', 'placeholder'=>'escriba un nombre'])!!}
    {!!Form::label('name','Descripcion')!!}
    {!!Form::text('description',null, ['class'=> 'form-control is-invalid', 'placeholder'=>'escriba la descripcion'])!!}
</div>
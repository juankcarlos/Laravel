@extends('vistacuerpo.vpokecuerpo')
@section('contenido')
@if($errors->has())
  <div class="alert-danger">
    @foreach($errors->all('<p>:message</p>') as $error)
       {!!$error!!}
    @endforeach
  </div>
@endif
<div class="container">
  <h2>Registro</h2>
  {!!Form::model($poke,['route'=>['poke.update',$poke->id],'method'=>'PUT'])!!}
    <div class="form-group">
      {!!Form::label('Nombre',null,['class'=>'col-md-2'])!!}
      <div class="col-sm-10">
       {!!Form::text('nombre',null,['class'=>'form-control','Placeholder'=>'Nombre'])!!}
      </div>
    </div>
    <div class="form-group">
      {!!Form::label('Tipo',null,['class'=>'col-md-2'])!!}
      <div class="col-sm-10">
       {!!Form::text('tipo',null,['class'=>'form-control','Placeholder'=>'Tipo'])!!}
      </div>
    </div>
    <div class="form-group">
      {!!Form::label('Naturaleza',null,['class'=>'col-md-2'])!!}
      <div class="col-sm-10">
       {!!Form::text('naturaleza',null,['class'=>'form-control','Placeholder'=>'Naturaleza'])!!}
      </div>
    </div>
    <div class="form-group">
      {!!Form::label('Nivel',null,['class'=>'col-md-2'])!!}
      <div class="col-sm-10">
       {!!Form::text('nivel',null,['class'=>'form-control','Placeholder'=>'Nivel'])!!}
      </div>
    </div>
    
     <div class="form-group ">
  <label for="sel1"  class="col-sm-2">Sexo:</label>
  <div class="col-sm-10">   
  <select class="form-control" name="sel">
    <option value="m">Macho</option>
    <option value="h">Hembra</option>
    </select>
  </div>
</div>
  {!!Form::submit('Registrar',['class'=>'btn-primary'])!!}
    {!!Form::close() !!} 
</div>
@if(Session::has('mensaje'))
<div class="alert alert-success">
        {{ Session::get('mensaje') }}
    </div>
@endif  
@stop 
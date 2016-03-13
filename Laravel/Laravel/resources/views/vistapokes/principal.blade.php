
@extends('vistacuerpo.vpokecuerpo')
@section('contenido')
<div class="container">
<div class="row">
<td>{!!link_to_route('poke.create', $title="crear",$parameters="" ,$attributes=['class'=>'btn btn-primary'])!!}</td>
    <td>
</div>
<div class="row">
<table class="table table-bordered">
 <thead>
      <tr>
        <th>Nombre</th>
        <th>Tipo</th>
        <th>Naturaleza</th>
        <th>Nivel</th>
        <th>Sexo</th>
      </tr>
    </thead>
    @foreach($poke as $r)


    <tr>
    <td>{{$r->nombre}}</td>
    <td>{{$r->tipo}}</td>
    <td>{{$r->naturaleza}}</td>
    <td>{{$r->nivel}}</td>
    <td>{{$r->sexo}}</td>
    <td>{!!link_to_route('poke.edit', $title="editar",$parameters=$r->id ,$attributes=['class'=>'btn btn-primary'])!!}</td>
    <td>
    {!!Form::open(['route'=>['poke.destroy',$r->id],'method'=>'Delete'])!!}
    {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
    {!!Form::close();!!} 
    </td>

    </tr>
    @endforeach
</table>
</div>
</div>

@if(Session::has('eliminar'))
<div class="alert alert-success">
        {{ Session::get('eliminar') }}
    </div>
@endif

</div>
@if(Session::has('mensajeact'))
<div class="alert alert-success">
        {{ Session::get('mensajeact') }}
    </div>
@endif  
@stop

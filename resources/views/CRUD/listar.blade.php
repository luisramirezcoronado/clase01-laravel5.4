@extends('plantilla')

@section('contenido')

	<div class="row">
		<div class="col-md-12">
			<h3>Lista de alumnos de la UNP</h3>
			<a href="{{url('form_registrar')}}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> registrar</a>
		</div>
	</div>

	<hr>

	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Especialidad</th>
							<th>Ciclo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					@foreach($alumnos as $alumno)
					<tbody>
						<tr>
							<td>{{$alumno->nombres}}</td>
							<td>{{$alumno->apellidos}}</td>
							<td>{{$alumno->especialidad}}</td>
							<td>{{$alumno->ciclo}}</td>
							<td>
								<a href="{{url('form_editar',[$alumno->id])}}" class="btn btn-warning btn-xs pull-left"><span class="glyphicon glyphicon-edit"></span> editar</a>
								<form action="{{url('eliminar',[$alumno->id])}}" method="POST" onclick="return confirm('¿Seguro que quiere eliminar este registro?')">
									<button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> eliminar</button>
								</form>
							</td>
						</tr>
					</tbody>
					@endforeach
				</table>
				{{$alumnos->links()}}
			</div>
		</div>
	</div>

@stop
@extends('plantilla')

@section('contenido')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Registrar alumno</h3>
			</div>
			<div class="panel-body">
				<div class="text-center"><img src="{{asset('imagenes/image.png')}}" alt="" width="100px;"></div>

				<form action="{{url('registrar')}}" method="POST">	
					<div class="form-group"}}>
						<label for="">Nombres</label>
						<input type="text" class="form-control" name="nombres" placeholder="Ingresar nombres completos" value="{{ old('nombres') }}">
						@if($errors->has('nombres'))
							<span class="alert-danger">{{$errors->first('nombres')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="">Apellidos</label>
						<input type="text" class="form-control" name="apellidos" placeholder="Ingresar apellidos completos" value="{{ old('apellidos') }}">
						@if($errors->has('apellidos'))
							<span class="alert-danger">{{$errors->first('apellidos')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="">Especialidad</label>
						<input type="text" class="form-control" name="especialidad" placeholder="Ingresar especialidad" value="{{ old('especialidad') }}">
						@if($errors->has('especialidad'))
							<span class="alert-danger">{{$errors->first('especialidad')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="">Ciclo</label>
						<select id="input" name="ciclo" class="form-control">
							<option value="">-- Select One --</option>
							<option value="I">	I</option>
							<option value="II">	II</option>
							<option value="III">III</option>
							<option value="IV">	IV</option>
							<option value="V">	V</option>
							<option value="VI">	VI</option>
							<option value="VII">VII</option>
							<option value="VIII">VIII</option>
							<option value="IX">   IX</option>
							<option value="X">	X</option>
						</select>
						@if($errors->has('ciclo'))
							<span class="alert-danger">{{$errors->first('ciclo')}}</span>
						@endif
					</div>
					
			
					<div class="form-group">
						<div class="text-center">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> guardar</button>
							<a href="{{url('/')}}" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@stop
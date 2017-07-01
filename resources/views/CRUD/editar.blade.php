@extends('plantilla')

@section('contenido')

	<div class="col-md-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title text-center">Actualizar datos del alumno</h3>
			</div>
			<div class="panel-body">
				<div class="text-center"><img src="{{asset('imagenes/image.png')}}" alt="" width="100px;"></div>

				<form action="{{url('actualizar',[$alumno->id])}}" method="POST">	
					<div class="form-group">
						<label for="">Nombres</label>
						<input type="text" class="form-control" value="{{isset($alumno) ? old('nombres',$alumno->nombres) : old('nombres')}}" name="nombres" placeholder="Ingresar nombres completos">
						@if($errors->has('nombres'))
							<span class="alert-danger">{{$errors->first('nombres')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="">Apellidos</label>
						<input type="text" class="form-control" value="{{isset($alumno) ? old('apellidos',$alumno->apellidos) : old('apellidos')}}" name="apellidos" placeholder="Ingresar apellidos completos">
						@if($errors->has('apellidos'))
							<span class="alert-danger">{{$errors->first('apellidos')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="">Especialidad</label>
						<input type="text" class="form-control" value="{{isset($alumno) ? old('especialidad',$alumno->especialidad) : old('especialidad')}}" name="especialidad" placeholder="">
						@if($errors->has('especialidad'))
							<span class="alert-danger">{{$errors->first('especialidad')}}</span>
						@endif
					</div>

					<div class="form-group">
						<label for="">Ciclo</label>
						<select id="input" name="ciclo" class="form-control">
							<option value="">-- Select One --</option>
							<option {{($alumno->ciclo == 'I'   ? 'selected':null)}} value="I">	 I</option>
							<option {{($alumno->ciclo == 'II'  ? 'selected':null)}} value="II">	 II</option>
							<option {{($alumno->ciclo == 'III' ? 'selected':null)}} value="III"> III</option>
							<option {{($alumno->ciclo == 'IV'  ? 'selected':null)}} value="IV">	 IV</option>
							<option {{($alumno->ciclo == 'V'   ? 'selected':null)}} value="V">	 V</option>
							<option {{($alumno->ciclo == 'VI'  ? 'selected':null)}} value="VI">	 VI</option>
							<option {{($alumno->ciclo == 'VII' ? 'selected':null)}} value="VII"> VII</option>
							<option {{($alumno->ciclo == 'VIII'? 'selected':null)}} value="VIII">VIII</option>
							<option {{($alumno->ciclo == 'IX'  ? 'selected':null)}} value="IX">  IX</option>
							<option {{($alumno->ciclo == 'X'   ? 'selected':null)}} value="X">	 X</option>
						</select>
						@if($errors->has('ciclo'))
							<span class="alert-danger">{{$errors->first('ciclo')}}</span>
						@endif
					</div>
					
			
					<div class="form-group">
						<div class="text-center">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> actualizar</button>
							<a href="{{url('/')}}" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

@stop
@extends('sistema.principal')

@section('contenido')

<div align="center" >
    <form class="formulario" role="form" action="{{route('guardaempleados')}}" method="POST" class="text-center" enctype="multipart/form-data"> 
              {{csrf_field()}}
    <div class="contenedor">
    <h2 class="h4 text-gray-900 mb-2" > REGISTRO USUARIO</h2>

        @if($errors->first('id_empleado'))
        <i> {{ $errors->first('id_empleado') }} </i>
        @endif 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="Clave" name="id_empleado" value="{{$id_emp}}" readonly='readonly'><br>
        </div>         


        @if($errors->first('nombre'))
        <i> {{ $errors->first('nombre') }} </i>
        @endif 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="Nombre" name="nombre" value="{{old('nombre')}}">
        </div>
        @if($errors->first('app'))
        <i> {{ $errors->first('app') }} </i>
        @endif 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="app" name="app" value="{{old('app')}}">
        </div>
        @if($errors->first('apm'))
        <i> {{ $errors->first('apm') }} </i>
        @endif 
        <div class="form-group">
        <input class="form-control form-control-user" type="text" placeholder="apm" name="apm" value="{{old('apm')}}">
        </div>
        

              @if($errors->first('email'))
              <i> {{ $errors->first('email') }} </i>
              @endif 
              <div class="form-group">
              <input class="form-control form-control-user" type="text" placeholder="Usuario" name="email" value="{{old('email')}}">
              </div>

              @if($errors->first('password'))
              <i> {{ $errors->first('password') }} </i>
              @endif 

            <form class="pure-form">
            <fieldset>

                <input type="password" class="form-control form-control-user" placeholder="Password" id="password"  name="password" value="{{old('password')}}"> <br>


                <input type="password" class="form-control form-control-user" placeholder="Confirme Password" id="confirm_password"  name="confirm_password" value="{{old('confirm_password')}}"> <br>

  </fieldset>
</form>
    </div>
          
          
          

  
      <input class="btn btn-primary btn-user btn-block" type = 'submit' value = 'Guardar'>
      <input class="btn btn-google btn-user btn-block" type = 'reset' value = 'Cancelar'>
  </form>
  </div>
</form></div>
@stop
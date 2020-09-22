


 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Detalles reservacion</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>




</head>

<body>
     <div class="container col-md-6 col-md-offset-3 ">
        <div class="panel panel-default">
            <div class="form-group">
                <h2>Ingrese los detalles de habitacion</h2>
                <hr>
            </div>


            
            
            <form action="/reservation" method="POST" role="form" class=" col-lg-4"> 

                {{ csrf_field() }}
                
                <div class="form-group">
                
                 
                 
                <label>Fecha Inicio</label><br>
                
                <!--Mediante PHP está seteado para que solo muestre la fecha a   partir del dia actual-->
                <input type="date" name="startdate" required="true" 
                min=<?php $hoy=date("Y-m-d"); echo $hoy;?> >
                <br><br>
                 
                <label>Fecha Fin</label><br>
                
                <input type="date" name="enddate" required="true"
                min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>
                <br><br>
                <label>Adultos</label><br>
                
                <select name="adult" required="true" required="true">
                  <option value="" selected>Cantidad de adultos</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>

                
                <br><br>
                <label>Niños</label><br>
                
                <select name="child" required="true" required="true">
                  <option value="" selected>Niños acompañantes</option>
                  <option value="0">0</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
                 <br><br>

                  @foreach($usuarios as $usuario)
                            
                <label>ID Usuario</label><br>
                <input type="text" name="usuario_id" autofocus placeholder="id usuario" required="true" value="{!! $usuario->id!!}" readonly="true" />
                <br><br>
                     @endforeach
                
                <label>Habitacion</label><br>

                <!---Desde el UsuarioController se envia la variable
                  cargada con la informacion--->

                  <select class="form-control" name="room_id">
                      @foreach ($types as $type)
                      <option value="{{$type['id']}}">{{$type['type']}}</option>
                      @endforeach                      
  
                  </select> 
                  <br><br>
                  <label class="">Estadía</label> <br>
             
                 <select name="detail" required="true" required="true">
                  <option value="" selected>Tipo de estadia</option>
                  <option value="familiar">Familiar</option>
                  <option value="trabajo">Trabajo</option>
                  
                  
                </select>

                
                 
                </div>
                 

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            
            
        </div>
    </div>


</body>

</html> 

   

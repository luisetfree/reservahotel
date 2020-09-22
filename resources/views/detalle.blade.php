

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title>Resumen reservacion</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body class="bg-light">






    <div class="container col-md-8 col-md-offset-2">
          <h2 align="center">Detalle de reservación</h2><br>
    
        <div class="panel panel-default ">
            <h4 class="">Información personal</h4><hr>
            <div class="panel-heading px-4 ">
                

                


                 @foreach($usuarios as $usuario)
                     <b> <label class="">Nombre:</label>       {!! $usuario->name!!}   {!! $usuario->lastname!!}  <br>
                     <label class="">Código Usuario:</label>     {!! $usuario->id!!} <br>
                      <label class="">Teléfono:</label>     {!! $usuario->phone!!}  <br>
                       <label class="">Correo:</label>     {!! $usuario->email!!}  

                       </b>  

                @endforeach
            </div>

            @if ($reservas->isEmpty())
                <div>No hay datos de reserva para Mostrar</div>
            @else
              
              <h4 class="">Información de reserva</h4> <hr>
              <div class="px-4 " >
              
                        @foreach($reservas as $reserva)
                       <b>  <label class="">Código de reserva</label>: {!! $reserva->id!!} <br> <br>
                    <label class="">Fecha Inicio</label>: {!! $reserva->startdate!!} <br> <br>
                     <label class="">Fecha final</label>: {!! $reserva->enddate!!} <br>     <br> 

                     <label class="">Total de adultos </label>: {!! $reserva->adult!!} <br><br>

                      <label class="">Niños acompañantes: </label> {!! $reserva->child!!}</b> <br>     <br>                          
                    
                        
                       
                    

                        @endforeach


               </div>
                 
            @endif
             
             <div align="center">
            <input  type="button" class="btn btn-secondary" name="imprimir" value="Imprimir" onclick="window.print();"> 

              <input type="submit" class="btn btn-secondary" value="Atrás" 
    onclick="window.location='/admin';" />      

        </div>
        
        </div>
    </div>







</body></html>

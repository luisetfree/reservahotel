

<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    

    <title>Reservaciones activas</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>

  <body class="bg-light">







    <div class="container col-md-8 col-md-offset-2">
    <h3 align="center">Reservaciones activas</h3><br>


    <table data-spy="scroll" class="table table-striped">
    
    <a href="{{ url('/reserva') }}" class="badge badge-secondary">Nueva Reservación</a>
  <thead>
    <tr>
      <th scope="col">Reserva #</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contacto</th>
      <th scope="col">Mail</th>
      <th scope="col">Pais</th>
      <th scope="col">+ Opciones</th>
    </tr>
  </thead>
  <tbody>

  
  @foreach($reservas as $reserva)
  <tr>
            <td>  {!! $reserva->id!!}   </td> 
            <td> {!! $reserva->name!!}  {!! $reserva->lastname!!} </td>
            
            <td>{!! $reserva->phone!!} </td>

              <td>{!! $reserva->email!!} </td>
              <td>{!! $reserva->country!!} </td>
              <td><a href="{{ url('/reserva/ ')}} {!! $reserva->id!!} " class="badge badge-info">Ver</a></td>
              <td> 
                <a href="{{ url('/reserva/destroi/ ')}} {!! $reserva->id!!} " class="badge badge-info">Eliminar</a>
              </td>
  </tr>
   @endforeach
  

 
   

  
  </tbody>
</table>
          
          <!-- area de trjetas -->
<div class="row form">

<div class="card border-primary mb-3 col-sm-6" style="max-width: 18rem;">
  <div class="card-header">Habitaciones Disponibles</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Básica:</h5>
    <h5 class="card-title">Premium:</h5>
    <h5 class="card-title">Ultimate:</h5>
    
    
  </div>
</div>

<div class="card border-primary mb-3 col-sm-6" style="max-width: 18rem;">
  <div class="card-header">Huespedes hoy</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Adultos: 10</h5>
    <h5 class="card-title">Niños: 5</h5>
    
  </div>
</div>
<div class="card border-primary mb-3 col-sm-6" style="max-width: 18rem;">
  <div class="card-header">Generalidades</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

</div>




</div>
          <!-- fin area de tarjetas -->
    
    <div align="center">
            

              <input type="submit" class="btn btn-secondary" value="Home" 
    onclick="window.location='/';" />      

        </div>
        
        </div>
    </div>


    

    






</body>


</html>

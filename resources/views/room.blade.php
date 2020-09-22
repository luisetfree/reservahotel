


 <!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Reservacion de hotel</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
     <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="form-group">
                <h2>Detalles de Habitacion</h2>
            </div>

            <form action="/room" method="POST" role="form" class="col-lg-4"> 

                {{ csrf_field() }}
                
                <div class="form-group ">
                <label>Tipo de Habitacion</label><br>
                
                 <select name="type" class="form-control">
                      @foreach ($types as $type)
                      <option value="{{$type['id']}}">{{$type['type']}}</option>
                      @endforeach                      
  
                  </select> 
                <br><br>
                <label>Detalles</label><br>
                <input type="text" name="detail" autofocus placeholder="Detalles" />
                
                
                </div><br>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
            
        </div>
    </div>


</body>

</html> 

   



    <div class="container col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Usuarios Registrados</h2>
            </div>
            @if ($usuarios->isEmpty())
                <div>No hay Usuarios para Mostrar</div>
            @else
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th  scope="col">Pais</th>
                            <th  scope="col">Usuario</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{!! $usuario->country!!}</td>
                                <td>{!! $usuario->name !!}</td>

                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

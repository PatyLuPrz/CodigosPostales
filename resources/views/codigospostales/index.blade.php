@extends('../master')
@section('content')
<form action="{{route('codigospostales.finder')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Ingresa tu codigo postal" aria-label="Ingresa tu codigo postal" aria-describedby="button-addon2" name="cp">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span><i class="fa fa-search" aria-hidden="true"></i></span> Buscar</button>
    </div>
</form>
    @if ($resultado != Null)
        @if (count($resultado) == 0)
            <div class="alert alert-danger" role="alert">
                El C.P. ingresado no arrojo ningun resultado, intentalo de nuevo.
            </div>
        @else
            <hr>
            <div class="row">
                <div class="col-6">
                    <h2>Municipio</h2>
                    <h3>{{$resultado[0]->municipio}}</h3>
                </div>
                <div class="col-6">
                    <h2>Estado</h2>
                    <h3>{{$resultado[0]->municipio}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr><h2>Direcciones correspondientes al C.P. ingresado</h2>
                    <div class="table-responsibe">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Zona</th>
                                    <th>Asentamiento</th>
                                    <th>Tipo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resultado as $item)
                                    <tr>
                                        <td>{{ $item->zona }}</td>
                                        <td>{{ $item->asentamiento }}</td>
                                        <td>{{ $item->tipo }}</td>
                                    </tr>    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif        
    @endif
@endsection
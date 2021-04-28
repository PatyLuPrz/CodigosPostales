@extends('../master')
@section('content')
<form action="{{route('codigospostales.finder')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Ingresa tu codigo postal" aria-label="Ingresa tu codigo postal" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><span><i class="fa fa-search" aria-hidden="true"></i></span> Buscar</button>
    </div>
</form>
    <hr>
    @foreach ($resultado as $item)
        {{$item}} <br>
    @endforeach
@endsection
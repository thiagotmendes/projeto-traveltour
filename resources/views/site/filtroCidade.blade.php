@extends('layouts.site')
@section('conteudo')
  <div class="well well-sm">
    <div class="form-group">
      <label for="">Procurar</label>
      <input type="text" class="form-control" id="" placeholder="">
    </div>
  </div>
  @include('vendor.pagination.default', ['paginator' => $filtroEstado])
  @foreach ($filtroEstado as $filtro)
    <div class="agencia-lista">
      <div class="row">
        <div class="col-md-3">
          @if (!empty($filtro->logo))
            <div class="img-logo">
              <img src="{{asset($filtro->logo)}}" alt="" class="img-responsive">
            </div>
          @endif
        </div>
        <div class="col-md-9">
          <h2>{{$filtro->nome_fantasia}}</h2>
          <p> <i class="fa fa-phone" aria-hidden="true"></i> {{$filtro->tel}} - <i class="fa fa-mobile" aria-hidden="true"></i> {{$filtro->cel}} </p>
          <p> <i class="fa fa-home" aria-hidden="true"></i> {{$filtro->endereco}} - N {{$filtro->num}} - {{$filtro->bairro}} - {{$filtro->cidade}} </p>
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <a href="{{url('agencia/'.$filtro->slug)}}" class="btn btn-info btn-block"> Saiba Mais </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach
  @include('vendor.pagination.default', ['paginator' => $filtroEstado])
@endsection

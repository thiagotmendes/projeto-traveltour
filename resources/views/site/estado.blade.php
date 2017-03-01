@extends('layouts.site')
@section('conteudo')
  <div class="well well-sm">
    <div class="form-group">
      <label for="">Procurar</label>
      <input type="text" class="form-control" id="" placeholder="">
    </div>
  </div>

  @foreach ($filtroEstado as $filtro)
    <div class="row">
      <div class="col-md-3">
        @if (!empty($filtro->logo))
          <img src="{{asset($filtro->logo)}}" alt="" class="img-responsive">
        @endif    
      </div>
      <div class="col-md-9">
        {{$filtro->nome_fantasia}}
      </div>
    </div>
  @endforeach
@endsection

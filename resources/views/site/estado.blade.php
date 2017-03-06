@extends('layouts.site')
@section('conteudo')
  <div class="well well-sm">
    <div class="form-group">
      <label for="">Procurar</label>
      <input type="text" class="form-control" id="" placeholder="">
    </div>
  </div>
  <div class="row">
    @foreach ($filtroEstado as $filtro)
      <div class="col-md-2">
        <a href="{{url('cidade/'.$filtro->slugCidade)}}">
          {{$filtro->cidade}}
        </a>
      </div>
    @endforeach
  </div>
@endsection

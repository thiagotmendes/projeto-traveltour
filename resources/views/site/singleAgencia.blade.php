@extends('layouts.site')
@section('conteudo')
  <h1> {{$singleAgencia[0]->nome_fantasia}} </h1>
  <!-- links adicionais -->
  <div class="links-adicionais">
    <ul class="nav nav-pills">
      @foreach ($linksAdicionais as $links)
        <li><a href="#"> {{$links->titulo}} </a></li>
      @endforeach
    </ul>
  </div>
  <!-- /links adicionais -->
  <div class="row dados-pessoais">
    <div class="col-md-3">
      <img src="{{asset($singleAgencia[0]->logo)}}" alt="" class="img-responsive">
    </div>
    <div class="col-md-9">
      <p>{{$singleAgencia[0]->nome_fantasia}}</p>
      <p>{{$singleAgencia[0]->razao_social}}</p>
      <p>
        {{$singleAgencia[0]->endereco}},
        N: {{$singleAgencia[0]->num}}
        <strong>Bairro:</strong> {{$singleAgencia[0]->bairro}}
        <strong>Cidade:</strong> {{$singleAgencia[0]->cidade}} / {{$singleAgencia[0]->estado}}
      </p>
      <p> {{$singleAgencia[0]->tel}} </p>
      <p>{{$singleAgencia[0]->email}}</p>
    </div>
  </div>
  <div class="well well-sm">
    <div class="row">
      <div class="col-md-6">
        <h3>Serviços Prestados</h3>
        @foreach ($servicosAgencia as $servicos)
          <p>{{$servicos->descricao}}</p>
        @endforeach
      </div>
      <div class="col-md-6">
        <h3>Linguas Atendimento</h3>
      </div>
    </div>

  </div>

@endsection

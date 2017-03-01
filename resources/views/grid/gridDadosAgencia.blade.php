@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Agência: {{$agencia[0]->nome_fantasia}}</h3>
          </div>
          <div class="panel-body tela-dados">
            <!-- row -->
            <div class="row">
              <div class="col-md-3">
                <label for="cnpj">CNPJ</label> <br>
                {{$agencia[0]->CNPJ}}
              </div>
              <div class="col-md-3">
                <label for="cnpj">Data De Abertura</label> <br>
                {{$agencia[0]->data_abertura}}
              </div>
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-md-4">
                <label for="cnpj">Nome Fantasia</label><br>
                {{$agencia[0]->nome_fantasia}}
              </div>
              <div class="col-md-4">
                <label for="cnpj">Razão Social</label><br>
                {{$agencia[0]->razao_social}}
              </div>
              <div class="col-md-4">
                <label for="cnpj">Cadastour</label><br>
                {{$agencia[0]->cadastour}}
              </div>
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-md-4">
                <label for="cnpj">Inscrição Estadual</label><br>
                {{$agencia[0]->inscricao_estadual}}
              </div>
              <div class="col-md-2">
                <label for="cnpj">Isento</label><br>
                {{$agencia[0]->isento}}
              </div>
              <div class="col-md-3">
                <label for="cnpj">Inscrição Municipal</label><br>
                {{$agencia[0]->inscricao_municipal}}
              </div>
              <div class="col-md-3">
                <label for="cnpj">Porte</label><br>
                {{$agencia[0]->porte}}
              </div>
            </div>
            <!-- row -->
            <div class="row">
              <div class="col-md-4">
                <label for="cnpj">Representante</label><br>
                {{$agencia[0]->representante}}
              </div>
              <div class="col-md-4">
                <label for="cnpj">CPF Representante</label><br>
                {{$agencia[0]->cpf_representante}}
              </div>
              <div class="col-md-4">
                <label for="cnpj">Data Nascimento</label><br>
                {{$agencia[0]->data_nasc_representante}}
              </div>
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
              <div class="col-md-4">
                <label for="cnpj"> Telefone </label><br>
                {{$agencia[0]->tel}}
              </div>
              <div class="col-md-4">
                <label for="cnpj"> Celular </label><br>
                {{$agencia[0]->cel}}
              </div>
              <div class="col-md-4">
                <label for="cnpj"> Celular </label><br>
                {{$agencia[0]->email}}
              </div>
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
              <div class="col-md-3">
                <label for="cnpj"> Telefonia Gratuita </label><br>
                {{$agencia[0]->telefonia_gratuita}}
              </div>
              <div class="col-md-3">
                <label for="cnpj"> Logo </label><br>
                @if (!empty($agencia[0]->logo))
                  <img src="{{url($agencia[0]->logo)}}" alt="" class="img-responsive">
                @endif
              </div>
              <div class="col-md-3">
                <label for="cnpj"> Certificado </label><br>
                @if (!empty($agencia[0]->certificado))
                  <img src="{{url($agencia[0]->certificado  )}}" alt="" class="img-responsive">
                @endif
              </div>
              <div class="col-md-3">
                <div class="row">
                  <div class="col-md-6">
                    <label for="cnpj"> Inicio Certificado </label> <br>
                    {{$agencia[0]->data_inicio_cert}}
                  </div>
                  <div class="col-md-6">
                    <label for="cnpj"> Fim Certificado </label> <br>
                    {{$agencia[0]->data_fim_cert}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">
              <div class="col-md-3">
                <label for="cnpj"> Endereço </label> <br>
                {{$agencia[0]->endereco}}
              </div>
              <div class="col-md-1">
                <label for="cnpj"> Numero </label> <br>
                {{$agencia[0]->num}}
              </div>
              <div class="col-md-3">
                <label for="cnpj"> Bairro </label> <br>
                {{$agencia[0]->bairro}}
              </div>
              <div class="col-md-3">
                <label for="cnpj"> Cidade </label> <br>
                {{$agencia[0]->cidade}}
              </div>
              <div class="col-md-2">
                <label for="cnpj"> Estado </label> <br>
                {{$agencia[0]->estado}}
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"> Serviços para: {{$agencia[0]->nome_fantasia}} </h3>
          </div>
          <div class="panel-body">
            @foreach ($listaServico as $servicos)
              <div class="row adds">
                <div class="col-md-10">
                  {{$servicos->descricao}}
                </div>
                <div class="col-md-2">
                  <a href="" class="btn btn-danger" >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"> Linguas: {{$agencia[0]->nome_fantasia}} </h3>
          </div>
          <div class="panel-body">
            @foreach ($lista_linguas as $linguas)
              <div class="row">
                <div class="col-md-10">
                  {{$linguas->descricao}}
                </div>
                <div class="col-md-2">
                  <a href="" class="btn btn-danger" >
                    <i class="fa fa-trash" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

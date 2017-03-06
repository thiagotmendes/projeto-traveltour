@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Adicionar Serviços:
              <span class="label label-success"> {{$listaAgencia[0]->nome_fantasia}} </span>
            </h3>
          </div>
          <form class="" action="{{url('ger-agencia/gerenciaServico')}}" method="post">
            <div class="panel-body">
              {{csrf_field()}}
              <input type="hidden" name="idagencia" value="{{$listaAgencia[0]->idagencia}}">
              <div class="row">
                <div class="col-md-12">
                  @php
                    //var_dump($comparaServico);
                    //echo $comparaServico[0]->idagencia;
                    $count = 0;
                  @endphp
                  @foreach ($listaServico as $servicos)
                    <div class="">
                      <label class="checkbox-inline">
                        <input type="checkbox" name="servicos[]" value="{{$servicos->idservicos}}">
                        {{$servicos->descricao}}
                      </label>
                    </div>
                    @php
                      $count++
                    @endphp
                  @endforeach
                </div>
              </div>
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <button type="submit" name="button" class="btn btn-success btn-block">
                    SALVAR
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Gerenciar linguas:
              <span class="label label-success"> {{$listaAgencia[0]->nome_fantasia}} </span>
            </h3>
          </div>
          <form class="" action="{{url('agencia/gerenciaLingua')}}" method="post">
            <input type="hidden" name="idagencia" value="{{$listaAgencia[0]->idagencia}}">
            {{csrf_field()}}
            <div class="panel-body">
              @foreach ($listaLinguas as $linguas)
                <label class="checkbox-inline">
                  <input type="checkbox" name="linguas[]" value="{{$linguas->idlingua}}">
                  {{$linguas->descricao}}
                </label>
              @endforeach
            </div>
            <div class="panel-footer">
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <button type="submit" name="button" class="btn btn-success btn-block">
                    SALVAR
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

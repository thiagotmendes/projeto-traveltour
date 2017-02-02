@extends('layouts.app')

@section('content')
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title pull-left"> Cadastrar Agência </h3>
        <span class="pull-right">
          <a href="{{url('agencia/lista')}}">
            <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i>
            Voltar
          </a>
        </span>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        @if (isset($_GET['msg']) and $_GET['msg'] == 'ok')
          <div class="alert alert-success">
            Cadastro efetuado com sucesso.
          </div>
        @endif
        <form class="" action="{{ url('agencia/adicionar') }}" method="post" role="form" data-toggle="validator">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="" required>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="data_abertura">Data Abertura</label>
                <input type="text" name="data_abertura"  class="form-control data" id="data_abertura" placeholder="" required>
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="nome_fantasia">Nome Fantasia</label>
                <input type="text" class="form-control" name="nome_fantasia" id="nome_fantasia"  data-match-error="Whoops, these don't match" placeholder="Nome" required>
                <div class="help-block with-errors"></div>
                {{ csrf_field() }}
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="razao_social"> Razão Social </label>
                <input type="text" class="form-control" name="razao_social" id="razao_social" placeholder="" required>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="cadastour"> Cadastour </label>
                <input type="text" class="form-control" id="cadastour" name="cadastour" placeholder="" required>
              </div>
            </div>
          </div>
          <!-- /row -->
          <!-- row -->
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inscricao_estadual">Inscrição Estadual</label>
                <input type="text" class="form-control" name="inscricao_estadual" id="inscricao_estadual" placeholder="" required>
              </div>
            </div>
            <div class="col-md-1">
              <div class="form-group">
                <label for="isento_inscEstadual"> Isento </label>
                <select class="form-control" name="isento_inscEstadual" required>
                  <option value=""></option>
                  <option> Sim </option>
                  <option> Não </option>
                </select>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="inscricao_municipal"> Inscrição Municipal </label>
                <select class="form-control" name="inscricao_municipal" required>
                  <option value=""></option>
                  <option value="isento"> Isento </option>
                  <option value="nao_isento"> Não Isento </option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="porte"> Porte </label>
                <select class="form-control" name="porte">
                  <option value=""></option>
                  <option> Microempresa </option>
                  <option> Empresa de pequeno porte </option>
                  <option> Empresa de médio ou grande porte </option>
                </select>
              </div>
            </div>
          </div>
          <!-- /row -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="representante"> Representante </label>
                <input type="text" class="form-control" name="representante" id="representante" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="cpf_representante"> CPF Representante </label>
                <input type="text" class="form-control" name="cpf_representante" id="cpf_representante" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="data_nasc_representante"> Data Nascimento </label>
                <input type="text" class="form-control data" name="data_nasc_representante" id="data_nasc_representante" placeholder="">
              </div>
            </div>
          </div>
          <!-- /row -->
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label for="telefone"> Telefone </label>
                <input type="text" class="form-control telefone" name="telefone" id="telefone" placeholder="">
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="celular"> Celular </label>
                <input type="text" class="form-control telefone " name="celular" id="celular" placeholder="">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="email"> Email </label>
                <input type="email" class="form-control" name="email" id="email" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label for="telefonia_gratuita"> Serviço de Telefonia Gratuita </label>
                <input type="text" class="form-control" name="telefonia_gratuita" id="telefonia_gratuita" placeholder="">
              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="arquivo"> Logo </label>
                <input type="file" class="form-control" name="logo" id="logo" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="certificado"> Certificado </label>
                <input type="file" class="form-control" name="certificado" id="certificado" placeholder="">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="data-ini">Data inicio</label>
                <input type="text" class="form-control data" name="dataIni" id="data-ini" placeholder="">
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label for="data-fim">Data Expira</label>
                <input type="text" class="form-control data" name="dataFim" id="data-fim" placeholder="">
              </div>
            </div>
          </div>
          <!-- /row -->

          <!-- row -->
            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" name="cep" id="cep" placeholder="">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="endereco"> Endereço </label>
                  <input type="text" class="form-control" name="endereco" id="rua" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                  <label for="num"> N° </label>
                  <input type="text" class="form-control" name="num" id="num" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label for="bairro"> Bairro </label>
                  <input type="text" class="form-control" name="bairro" id="bairro" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                  <label for="uf"> UF </label>
                  <input type="text" name="estado" id="uf" value="" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="cidade"> Cidade </label>
                  <input type="text" class="form-control" name="cidade" id="cidade" placeholder="">
                </div>
              </div>
            </div>
          <!-- /row -->
          <div class="row">
            <div class="col-md-4 col-md-offset-4">
              <div class="form-group">
                <button type="submit" name="button" class="btn btn-success btn-block"> Cadastrar </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

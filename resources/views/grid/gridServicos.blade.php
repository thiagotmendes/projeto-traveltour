<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Serviços Cadastrados </h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered table-striped table-hover table_modal grid">
      <thead>
        <tr>
          <td> Serviço </td>
        </tr>
      </thead>
      <tbody>
        @foreach ($listaServicosView as $listaServ)
          <tr>
            <td> {{$listaServ->descricao}} </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

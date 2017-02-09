<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"> Linguas Cadastradas </h3>
  </div>
  <div class="panel-body">
    <table class="table table-bordered table-striped table-hover table_modal grid">
      <thead>
        <tr>
          <td> Serviço </td>
        </tr>
      </thead>
      <tbody>
        @foreach ($listaLingua as $listalingua)
          <tr>
            <td> {{$listalingua->descricao}} </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

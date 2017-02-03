<form class="" action="{{url('servicos/add')}}"  method="post" role="form" data-toggle="validator">
  <div class="form-group">
    <label for="servicos"> Serviço </label>
    <input type="text" class="form-control" name="servicos" id="servicos" placeholder="" required>
    {{csrf_field()}}
  </div>
  <div class="form-group">
    <button type="submit" name="button" class="btn btn-success"> Salvar </button>
  </div>
</form>

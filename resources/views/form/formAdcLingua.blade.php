<form class="" action="{{url('servicos/addLingua')}}"  method="post" role="form" data-toggle="validator">
  <div class="form-group">
    <label for="lingua"> Serviço </label>
    <input type="text" class="form-control" name="lingua" id="lingua" placeholder="" required>
    {{csrf_field()}}
  </div>
  <div class="form-group">
    <button type="submit" name="button" class="btn btn-success"> Salvar </button>
  </div>
</form>

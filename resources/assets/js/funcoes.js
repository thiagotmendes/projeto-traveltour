jQuery(document).ready(function($) {
  $(".data").mask("99/99/9999",{placeholder:"mm/dd/yyyy"});
  $("#cep").mask('99999-999');
  $('.telefone').mask("(99) 99999-999?9").ready(function(event) {
    var target, phone, element;
    target = (event.currentTarget) ? event.currentTarget : event.srcElement;
    phone = target.value.replace(/\D/g, '');
    element = $(target);
    element.unmask();
    if(phone.length > 10) {
        element.mask("(99) 99999-999?9");
    } else {
        element.mask("(99) 99999-999?9");
    }
  });

  $('.grid').DataTable();
});

tinymce.init({
  selector: 'textarea',  // change this value according to your HTML
  cache_suffix: '?v=4.1.6'
});

jQuery(document).ready(function($) {
  $(document).on('click','.btnAdcCode', function(){
    var variavel = $(this).data('ag');
    $('#modalLinksExternos').modal('show');
    $('.idAgenciaLink').val(variavel);
    return variavel;
  });

  $(document).on('click', '.btnAddItem', function(){
    $('.conteudoInput').append('<div class="col-md-4"><input type="text" name="titulo[]" value="" placeholder="Titulo" class="form-control"></div>')
    $('.conteudoInput').append('<div class="col-md-8"><div class="input-group"><input type="text" name="link[]" class="form-control" placeholder="Adicionar Codigo para incorporação"><span class="input-group-btn"><button class="btn btn-default btnAddItem" type="button"> Add <i class="fa fa-plus-circle fa-1x" aria-hidden="true"></i> </button></span></div></div>');
  });

});

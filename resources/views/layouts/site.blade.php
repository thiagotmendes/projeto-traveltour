@include('site.include.header')
  <section class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h2> Pesquisar </h2>
          <form class="" action="index.html" method="post">
            <div class="form-group">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Procurar por nome">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                </span>
              </div>
            </div>
          </form>
          <h2> UFs Cadastrados </h2>

          <ul class="menu-estados">
            @foreach ($listaEstados as $lestado)
              <li><a href="#"> {{$lestado->estado}} </a> </li>
            @endforeach
          </ul>
        </div>
        <div class="col-md-9">
          @yield('conteudo')
        </div>
      </div>
    </div>
  </section>
@include('site.include.footer')

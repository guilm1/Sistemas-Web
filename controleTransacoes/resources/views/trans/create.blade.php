<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Transações')</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <body>
    <nav class="navbar navbar-expand-md nnavbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Sistema Web I
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-4" href="#" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Clientes
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/transacoes/create"> Efetuar Transação</a>
                      <a class="dropdown-item" href="/transacoes"> Ver Transações</a>
                  </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Área Administrativa</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="/clientes"> Gerenciar Clientes </a>
                      <a class="dropdown-item" href="/transacoes"> Gerenciar Transações</a>
                      <a class="dropdown-item" href="/tipos"> Gerenciar Tipos de Transações</a>
                  </div>
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
      <h1>Efetue uma nova transação</h1>
    </div>

    <form class="form-group" method="post" action="{{ route('transacoes.store') }}">
      @csrf
    <div class="jumbotron">

      <p>Cliente: </p><br>
      <select class="form-control" name="cliente_id">

        @foreach($clientes as $c)
          <option value="{{ $c->id }}">{{ $c->nome }}</option>
        @endforeach
      </select><br><br>

      <p>Tipo de transação: </p><br>
      <select class="form-control" name="tipo_id">

        @foreach($tipos as $t)
          <option value="{{ $t->id }}">{{ $t->nome }}</option>
        @endforeach
      </select><br><br>

      <label class="form-group" for="data">Data:</label><br>
      <input class="form-control" type="date" name="data" value=""> <br>

      <label class="form-group" for="credito">Valor:</label><br>
      <input class="form-control" type="number" name="valor" value=""><br>

      <input hidden type="number" name="credito" value="11">


    <input class="btn btn-success" type="submit" name="btnSalvar" value="Salvar">

    </div>
    </form>


</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

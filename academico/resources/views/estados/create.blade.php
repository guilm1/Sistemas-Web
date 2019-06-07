@extends('principal')

@section('titulo', 'Estados')

@section('conteudo')

  <form method="post" action="{{route('estados.store')}}">
    {{-- para token de submissão --}}
    @csrf
    <div class="row bg-light">
        <div class="col">

    <p class="form-group">
      Nome: <input class="form-control" typer="text" name="nome" />
    </p><br>
    <p>
      Sigla: <input class="form-control" typer="text" name="sigla" />
    </p><br>

    <input type="submit" name="btnSalvar" value="Incluir"/>
  </div>
</div>
  </form>

@endsection

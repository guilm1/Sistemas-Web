@extends('principal')

@section('titulo', 'Editar Estado')

@section('conteudo')

  <form method="post" action="{{ route('estados.update', $estado->id) }}">
    {{-- para token de submissão --}}
    @csrf
    @method('PATCH')
    <div class="row bg-light">
        <div class="col">

    <p class="form-group">
      Nome: <input class="form-control" typer="text" name="nome" value="{{ $estados->nome }}">
    </p><br>
    <p>
      Sigla: <input class="form-control" typer="text" name="sigla" value="{{ $estados->sigla }}">
    </p><br>

    <input type="submit" name="btnSalvar" value="Editar"/>
  </div>
</div>
  </form>
@endsection

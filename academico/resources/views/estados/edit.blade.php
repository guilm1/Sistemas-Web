@extends('principal')

@section('titulo', 'Editar Estado')

@section('conteudo')

  <form method="post" action="{{route('estados.update')}}">
    {{-- para token de submissão --}}
    @csrf
    @method('PATCH')
    <div class="row bg-light">
        <div class="col">

    <p class="form-group">
      Nome: <input class="form-control" typer="text" name="nome" />
    </p><br>
    <p>
      Sigla: <input class="form-control" typer="text" name="sigla" />
    </p><br>

    <input type="submit" name="btnSalvar" value="Editar"/>
  </div>
</div>
  </form>
@endsection

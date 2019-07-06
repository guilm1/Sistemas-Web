@extends('principal')

@section('titulo', 'Editar Cidade')

@section('conteudo')

  <h1>Editar Cidade</h1>

  <form method="post" action="{{ route('cidades.update', $cidade->id) }}">

    @csrf
    @method('PATCH')

      {{-- <p>Nome: <input type="text" name="nome"
          value="{{ $cidade->nome}}"></p> --}}

      <p class="form-group">
      Nome: <input class="form-control" typer="text" name="nome" value="{{ $cidade->nome}}">
      </p><br>



      <p class="form-group">Estado:</p>

      <select name="estado_id">

        @foreach($estado as $e)
          <option value="{{ $e->id }}"

            @if ( $cidade->estado_id == $e->id )
                selected
            @endif

            >{{ $e->nome }}</option>
        @endforeach
      </select>


      <input type="submit" name="btnSalvar" value="Editar">

  </form>


  {{-- <div class="row bg-light">
      <div class="col">

  <p class="form-group">
    Nome: <input class="form-control" typer="text" name="nome" value="{{ $estado->nome }}">
  </p><br>
  <p>
    Sigla: <input class="form-control" typer="text" name="sigla" value="{{ $estado->sigla }}">
  </p><br>

  <input type="submit" name="btnSalvar" value="Editar"/>
</div>
</div>
</form> --}}

@endsection

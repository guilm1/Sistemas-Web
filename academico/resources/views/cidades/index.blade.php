@extends('principal')

@section('titulo', 'Cidades')

@section('conteudo')

  <div class="btn btn-light">
      <a class="btn btn-link" href={{route('cidades.create')}}>Inserir</a>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <caption>Estados</caption>
    <thead class="thead-dark">
      <tr>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Visualizar</th>
      </tr>
    </thead>
    <tbody>
  @foreach($cidades as $c)
    <tr>
      @foreach($estados as $e)
        @if ( $c->estado_id == $e->id )
          <td> {{$e->sigla}}</td>
        @endif
      @endforeach
      <td><a href="{{ route('cidades.show', $c->id) }}">{{ $c->nome }}</a></td>
      <td><a href="{{ route('cidades.show', $c->id)}}"> Exibir </a></td>
    </tr>

    {{-- <p><a href="{{ route('cidades.show', $c->id) }}">{{ $c->nome }}-{{ $c->estado->sigla }}</a></p> --}}

  @endforeach
  </tbody>
  </table>
@endsection

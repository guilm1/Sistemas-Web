@extends('principal')

@section('titulo', 'Estados')

@section('conteudo')

  <div class="btn btn-light">
      <a class="btn btn-link" href={{route('estados.create')}}>Inserir</a>
  </div>

  <table class="table table-bordered table-hover table-striped">
    <caption>Estados</caption>
    <thead class="thead-dark">
      <tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Sigla</th>
        <th>Visualizar</th>
      </tr>
    </thead>
    <tbody>
  @foreach($estados as $e)
    <tr>
      <td>{{$e->id}}</td>
      <td><a href="{{ route('estados.show', $e->id) }}">{{ $e->nome }}</a></td>
      <td>{{$e->sigla}}</td>
      <td><a href="{{route('estados.show', $e->id)}}"> Exibir </a></td>
    </tr>
  @endforeach
</tbody>
</table>

@endsection

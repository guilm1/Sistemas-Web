@extends('principal')

@section('titulo', 'Exibir Estado')

@section('conteudo')

  <h1>Cidade: {{ $cidade->nome }}</h1>

  <p>Estado: {{ $cidade->estado_id }}</p>

  <!-- Voltar para a lista de estados //-->
  <a href="{{ route('cidades.index') }}">Voltar</a>

  <!-- Editar o estado corrente //-->
  <a href="{{ route('cidades.edit', $cidade->id) }}">Editar</a>

  <!-- Excluir o estado corrente //-->
  <form method="post" action="{{ route('cidades.destroy', $cidade->id) }}" onsubmit="return confirm('Confirma exclusão da cidade?');" >

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

  </form>

@endsection

@extends('layouts.master')
@section('content')
    <div class="container">
        <br/>
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br/>
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Edição</th>
                <th>ISBN</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($livros as $livro)
                <tr>
                    <td>{{$livro->idLivro}}</td>
                    <td>{{$livro->Titulo}}</td>
                    <td>{{$livro->Edicao}}</td>
                    <td>{{$livro->Ano}}</td>

                    <td><a href="{{action('LivrosController@edit', $livro->idLivro)}}"
                           class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{action('LivrosController@destroy', $livro->idLivro)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            <a href="{{url('/livros/create')}}"
               class="btn btn-primary">Novo Livro</a>
        </div>
    </div>
@endsection
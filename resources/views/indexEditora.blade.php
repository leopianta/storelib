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
                <th>Sigla</th>
                <th colspan="2">Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($editoras as $editora)
                <tr>
                    <td>{{$editora->idEditora}}</td>
                    <td>{{$editora->Nome}}</td>
                    <td>{{$editora->Sigla}}</td>

                    <td><a href="{{action('EditorasController@edit', $editora->idEditora)}}"
                           class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{action('EditorasController@destroy', $editora->idEditora)}}" method="post">
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
            <a href="{{url('/editoras/create')}}"
               class="btn btn-primary">Nova Editora</a>
        </div>
    </div>
@endsection
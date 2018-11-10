@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-horizontal" role="form" method="post" action="{{action('LivrosController@update',$id)}}">
            <fieldset>
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="titulo">Título</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="Titulo" id="Titulo"
                               value="{{$livro->Titulo}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="isbn">ISBN</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="isbn" id="isbn"
                               placeholder="Informe a ISBN do livro">
                    </div>
                </div>

                <div class="form-group autors">
                    <label class="col-sm-3 control-label" for="autores">Autores</label>
                    <div class="row ">
                        <div class="col-sm-6">
                            <!--<input type="text" class="form-control" name="autores" id="autores" placeholder="Informe os autores do livro">-->
                            <select class="form-control" id="cmbAutores" style="margin-left: 15px;">
                                <option>José Saramago</option>
                                <option>Bukowski</option>
                            </select>
                        </div>
                        <div class="col-sm-2">
                            <input id="addAutor" type="button" value="Adicionar" class="btn btn-primary"
                                   onclick="AddComboAutores();"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="edicao">Edição</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" name="edicao" id="edicao" style="width: 70px;">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="ano">Ano</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" name="ano" id="ano" style="width: 90px;">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="assunto">Assunto</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="assunto" id="assunto"
                               placeholder="Informe o assunto do Livro">
                    </div>
                </div>
                <hr/>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@endsection



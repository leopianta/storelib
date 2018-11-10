@extends('layouts.master')
@section('content')
    <div class="container">
        <form class="form-horizontal" role="form" method="post" action="{{url('/editora/save')}}"
              enctype="multipart/form-data">
            <fieldset>
                @csrf
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="titulo">Nome</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="nome" id="nome"
                               placeholder="Informe o nome da editora">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="isbn">Sigla</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="Sigla" id="Sigla"
                               placeholder="Informe a Sigla da editora">
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



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Listagem de Livros</div>
                <div class="panel-body">               
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Capa</label>
                            <div class="col-sm-10" style="text-align: center;">
                                <img src="{{asset('img/'.$book->image.'.jpg')}}" height="180" width="150" class="img-rounded">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="isbn" class="col-sm-2 control-label">ISBN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="isbn" placeholder={{$book->isbn}} readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-sm-2 control-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder={{$book->title}} readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="author" class="col-sm-2 control-label">Autor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="author" placeholder={{$book->author}} readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="publisher" class="col-sm-2 control-label">Publicação</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="publisher" placeholder={{$book->publisher}} readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="{{ url('books')}}" class="btn btn-primary">Voltar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
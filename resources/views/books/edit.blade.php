@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Atualizar Livro</div>

                <div class="panel-body">
                    {!! Form::model($book,['method' => 'PATCH','route'=>['books.update',$book->id]]) !!}
                <div class="form-group">
                    {!! Form::label('ISBN', 'ISBN:') !!}
                    {!! Form::text('isbn',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Title', 'Titulo:') !!}
                    {!! Form::text('title',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Author', 'Autor:') !!}
                    {!! Form::text('author',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Publisher', 'Publicação:') !!}
                    {!! Form::text('publisher',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Image', 'Imagem:') !!}
                    {!! Form::text('image',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Alterar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ url('books')}}" class="btn btn-default">Voltar</a>
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
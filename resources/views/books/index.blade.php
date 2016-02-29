@extends('layouts.app')

@section('content')
<div class="container">
 <a href="{{url('/books/create')}}" class="btn btn-success">Inserir Livro</a>
 <hr>
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Código</th>
         <th>ISBN</th>
         <th>Titulo</th>
         <th>Autor</th>
         <th>Ano</th>
         <th>Capa</th>
         <th colspan="3">Ações</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($books as $book)
         <tr>
             <td>{{ $book->id }}</td>
             <td>{{ $book->isbn }}</td>
             <td>{{ $book->title }}</td>
             <td>{{ $book->author }}</td>
             <td>{{ $book->publisher }}</td>
             <td><img src="{{asset('img/'.$book->image.'.jpg')}}" height="35" width="30"></td>
             <td><a href="{{url('books',$book->id)}}" class="btn btn-primary">Visualizar</a></td>
             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Alterar</a></td>
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['books.destroy', $book->id]]) !!}
             {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach
     </tbody>
 </table>
 </div>
@endsection
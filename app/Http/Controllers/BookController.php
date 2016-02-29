<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
   	{
        $books=Book::all();
        return view('books.index',compact('books'));
    }

    public function show($id)
	{
   		$book=Book::find($id);
   		return view('books.show',compact('book'));
	}

	public function create()
	{
	   return view('books.create');
	}

/**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
	public function store()
	{
	   $book=Request::all();
	   Book::create($book);
	   return redirect('books');
	}

	public function edit($id)
	{
	   $book=Book::find($id);
	   return view('books.edit',compact('book'));
	}

/**
 * Update the specified resource in storage.
 *
 * @param  int  $id
 * @return Response
 */
	public function update($id)
	{
	   //
	   $bookUpdate=Request::all();
	   $book=Book::find($id);
	   $book->update($bookUpdate);
	   return redirect('books');
	}

	public function destroy($id)
	{
	   Book::find($id)->delete();
	   return redirect('books');
	}
}

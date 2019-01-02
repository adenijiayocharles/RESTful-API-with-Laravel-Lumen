<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;
class AuthorController extends Controller
{
    // show all authors
    public function showAllAuthors()
    {
        return response()->json(Author::all());
    }

    // get author
    public function getAuthor($id)
    {
        return response()->json(Author::find($id));
    }

    // create new author
    public function createAuthor(Request $request){
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|string|unique:authors",
            "location" => "required"
        ]);

        $author = Author::create($request->all());
        return response()->json($author, 201);
    }

    // delete author
    public function deleteAuthor($id)
    {
        Author::findOrFail($id)->delete();
        return response("Author deleted successfully", 200);
    }

    // update author
    public function updateAuthor($id, Request $request)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());

        return response()->json($author, 200);
    }    

}

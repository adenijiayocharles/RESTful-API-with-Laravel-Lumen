<?php

namespace App\Http\Controllers;
use App\Author;
class AuthorController extends Controller
{
    public function showAllAuthors()
    {
        return response()->json(Author::all());
    }
}

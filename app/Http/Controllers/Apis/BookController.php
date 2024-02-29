<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function list_books() {
        $books = Book::with(['units', 'units.questions'])->get();
        return BookResource::collection($books);
    }
}

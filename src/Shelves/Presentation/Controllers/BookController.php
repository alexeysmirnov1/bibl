<?php

namespace Literati\Shelves\Presentation\Controllers;

use App\Enum\BookFormatEnum;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Library;
use App\Models\Publisher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Literati\Shelves\Presentation\Requests\StoreBookRequest;

class BookController
{
    public function index()
    {
        $user = User::first();

        return view('shelves.index', [
            'books' => Book::all(),
//            'books' => $user->library()->with('book')->paginate(10),
        ]);
    }

    public function create()
    {
        return view('shelves.create', [
            'publishers' => Publisher::all(),
            'genres' => Genre::all(),
            'formats' => BookFormatEnum::values(),
        ]);
    }

    public function store(StoreBookRequest $request)
    {
        $book = Book::create([
            'publisher_id' => $request->get('publisher'),
            'genre_id' => $request->get('genre'),
            'name' => $request->get('name'),
            'slug' => Str::slug($request->get('name')),
            'pages' => $request->get('pages'),
            'format' => $request->get('format'),
        ]);

        Library::create([
            'user_id' => Auth::id(),
            'book_id' => $book->id,
        ]);

        return redirect(route('shelves.books.index'));

    }
}

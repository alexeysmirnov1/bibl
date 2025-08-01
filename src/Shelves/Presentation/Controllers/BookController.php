<?php

namespace Literati\Shelves\Presentation\Controllers;

use App\Models\User;

class BookController
{
    public function index()
    {
        $user = User::first();

        return view('bibl.books', [
            'books' => $user->library()->with('book')->paginate(10),
        ]);
    }

    public function create()
    {
        return view('bibl.create');
    }

    public function store()
    {
        dd('store');
    }
}

<?php

namespace Literati\Shelves\Presentation\Controllers;

use App\Models\User;

class BookController
{
    public function index()
    {
        $user = User::first();

        return view('shelves.index', [
            'books' => $user->library()->with('book')->paginate(10),
        ]);
    }

    public function create()
    {
        return view('shelves.create');
    }

    public function store()
    {
        dd('store');
    }
}

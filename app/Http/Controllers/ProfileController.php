<?php

namespace App\Http\Controllers;

use App\Enum\BookStatusEnum;
use App\Models\User;

class ProfileController extends Controller
{
    public function dashboard()
    {
        $user = User::first();

        return view('bibl.dashboard', [
            'stats' => [
                'total' => $user->library()->count(),
                'read' => $user->library()->whereStatus(BookStatusEnum::DONE->value)->count(),
                'not_read' => $user->library()->whereStatus(BookStatusEnum::NOT_STARTED->value)->count(),
            ],
        ]);
    }

    public function books()
    {
        $user = User::first();

        return view('bibl.books', [
            'books' => $user->library()->with('book')->paginate(10),
        ]);
    }

    public function createBook()
    {
        return view('bibl.create');
    }

    public function storeBook()
    {

    }
}

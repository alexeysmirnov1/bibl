<?php

namespace Literati\Shelves\Presentation\Controllers;

use App\Enum\BookStatusEnum;
use App\Models\User;

class ShelvesController
{
    public function index()
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
}

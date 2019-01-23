<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\View\View;

final class UsersController extends Controller
{
    public function index(): View
    {
        $users = User::orderBy('created_at', 'desc')->paginate();

        return view('admin.users.index')->with('users', $users);
    }
}

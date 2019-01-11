<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use function view;

final class WelcomeController extends Controller
{
    public function index(): View
    {
        return view('welcome.index');
    }
}

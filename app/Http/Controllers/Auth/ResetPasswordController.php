<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use function route;

final class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /** @var string */
    protected $redirectTo;

    public function __construct()
    {
        $this->redirectTo = route('welcome.index');
        $this->middleware('guest');
    }
}

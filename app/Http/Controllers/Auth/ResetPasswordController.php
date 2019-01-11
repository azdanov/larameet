<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

final class ResetPasswordController extends Controller
{
    use ResetsPasswords;

    /** @var string */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }
}

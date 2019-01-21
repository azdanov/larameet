<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use function route;

final class LoginController extends Controller
{
    use AuthenticatesUsers;
    use ThrottlesLogins;

    /** @var string */
    protected $redirectTo;

    public function __construct()
    {
        $this->redirectTo = route('welcome.index');
        $this->middleware('guest')->except('logout');
    }
}

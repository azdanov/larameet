<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as ValidatorFacade;
use function flash;
use function redirect;
use function route;

final class RegisterController extends Controller
{
    use RegistersUsers;

    /** @var string */
    protected $redirectTo;

    public function __construct()
    {
        $this->redirectTo = route('welcome.index');
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  mixed[] $data
     */
    protected function validator(array $data): Validator
    {
        return ValidatorFacade::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  mixed[] $data
     */
    protected function create(array $data): User
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function registered(): RedirectResponse
    {
        flash('You have registered successfully!')->success();
        return redirect($this->redirectPath());
    }
}

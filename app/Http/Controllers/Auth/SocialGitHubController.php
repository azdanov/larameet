<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Http\RedirectResponse;
use Socialite;
use Throwable;
use function bcrypt;
use function flash;
use function redirect;
use function route;
use function str_random;

final class SocialGitHubController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     */
    public function redirectToProvider(): RedirectResponse
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @throws Throwable
     */
    public function handleProviderCallback(): RedirectResponse
    {
        /** @var \Laravel\Socialite\Two\User $githubUser */
        $githubUser = Socialite::driver('github')->user();

        /** @var User $existingUser */
        $existingUser = User::where('provider_id', $githubUser->getId())->first();

        // TODO: Add logic to verify if a user was registered with the same email already.

        if ($existingUser) {
            Auth::login($existingUser);

            return redirect(route('welcome.index'));
        }

        $user = new User();

        $user->name = $githubUser->getName();
        $user->email = $githubUser->getEmail();
        $user->provider = 'github';
        $user->provider_id = $githubUser->getId();
        $user->handle_github = $githubUser->getNickname();
        $user->password = bcrypt(str_random());

        $user->saveOrFail();

        Auth::login($user);

        flash('Successfully authenticated using GitHub')->success();

        return redirect(route('welcome.index'));
    }
}

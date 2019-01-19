<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Mail;
use function flash;
use function redirect;
use function view;

final class ContactController extends Controller
{
    public function create(): View
    {
        return view('contact.create');
    }

    public function store(ContactFormRequest $request): RedirectResponse
    {
        $contact = [];
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['message'] = $request->get('message');

        Mail::to($contact['email'])->send(new ContactEmail($contact));

        flash('Your message has been sent!')->success();
        return redirect()->route('contact.create');
    }
}

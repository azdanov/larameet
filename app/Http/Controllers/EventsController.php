<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Event;
use App\Http\Requests\EventRequest;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use function flash;
use function redirect;
use function view;

final class EventsController extends Controller
{
    public function index(): View
    {
        $events = Event::paginate(10);

        return view('events.index')->with('events', $events);
    }

    public function create(): View
    {
        return view('events.create');
    }

    public function store(EventRequest $request): RedirectResponse
    {
        $event = Event::create([$request->input()]);

        flash('Event created!')->success();

        return redirect()->route('events.show')->with('event', $event);
    }

    public function show(Event $event): View
    {
        return view('events.show')->with('event', $event);
    }

    public function edit(Event $event): View
    {
        return view('events.edit')->with('event', $event);
    }

    public function update(EventRequest $request, Event $event): RedirectResponse
    {
        $event->update($request->input());

        flash('Event updated!')->success();

        return redirect()->route('events.edit', $event);
    }

    /** @throws Exception */
    public function destroy(Event $event): RedirectResponse
    {
        $event->delete();

        flash('Event deleted!')->success();

        return redirect()->route('events.index');
    }
}

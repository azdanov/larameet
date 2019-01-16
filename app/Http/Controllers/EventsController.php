<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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

    public function store(Request $request): RedirectResponse
    {
        $event = Event::create([$request->input()]);

        flash('Event created!')->success();
        return redirect()->route('events.show')->with('event', $event);
    }

    public function show(Event $event): View
    {
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(Event $event)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, Event $event)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Event $event)
    {
    }
}

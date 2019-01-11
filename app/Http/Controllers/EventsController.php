<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\View\View;
use function compact;
use function date;
use function view;

final class EventsController extends Controller
{
    public function index(): View
    {
        $events = [
            'Laravel Hacking and Coffee',
            'IoT with Raspberry Pi',
            'Free Vue.js Lessons',
        ];

        return view('events.index')->with('events', $events);
    }

    public function show(string $id): View
    {
        $name = 'Hilton Head Beach House';
        $date = date('Y-m-d');

        return view('events.show')->with(compact('id', 'name', 'date'));
    }
}

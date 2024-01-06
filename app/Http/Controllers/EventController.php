<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function list(): View
    {
        return view('Event.list', [
            'events' => Event::all()
        ]);
    }

    public function details($id): View
    {
        return view('Event.details', [
            'event' => Event::query()->findOrFail($id),
            'user' => Event::query()->findOrFail($id)->user,
        ]);
    }

    public function addEvent(Request $request): RedirectResponse
    {
        $event = Event::create([
            'title' => $request->input('title'),
            'notes' => $request->input('notes'),
            'dt_start' => $request->input('dt_start'),
            'dt_end' => $request->input('dt_end'),
        ]);
        return redirect()->route('events');
    }

}

<?php
namespace App\Http\Controllers;

use App\Helpers\ImageHelper;
use App\Models\Event;
use App\Models\EventRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('pages.backend.events.index', compact('events'));
    }

    public function create()
    {
        return view('pages.backend.events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'img_path' => 'nullable|image',
            'description' => 'required|string',
            'vacancies' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        Event::create([
            'title' => $request->title,
            'event_date' => $request->event_date,
            'img_path' => ImageHelper::uploadImage($request->file('img_path'), 'images/event', null),
            'description' => $request->description,
            'vacancies' => $request->vacancies,
            'status' => $request->status,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }

    public function show(Event $event)
    {
        $eventRegister = EventRegister::where('event_id', $event->id)->get();

        return view('pages.backend.events.show', compact('event', 'eventRegister'));
    }

    public function edit(Event $event)
    {
        return view('pages.backend.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'nullable|date',
            'img_path' => 'nullable|image',
            'description' => 'nullable|string',
            'vacancies' => 'nullable|integer',
            'status' => 'nullable|boolean',
        ]);

        // Update event details (excluding image path)
        $event->update([
            'title' => $request->title,
            'event_date' => $request->event_date,
            'img_path' => ImageHelper::uploadImage($request->file('img_path'), 'images/event', $event->img_path),
            'description' => $request->description,
            'vacancies' => $request->vacancies,
            'status' => $request->status,
        ]);

        return redirect()->route('events.index')->with('success', 'Event updated successfully!');
    }

    public function destroy(Event $event)
    {
        // Delete the image if it exists
        if ($event->img_path) {
            Storage::disk('public')->delete($event->img_path);
        }

        $event->delete();
        return redirect()->route('events.index')->with('success', 'Event deleted successfully!');
    }
    public function eventRegisterIndex(Request $request)
    {
        $data = EventRegister::all();
        return view('pages.backend.events.event-register-list', compact('data'));
    }
    public function eventRegisterStore(Request $request)
    {
        // Create a new event registration
        EventRegister::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => today(),
            'location' => $request->location,
            'destination' => $request->destination,
            'qualification' => $request->qualification,
            'score' => $request->score,
            'event_id' => $request->event_id,
        ]);

        // Redirect or show success message
        return redirect()->route('page.congratulation')->with('success', 'Your registration was successful!');
    }
    public function eventRegisterShow($id)
    {
        $data = EventRegister::findOrFail($id);
        return view('pages.backend.events.event-register-details', compact('data'));
    }
}

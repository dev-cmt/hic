<?php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\EventRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
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

        // Handle file upload
        $imgPath = $request->file('img_path') ? $request->file('img_path')->store('images', 'public') : null;

        Event::create([
            'title' => $request->title,
            'event_date' => $request->event_date,
            'img_path' => $imgPath,
            'description' => $request->description,
            'vacancies' => $request->vacancies,
            'status' => $request->status,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully!');
    }

    public function show(Event $event)
    {
        return view('pages.backend.events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('pages.backend.events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'event_date' => 'required|date',
            'img_path' => 'nullable|image',
            'description' => 'required|string',
            'vacancies' => 'required|integer',
            'status' => 'required|boolean',
        ]);

        // Handle image upload
        if ($request->hasFile('img_path')) {
            // Delete the old image if exists
            if ($event->img_path) {
                Storage::disk('public')->delete($event->img_path);
            }

            // Store the new image
            $imgPath = $request->file('img_path')->store('images', 'public');
            $event->img_path = $imgPath;
        }

        // Update event details (excluding image path)
        $event->update([
            'title' => $request->title,
            'event_date' => $request->event_date,
            'description' => $request->description,
            'vacancies' => $request->vacancies,
            'status' => $request->status,
        ]);

        // Save the new image path if it was uploaded
        if (isset($imgPath)) {
            $event->img_path = $imgPath;
            $event->save();
        }

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->get();
        return view('events.index')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'max_participants' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'event_image' => 'image|nullable|max:1999'
        ]);

        // Images upload
        if ($request->hasFile('event_image')) {
            
            // Get image name with his extension
            $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
            
            // Get just the name of the image
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            
            // Get just the extension
            $ext = $request->file('event_image')->getClientOriginalExtension();
            
            // Name of the image to store in the db
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            // Upload the image
            $path = $request->file('event_image')->storeAs('public/events', $fileNameToStore);

            // Path of event images
            // $eventPath = 'public/events';
            // $x = $eventPath + $fileNameToStore;

        }   else {
            $fileNameToStore = 'therock.jpg';
        }

        // Create Event
        $event = new Event();
        $event->name = $request->input('name');
        $event->price = $request->input('price');
        $event->description = $request->input('description');
        $event->max_participants = $request->input('max_participants');
        $event->start_date = $request->input('start_date');
        $event->creator = auth()->user()->id;
        $event->end_date = $request->input('end_date');
        $event->event_image = $fileNameToStore;
        $event->save();

        return redirect('/events')->with('success', 'Evènement créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);

        // Images upload
        if ($request->hasFile('event_image')) {
            
            // Get image name with his extension
            $fileNameWithExt = $request->file('event_image')->getClientOriginalName();
            
            // Get just the name of the image
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            
            // Get just the extension
            $ext = $request->file('event_image')->getClientOriginalExtension();
            
            // Name of the image to store in the db
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            // Upload the image
            $path = $request->file('event_image')->storeAs('public/events', $fileNameToStore);

            // Path of event images
            // $eventPath = 'public/events';
            // $x = $eventPath + $fileNameToStore;
        }

        // Create Event
        $event = Event::find($id);
        $event->name = $request->input('name');
        $event->price = $request->input('price');
        $event->description = $request->input('description');
        $event->max_participants = $request->input('max_participants');
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        if ($request->hasFile('event_image')) {
            $event->event_image = $fileNameToStore;
        }
        $event->save();

        return redirect('/events')->with('success', 'Evènement mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/events')->with('success', 'Evènement supprimé');
    }
}

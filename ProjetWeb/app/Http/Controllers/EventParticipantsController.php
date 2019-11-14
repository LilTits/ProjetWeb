<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventParticipant;

class EventParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event_participants = EventParticipant::all();
        return view('participants.index')->with('event_participants', $event_participants);
    }

    public function participants(Request $request) {

        $this->validate($request, [
            'id' => 'required'
        ]);

        $event_participants = new EventParticipant();
        $event_participants->user_id = auth()->user()->id;
        $event_participants->event_id = $request->input('id');
        $event_participants->save();
        // $event_participants = EventParticipant::where('event_id', $request)->get();

        // return view('participants.index')->with('event_participants', $event_participants);
        return redirect()->route('events.index')->with('success', 'Inscription réussie');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'event_id' => 'required',
            'user_id' => 'required'
        ]);

        $event_participants = new EventParticipant();
        $event_participants->user_id = auth()->user()->id;
        $event_participants->event_id = $request->input('id');
        $event_participants->save();

        return redirect('/events')->with('success', 'Commentaire créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Jobs\SendRsvpEmail;
use Illuminate\Http\RedirectResponse;
use App\Models\Event;

class RsvpController extends Controller
{
    public function store(Event $event): RedirectResponse
    {
        $event->users()->syncWithoutDetaching([auth()->id()]);

        SendRsvpEmail::dispatch(auth()->user(), $event);
        
        return back();
    }

    public function destroy(Event $event): RedirectResponse
    {
        $event->users()->detach(auth()->id());
        return back();
    } 
}

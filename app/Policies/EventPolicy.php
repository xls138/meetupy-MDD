<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Event;

class EventPolicy
{
    public function update(User $user, Event $event): bool
    {
        return $user->id === $event->meetupGroup->user_id;
    }
}
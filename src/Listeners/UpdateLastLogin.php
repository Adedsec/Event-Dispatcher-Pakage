<?php

namespace App\Listeners;

use App\Core\Event;
use App\Core\Listener;

class UpdateLastLogin extends Listener
{

    public function handle(Event $event)
    {
        echo "Last Login Updated for user " . $event->user->id;
    }
}
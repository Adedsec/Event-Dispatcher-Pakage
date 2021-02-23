<?php


namespace App\Tests\stubs;


use App\Core\Event;

class EventStub extends Event
{

    public function getName()
    {
        return "UserSignedIn";
    }
}
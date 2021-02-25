<?php


namespace App\Core;


use App\Tests\stubs\EventStub;

class Dispatcher
{

    protected $listeners = [];

    public function getListeners()
    {
        return $this->listeners;
    }

    public function addListener(string $name, Listener $listener)
    {
        return $this->listeners[$name][] = $listener;
    }

    public function getListenerByEvent(string $name)
    {
        return $this->hasListener($name)
            ? $this->listeners[$name]
            : [];
    }

    public function hasListener($name)
    {
        return isset($this->listeners[$name]);
    }

    public function dispatch(Event $event)
    {
        foreach ($this->getListenerByEvent($event->getName()) as $listener) {
            $listener->handle($event);
        }
    }
}
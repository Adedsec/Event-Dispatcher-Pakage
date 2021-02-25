<?php


namespace App\Core;


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
}
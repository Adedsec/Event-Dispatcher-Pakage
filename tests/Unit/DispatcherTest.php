<?php


use App\Core\Dispatcher;
use App\Tests\stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

class DispatcherTest extends TestCase
{
    /** @test */
    public function it_holds_listeners_in_array()
    {
        $dispatcher = new Dispatcher();
        $this->assertIsArray($dispatcher->getListeners());
        $this->assertEmpty($dispatcher->getListeners());
    }

    /** @test */
    public function it_can_add_listener()
    {
        $dispatcher = new Dispatcher();
        $dispatcher->addListener('UserSignedUp', new ListenerStub());

        $this->assertCount(1, $dispatcher->getListeners()['UserSignedUp']);
    }
}
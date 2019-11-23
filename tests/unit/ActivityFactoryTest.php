<?php

namespace HiQDev\SessionKeeper\tests\unit;

use PHPUnit\Framework\TestCase;
use HiQDev\SessionKeeper\Activity;
use HiQDev\SessionKeeper\Browser;
use HiQDev\SessionKeeper\Session;
use HiQDev\SessionKeeper\ActivityFactory;

class ActivityFactoryTest extends TestCase
{
    /**
     * @var ActivityFactory
     */
    private $factory;

    public function setUp(): void
    {
        parent::setUp();
        $this->factory = new ActivityFactory();
    }

    public function testFromArray()
    {
        $activity = $this->factory->fromArray([
            'client_id'     => 'user1',
            'description'   => 'Chrome on Ubuntu',
            'fingerprint'   => 'fin1',
            'ip'            => '1.1.1.1',
            'is_secure'     => true,
        ]);

        $this->assertInstanceOf(Activity::class, $activity);
    }
}

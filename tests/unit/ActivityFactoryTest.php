<?php
/**
 * Session token theft detection
 *
 * @link      https://github.com/hiqdev/session-keeper
 * @package   session-keeper
 * @license   MIT
 * @copyright Copyright (c) 2019, HiQDev (http://hiqdev.com/)
 */

namespace HiQDev\SessionKeeper\tests\unit;

use HiQDev\SessionKeeper\Activity;
use HiQDev\SessionKeeper\ActivityFactory;
use HiQDev\SessionKeeper\Browser;
use HiQDev\SessionKeeper\Session;
use PHPUnit\Framework\TestCase;

class ActivityFactoryTest extends TestCase
{
    /**
     * @var ActivityFactory
     */
    private $factory;

    private $ip1 = '1.1.1.1';
    private $ip2 = '2.2.2.2';

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
            'ip'            => $this->ip1,
            'is_secure'     => true,
        ]);
        $session = $activity->getSession();
        $browser = $session->getBrowser();

        $this->assertInstanceOf(Activity::class, $activity);
        $this->assertInstanceOf(Session::class, $session);
        $this->assertInstanceOf(Browser::class, $browser);

        $this->assertSame($this->ip1, $activity->getIp());
    }
}

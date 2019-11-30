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

    private $user1 = 'user1';
    private $user2 = 'user2';

    private $finger1 = 'finger1';
    private $finger2 = 'finger2';

    private $descr1 = 'Chrome on Ubuntu';
    private $descr2 = 'Firefox on Ubuntu';

    public function setUp(): void
    {
        parent::setUp();
        $this->factory = new ActivityFactory();
    }

    public function testFromArray()
    {
        $activity = $this->factory->fromArray([
            'client_id'     => $this->user1,
            'description'   => $this->descr1,
            'fingerprint'   => $this->finger1,
            'ip'            => $this->ip1,
            'is_secure'     => true,
        ]);
        $session = $activity->getSession();
        $browser = $session->getBrowser();

        $this->assertInstanceOf(Activity::class, $activity);
        $this->assertInstanceOf(Session::class, $session);
        $this->assertInstanceOf(Browser::class, $browser);

        $this->assertSame($this->ip1, $activity->getIp());

        $this->assertSame($this->descr1,    $browser->getDescription());
        $this->assertSame($this->finger1,   $browser->getFingerprint());
        $this->assertSame($this->user1,     $browser->getClientId());

        $this->assertTrue($session->isSecure());
    }
}

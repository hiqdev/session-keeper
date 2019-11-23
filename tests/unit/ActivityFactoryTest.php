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
use PHPUnit\Framework\TestCase;

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

<?php

namespace HiQDev\SessionKeeper\tests\unit;

use HiQDev\SessionKeeper\Activity;
use PHPUnit\Framework\TestCase;

class SessionKeeperTest extends TestCase
{
    /**
     * @var MockObject
     */
    private $repository;

    /**
     * @var SessionChecker
     */
    private $checker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function failedChecksDataProvider(): \Generator
    {
        yield [Activity::fromArray([
            'client_id'     => 'test1',
            'ip'            => '1.1.1.1',
            'description'   => 'Chrome on Ubuntu',
            'fingerprint'   => 'print1',
        ])];
    }

    public function successfulChecksDataProvider(): \Generator
    {
    }

    /**
     * @dataProvider successfulChecksDataProvider
     */
    public function testSuccessfulCheck(Activity $activity): void
    {
        $this->assertTrue($this->checker->check($activity));
    }

    /**
     * @dataProvider failedChecksDataProvider
     */
    public function testFailedCheck(Activity $activity): void
    {
        $this->assertFalse($this->checker->check($activity));
    }
}

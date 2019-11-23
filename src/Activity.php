<?php

namespace HiQDev\SessionKeeper;

use DateTimeImmutable;

/**
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Activity
{
    private $id;

    private $session;

    private $ip;

    private $time;

    public function __construct(Session $session, string $ip, DateTimeImmutable $time)
    {
        $this->session = $session;
        $this->ip = $ip;
        $this->time = $time;
    }
}

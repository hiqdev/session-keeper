<?php
/**
 * Session token theft detection
 *
 * @link      https://github.com/hiqdev/session-keeper
 * @package   session-keeper
 * @license   MIT
 * @copyright Copyright (c) 2019, HiQDev (http://hiqdev.com/)
 */

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

    public function getSession(): Session
    {
        return $this->session;
    }

    public function getIp(): string
    {
        return $this->ip;
    }
}

<?php

namespace HiQDev\SessionKeeper;

use DateTimeImmutable;

/**
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Session
{
    private $id;

    private $browser;

    private $is_secure;

    private $started;

    private $finished;

    /**
     * @param Browser $browser
     * @param bool $is_secure
     * @param DateTimeImmutable $started = null
     */
    public function __construct(Browser $browser, bool $is_secure, DateTimeImmutable $started = null)
    {
        $this->browser = $browser;
        $this->is_secure = $is_secure;
        $this->started = $started;
    }
}

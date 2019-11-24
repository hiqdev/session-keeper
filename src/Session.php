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
class Session
{
    private $id;

    private $browser;

    private $is_secure;

    private $started;

    private $finished;

    /**
     * @param DateTimeImmutable $started = null
     */
    public function __construct(Browser $browser, bool $is_secure, DateTimeImmutable $started = null)
    {
        $this->browser = $browser;
        $this->is_secure = $is_secure;
        $this->started = $started;
    }

    /**
     * Get the browser.
     */
    public function getBrowser(): Browser
    {
        return $this->browser;
    }
}

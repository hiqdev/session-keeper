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

/**
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class Browser
{
    private $id;

    private $client_id;

    private $description;

    private $fingerprint;

    public function __construct(string $client_id, string $description, string $fingerprint)
    {
        $this->client_id = $client_id;
        $this->description = $description;
        $this->fingerprint = $fingerprint;
    }

    public function getClientId(): string
    {
        return $this->client_id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFingerprint(): string
    {
        return $this->fingerprint;
    }
}

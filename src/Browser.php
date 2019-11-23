<?php

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
}

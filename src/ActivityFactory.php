<?php

namespace HiQDev\SessionKeeper;

use DateTimeImmutable;

/**
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
class ActivityFactory
{
    public function fromArray(array $data): Activity
    {
        $client_id = $data['client_id'] ?? null;
        $description = $data['description'] ?? null;
        $fingerprint = $data['fingerprint'] ?? null;
        $browser = new Browser($client_id, $description, $fingerprint);

        $is_secure = !empty($data['is_secure']);
        if (empty($data['started'])) {
            $data['started'] = 'now';
        }
        $started = new DateTimeImmutable($data['started']);
        $session = new Session($browser, $is_secure, $started);

        if (empty($data['time'])) {
            $data['time'] = 'now';
        }
        $time = new DateTimeImmutable($data['time']);
        $ip = $data['ip'] ?? null;

        return new Activity($session, $ip, $time);
    }
}

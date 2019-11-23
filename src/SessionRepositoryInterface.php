<?php

namespace hiapi\legacy\lib\security;

/**
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
interface SessionRepositoryInterface
{
    public function saveActivity(Activity $activity);
}

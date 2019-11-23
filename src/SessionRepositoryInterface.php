<?php
/**
 * Session token theft detection
 *
 * @link      https://github.com/hiqdev/session-keeper
 * @package   session-keeper
 * @license   MIT
 * @copyright Copyright (c) 2019, HiQDev (http://hiqdev.com/)
 */

namespace hiapi\legacy\lib\security;

/**
 * @author Andrii Vasyliev <sol@hiqdev.com>
 */
interface SessionRepositoryInterface
{
    public function saveActivity(Activity $activity);
}

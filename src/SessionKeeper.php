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
class SessionKeeper
{
    /**
     * @var SessionRepositoryInterface
     */
    private $repository;

    public function __construct(SessionRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function login(Activity $activity)
    {
        if ($activity->getSession()->isSecure()) {
            $this->repository->saveActivity($activity);
        }
    }

    public function check(Activity $activity): bool
    {
        var_dump(__FILE__ . ':' . __LINE__ . ' ' . __METHOD__, func_get_args());
        die;

        return false;
    }

    public function removeBrowser(Browser $browser)
    {
        $this->repository->removeBrowser($browser);
    }
}

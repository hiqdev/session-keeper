<?php

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
        $this->repository->saveActivity($activity);
    }

    public function check(Activity $activity): bool
    {

        var_dump(__FILE__ . ':' . __LINE__ . ' ' . __METHOD__, func_get_args());die;
        return false;
    }
}

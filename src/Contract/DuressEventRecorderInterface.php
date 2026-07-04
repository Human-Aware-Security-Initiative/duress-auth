<?php

namespace Zigr\DuressAuth\Contract;

use Zigr\DuressAuth\Domain\DuressAction;

interface DuressEventRecorderInterface
{
    /**
     * @param array<string, mixed> $context
     */
    public function record(
        string $userId,
        DuressAction $action,
        array $context = [],
    ): void;
}

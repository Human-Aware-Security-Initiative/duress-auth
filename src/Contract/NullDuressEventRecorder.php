<?php

namespace Zigr\DuressAuth\Contract;

use Zigr\DuressAuth\Domain\DuressAction;

final class NullDuressEventRecorder implements DuressEventRecorderInterface
{
    public function record(
        string $userId,
        DuressAction $action,
        array $context = [],
    ): void {
        // intentionally empty
    }
}

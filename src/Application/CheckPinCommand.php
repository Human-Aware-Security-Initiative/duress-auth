<?php

namespace Zigr\DuressAuth\Application;

use Zigr\DuressAuth\Domain\DuressAction;

final readonly class CheckPinCommand
{
    /**
     * @param array<string, DuressAction> $duressPinHashes
     * @param array<string, mixed> $context
     */
    public function __construct(
        public string $userId,
        public string $plainPin,
        public string $normalPinHash,
        public array $duressPinHashes = [],
        public array $context = [],
    ) {}
}

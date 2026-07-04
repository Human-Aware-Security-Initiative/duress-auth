<?php

namespace Zigr\DuressAuth\Domain;

use Zigr\DuressAuth\Domain\DuressAction;


final readonly class DuressResult
{
    public function __construct(
        public bool $authenticated,
        public bool $duress,
        public DuressAction $action,
    ) {}

    public static function normal(): self
    {
        return new self(true, false, DuressAction::None);
    }

    public static function invalid(): self
    {
        return new self(false, false, DuressAction::None);
    }

    public static function duress(DuressAction $action): self
    {
        return new self(true, true, $action);
    }
}

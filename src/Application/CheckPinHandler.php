<?php

namespace Zigr\DuressAuth\Application;

use Zigr\DuressAuth\Contract\DuressEventRecorderInterface;
use Zigr\DuressAuth\Domain\DuressResult;
use Zigr\DuressAuth\Domain\PinVerifier;

final readonly class CheckPinHandler
{
    public function __construct(
        private PinVerifier $pinVerifier,
        private DuressEventRecorderInterface $eventRecorder,
    ) {}

    public function handle(CheckPinCommand $command): DuressResult
    {
        $result = $this->pinVerifier->verify(
            plainPin: $command->plainPin,
            normalPinHash: $command->normalPinHash,
            duressPinHashes: $command->duressPinHashes,
        );

        if ($result->authenticated && $result->duress) {
            $this->eventRecorder->record(
                userId: $command->userId,
                action: $result->action,
                context: $command->context,
            );
        }

        return $result;
    }
}

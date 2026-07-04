<?php

namespace Zigr\DuressAuth\Domain;

final readonly class PinVerifier
{
    public function __construct(
        private PinHashVerifierInterface $hashVerifier,
    ) {}

    /**
     * @param array<string, DuressAction> $duressPinHashes
     */
    public function verify(
        string $plainPin,
        string $normalPinHash,
        array $duressPinHashes = [],
    ): DuressResult {
        if ($this->hashVerifier->verify($plainPin, $normalPinHash)) {
            return DuressResult::normal();
        }

        foreach ($duressPinHashes as $hash => $action) {
            if ($this->hashVerifier->verify($plainPin, $hash)) {
                return DuressResult::duress($action);
            }
        }

        return DuressResult::invalid();
    }
}

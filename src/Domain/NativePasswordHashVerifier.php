<?php

namespace Zigr\DuressAuth\Domain;

final class NativePasswordHashVerifier implements PinHashVerifierInterface
{
    public function verify(string $plainPin, string $hash): bool
    {
        return \password_verify($plainPin, $hash);
    }
}

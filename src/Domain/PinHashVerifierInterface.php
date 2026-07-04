<?php

namespace Zigr\DuressAuth\Domain;

interface PinHashVerifierInterface
{
    public function verify(string $plainPin, string $hash): bool;
}

<?php

namespace Zigr\DuressAuth\Tests;

use PHPUnit\Framework\TestCase;
use Zigr\DuressAuth\Domain\DuressAction;
use Zigr\DuressAuth\Domain\NativePasswordHashVerifier;
use Zigr\DuressAuth\Domain\PinVerifier;

final class PinVerifierTest extends TestCase
{
    public function testNormalPinAuthenticatesNormally(): void
    {
        $verifier = new PinVerifier(new NativePasswordHashVerifier());

        $result = $verifier->verify(
            plainPin: '123456',
            normalPinHash: password_hash('123456', PASSWORD_DEFAULT),
            duressPinHashes: [
                password_hash('2580', PASSWORD_DEFAULT) => DuressAction::SilentAlert,
            ],
        );

        self::assertTrue($result->authenticated);
        self::assertFalse($result->duress);
        self::assertSame(DuressAction::None, $result->action);
    }

    public function testDuressPinAuthenticatesWithDuressFlag(): void
    {
        $verifier = new PinVerifier(new NativePasswordHashVerifier());

        $result = $verifier->verify(
            plainPin: '2580',
            normalPinHash: password_hash('123456', PASSWORD_DEFAULT),
            duressPinHashes: [
                password_hash('2580', PASSWORD_DEFAULT) => DuressAction::SilentAlert,
            ],
        );

        self::assertTrue($result->authenticated);
        self::assertTrue($result->duress);
        self::assertSame(DuressAction::SilentAlert, $result->action);
    }

    public function testInvalidPinFails(): void
    {
        $verifier = new PinVerifier(new NativePasswordHashVerifier());

        $result = $verifier->verify(
            plainPin: '000000',
            normalPinHash: password_hash('123456', PASSWORD_DEFAULT),
            duressPinHashes: [
                password_hash('2580', PASSWORD_DEFAULT) => DuressAction::SilentAlert,
            ],
        );

        self::assertFalse($result->authenticated);
        self::assertFalse($result->duress);
        self::assertSame(DuressAction::None, $result->action);
    }
}

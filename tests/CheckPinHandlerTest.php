<?php

namespace Zigr\DuressAuth\Tests;


use Zigr\DuressAuth\Application\CheckPinCommand;
use Zigr\DuressAuth\Application\CheckPinHandler;
use Zigr\DuressAuth\Contract\NullDuressEventRecorder;
use Zigr\DuressAuth\Domain\DuressAction;
use Zigr\DuressAuth\Domain\NativePasswordHashVerifier;
use Zigr\DuressAuth\Domain\PinVerifier;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DoesNotPerformAssertions;

final class CheckPinHandlerTest extends TestCase
{
    #[DoesNotPerformAssertions]
    public function testRecordDoesNothingAndThrowsNoExceptions(): void
    {
        // 1. Arrange

        $user = new class {
            public string $userId = 'user-123';
            public string $normalPinHash = '123456';
            public string $silentAlertPinHash = '2580';
            public string $safeModePinHash = '7540';
        };

        $handler = new CheckPinHandler(
            new PinVerifier(new NativePasswordHashVerifier()),
            new NullDuressEventRecorder(),
        );

        // 2. Act & Assert
        $result = $handler->handle(new CheckPinCommand(
            userId: $user->userId,
            plainPin: $user->silentAlertPinHash,
            normalPinHash: $user->normalPinHash,
            duressPinHashes: [
                $user->silentAlertPinHash => DuressAction::SilentAlert,
                $user->safeModePinHash => DuressAction::SafeMode,
            ],
            context: [
                'ip' => $_SERVER['REMOTE_ADDR'] ?? null,
                'user_agent' => $_SERVER['HTTP_USER_AGENT'] ?? null,
            ],
        ));
    }
}

<?php

namespace Zigr\DuressAuth\Domain;

enum DuressAction: string
{
    case None = 'none';
    case SilentAlert = 'silent_alert';
    case SafeMode = 'safe_mode';
    case BlockSensitiveActions = 'block_sensitive_actions';
}

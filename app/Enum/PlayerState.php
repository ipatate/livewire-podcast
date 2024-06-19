<?php

namespace App\Enum;

enum PlayerState: string {
    case paused = 'pause';
    case playing = 'play';
}

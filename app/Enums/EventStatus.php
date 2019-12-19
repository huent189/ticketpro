<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EventStatus extends Enum
{
    const Draft = 0;
    const Pending = 1;
    const Accepted = 2;
    const OnSelling= 4;
    const EndSelling = 5;
    const Ongoing = 6;
    const Ended = 7;
    const Canceled = 8;
}

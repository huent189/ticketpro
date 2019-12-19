<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class BookingStatus extends Enum
{
    const Draft = 0;
    const Holding = 1;
    const WaitingForPayment = 2;
    const Paid = 3;
    const Finished = 4;
    const Canceled = 5;
}

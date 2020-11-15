<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static RETAIL()
 * @method static static WHOLESALE()
 */
final class OrderType extends Enum
{
    const RETAIL =   'retail';
    const WHOLESALE =   'wholesale';
}

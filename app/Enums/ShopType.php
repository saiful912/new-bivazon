<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static WHOLESALE()
 * @method static static RETAIL()
 */
final class ShopType extends Enum
{
    const WHOLESALE = 'wholesale';
    const RETAIL = 'retail';
//    const AFFILIATE = 'affiliate';
}

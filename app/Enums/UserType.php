<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static MERCHANT()
 * @method static static AFFILIATE()
 * @method static static RETAIL()
 */
final class UserType extends Enum
{
    const ADMIN = 'admin';

    const MERCHANT = 'merchant';

    const AFFILIATE = 'affiliate';

    const RETAIL = 'retail';
}

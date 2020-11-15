<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PENDING()
 * @method static static FAILED()
 * @method static static CONFIRMED()
 * @method static static COMPLETED()
 * @method static static PROCESSING()
 * @method static static CANCELED()
 * @method static static ON_HOLD()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{
    const PENDING = 'pending';

    const PROCESSING = 'processing';

    const CANCELED = 'canceled';

    const FAILED = 'failed';

    const ON_HOLD = 'onhold';

    const CONFIRMED = 'confirmed';

    const COMPLETED = 'completed';
}

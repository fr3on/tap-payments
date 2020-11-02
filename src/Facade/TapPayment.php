<?php

namespace Fr3on\TapPayment\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class TapPayment
 *
 * @package Fr3on\TapPayment\Facade
 *
 * @method static \Fr3on\TapPayment\Services\Charge createCharge()
 * @method static \Fr3on\TapPayment\Resources\Invoice findCharge()
 */
class TapPayment extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'tap-payment';
	}
}
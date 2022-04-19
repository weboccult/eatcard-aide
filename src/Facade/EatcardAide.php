<?php

namespace Weboccult\EatcardAide\Facade;

use Illuminate\Support\Facades\Facade;
use Weboccult\EatcardAide\EatcardAide as EatcardAideCore;

/**
 * @method static setName(string $name)
 *
 * @method static announce()
 *
 * @mixin EatcardAideCore
 *
 * @return EatcardAideCore
 *
 * @see EatcardAideCore
 */
class EatcardAide extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
		return EatcardAideCore::class;
    }
}

<?php

namespace Weboccult\EatcardAide\Helpers;

use Weboccult\EatcardAide\EatcardAide;

//if (! function_exists('eatcardAide')) {
	/**
	 *
	 * Access EatcardAide through helper function...
	 *
	 * @return EatcardAide
	 */
	function eatcardAide(): EatcardAide
	{
		return app(EatcardAide::class);
	}
//}

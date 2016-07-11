<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Companies extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Orders\Companies\Companies'; }

	}

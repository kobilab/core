<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Orders extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Orders\Orders\Orders'; }

	}

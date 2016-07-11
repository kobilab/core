<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class OrderDetails extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Orders\Orders\OrderDetails'; }

	}

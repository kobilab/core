<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class CheckOrderStatus extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Orders\Orders\CheckOrderStatus'; }

	}

<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class ProductionOrders extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Manufacturing\ProductionOrders'; }

	}

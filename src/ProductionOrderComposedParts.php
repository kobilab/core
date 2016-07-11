<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class ProductionOrderComposedParts extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Manufacturing\ProductionOrderComposedParts'; }

	}

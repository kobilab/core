<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class ProductionOrderNeededParts extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Manufacturing\ProductionOrderNeededParts'; }

	}

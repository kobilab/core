<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class ProductionOrderRotations extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Manufacturing\ProductionOrderRotations'; }

	}

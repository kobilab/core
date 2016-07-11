<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class ProductionControl extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Manufacturing\ProductionControl'; }

	}

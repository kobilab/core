<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class PredefineProductionOrder extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Manufacturing\PredefineProductionOrder'; }

	}

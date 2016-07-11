<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Routes extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\Routes\Routes'; }

	}

<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Boms extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\Boms\Boms'; }

	}

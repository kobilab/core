<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class BomComposedParts extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\Boms\Details\BomComposedParts'; }

	}

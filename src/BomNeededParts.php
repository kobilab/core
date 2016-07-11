<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class BomNeededParts extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\Boms\Details\BomNeededParts'; }

	}

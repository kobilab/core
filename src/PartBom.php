<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class PartBom extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\PartBomRouteWorkTypeWorkCenter\PartBom'; }

	}

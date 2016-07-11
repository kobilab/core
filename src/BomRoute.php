<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class BomRoute extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\PartBomRouteWorkTypeWorkCenter\BomRoute'; }

	}

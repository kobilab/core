<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class WorkTypeWorkCenter extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\PartBomRouteWorkTypeWorkCenter\WorkTypeWorkCenter'; }

	}

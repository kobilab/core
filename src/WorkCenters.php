<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class WorkCenters extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\WorkCenters\WorkCenters'; }

	}

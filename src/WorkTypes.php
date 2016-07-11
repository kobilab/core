<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class WorkTypes extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\WorkTypes\WorkTypes'; }

	}

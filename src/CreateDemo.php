<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class CreateDemo extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Commands\CreateDemo'; }

	}

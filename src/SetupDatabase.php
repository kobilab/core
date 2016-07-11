<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class SetupDatabase extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Commands\SetupDatabase'; }

	}

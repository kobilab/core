<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Events extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Utilize\Events'; }

	}

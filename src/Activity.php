<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Activity extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Utilize\Activity'; }

	}

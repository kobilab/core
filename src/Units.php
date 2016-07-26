<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Units extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\Parts\Units'; }

	}

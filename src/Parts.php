<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Parts extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\Parts\Parts'; }

	}

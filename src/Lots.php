<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Lots extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Inventory\Lots'; }

	}

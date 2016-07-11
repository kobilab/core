<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class BomPartAndRoute extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Production\PartBomRoute\BomPartAndRoute'; }

	}

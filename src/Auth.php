<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Auth extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Auth\Auth'; }

	}

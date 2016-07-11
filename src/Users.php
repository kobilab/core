<?php

	namespace KobiLab;

	use Illuminate\Support\Facades\Facade;

	class Users extends Facade {

		protected static function getFacadeAccessor() { return 'KobiLab\Framework\Auth\Users'; }

	}

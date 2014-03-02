<?php

namespace Veridu\SDK\Exception;

use Veridu\Exception\Exception;

class EmptyWidgetUsername extends Exception {
	protected $message = 'A username is required to create a widget endpoint.';
}
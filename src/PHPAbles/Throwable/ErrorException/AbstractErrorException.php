<?php

declare(strict_types=1);

namespace PHPAbles\Throwable\ErrorException;

use \ErrorException as BaseErrorException;

abstract class AbstractErrorException extends BaseErrorException implements ErrorExceptionInterface
{ }

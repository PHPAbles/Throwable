<?php

declare(strict_types=1);

namespace PHPAbles\Throwable;

use PHPAbles\Stringable\StringableInterface;
use \Throwable as BaseThrowable;

interface ThrowableInterface extends StringableInterface
{
    public function getMessage(): string;
    public function getCode(): int;
    public function getFile(): string;
    public function getLine(): int;
    public function getTrace(): array;
    public function getTraceAsString(): string;
    public function getPrevious(): ?BaseThrowable;
}

<?php

declare(strict_types=1);

namespace PHPAbles\Throwable;

abstract class AbstractThrowable extends ThrowableInterface
{
    abstract public function getMessage(): string;
    abstract public function getCode(): int;
    abstract public function getFile(): string;
    abstract public function getLine(): int;
    abstract public function getTrace(): array;
    abstract public function getTraceAsString(): string;
    abstract public function getPrevious(): ?BaseThrowable;
}

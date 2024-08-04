<?php

namespace App\Command;

use ArrayObject;

final readonly class Dto
{
    /**
     * @param ArrayObject<string,mixed> $prop
     */
    public function __construct(
        public ArrayObject $prop
    ) {
    }
}

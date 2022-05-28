<?php

declare(strict_types=1);

namespace BrandHub\Brief\Storage\Exceptions;

final class ReferenceNotFound extends \Exception
{
    public function __construct()
    {
        parent::__construct('Reference not found');
    }
}

<?php

declare(strict_types=1);

namespace BrandHub\Brief\Storage\Exceptions;

final class OfferNotFound extends \Exception
{
    public function __construct()
    {
        parent::__construct('Offer not found');
    }
}

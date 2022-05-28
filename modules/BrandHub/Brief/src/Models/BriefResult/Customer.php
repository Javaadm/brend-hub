<?php

declare(strict_types=1);

namespace BrandHub\Brief\Models\BriefResult;

final class Customer
{
    public string $name;
    public string $phone;
    public string $email;

    public function __construct(string $name, string $phone, string $email)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
    }
}

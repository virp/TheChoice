<?php

namespace TheChoice\Tests\Integration\Contexts;

use TheChoice\Context\ContextInterface;

class DepositCount implements ContextInterface
{
    public function getValue()
    {
        return 2;
    }
}
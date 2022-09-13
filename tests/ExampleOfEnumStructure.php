<?php
declare(strict_types=1);

namespace Lcobucci;

enum ExampleOfEnumStructure: string
{
    case Test1 = 'test-1';
    case Test2 = 'test-2';
    case Test3 = 'test-3';

    public function asString(): string
    {
        return $this->value;
    }
}

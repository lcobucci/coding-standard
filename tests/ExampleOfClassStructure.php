<?php
declare(strict_types=1);

namespace Lcobucci;

/**
 * Order should be:
 *
 * 1. traits
 * 2. Constants (no strict order regarding visibility)
 * 3. Properties (no strict order regarding visibility/static)
 * 4. Constructor
 * 5. All remaining methods (no strict order regarding visibility/static/final/magic)
 */
class ExampleOfClassStructure
{
    use RandomTrait;

    private const FOO   = 1;
    public const BAR    = 2;
    private const BAZ   = 3;
    protected const QUX = 4;

    public int $foo;
    protected string $bar;
    public static int $baz = self::BAZ;
    private int $qux;

    public function __construct()
    {
        $this->foo = self::FOO;
        $this->qux = self::QUX;
    }

    public function a(): void
    {
        self::b();

        echo $this->qux;
    }

    public function __get(string $name): bool
    {
        return false;
    }

    private static function b(): void
    {
    }

    public function __isset(string $name): bool
    {
        return false;
    }

    final protected function c(): void
    {
    }

    /** @param mixed $value */
    public function __set(string $name, $value): void
    {
    }
}

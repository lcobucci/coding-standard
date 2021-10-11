<?php
declare(strict_types=1);

namespace Lcobucci;

use function var_dump;

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

    protected string $bar;
    public static int $baz = self::BAZ;
    public int|float|null $aNumber;

    public function __construct(
        public int $foo = self::FOO,
        private ?int $qux = self::QUX,
    ) {
        $this->aNumber = 1;
    }

    public function a(): void
    {
        self::b();

        echo $this->qux;
    }

    public function __get(string $name): bool
    {
        return $name === 'foo';
    }

    private static function b(): void
    {
    }

    public function __isset(string $name): bool
    {
        return $name === 'bar';
    }

    final protected function c(): void
    {
    }

    public function __set(string $name, mixed $value): void
    {
        var_dump($name, $value);
    }
}

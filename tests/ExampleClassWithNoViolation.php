<?php
declare(strict_types=1);

namespace Lcobucci;

use ArrayObject;
use Closure;
use Countable;
use Exception;
use RuntimeException;
use Throwable;
use Traversable;

use function count;
use function sprintf;
use function time;

use const PHP_EOL;

/**
 * @runTestsInSeparateProcesses
 *
 * @coversDefaultClass
 *
 * @uses RuntimeException
 */
final class ExampleClassWithNoViolation
{
    private int $test = 0;

    /** @var list<int> */
    private array $testing = [];

    /**
     * @internal
     * @deprecated
     *
     * @link
     * @see Testing =)
     *
     * @before
     * @beforeClass
     * @after
     * @afterClass
     *
     * @Given
     * @Then
     * @When
     * @Transform
     * @BeforeSuite
     * @AfterSuite
     * @BeforeFeature
     * @AfterFeature
     * @BeforeScenario
     * @AfterScenario
     * @BeforeStep
     * @AfterStep
     *
     * @ORM\Entity
     * @ODM\Entity
     *
     * @throws Exception When things go very bad.
     *
     * @Serializer\Type("string")
     * @Target
     * @AfterMethods
     * @Attribute
     * @Attributes
     * @BeforeMethods
     * @Enum
     * @Groups
     * @IgnoreAnnotation
     * @Iterations
     * @Required
     * @Revs
     */
    public function aMethodWithAllUsefulAnnotations(): void
    {
        echo PHP_EOL;
        echo $this->test;

        throw new RuntimeException('Exception class must be properly imported');
    }

    /**
     * @test
     * @group
     * @dataProvider
     * @depends
     * @doesNotPerformAssertions
     * @runInSeparateProcess
     * @testWith [["test", 4]]
     *
     * @testdox Super test!
     *
     * @covers
     * @coversNothing
     *
     * @uses
     */
    public function sampleForPHPUnitTests(): void
    {
        echo sprintf('Testing %d', 1);
        echo $this->test;
        echo count($this->testing);
    }

    /** @test */
    public function sampleWithOnlyOneAnnotation(): void
    {
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     *
     * @return T
     */
    public function sampleForGenerics(string $className): object
    {
        return new $className();
    }

    public function nullSafeOperator(): void
    {
        $object = null;

        if (time() === 0) {
            $object = (object) ['test' => 1];
        }

        echo $object?->test;
    }

    public function incrementAndDecrement(): void
    {
        $i = 0;
        $i++;
        ++$i;
        $i--;
        --$i;
    }

    /**
     * @template T of object
     *
     * @phpstan-param Closure():T $test
     *
     * @phpstan-return T
     */
    public function sampleForPHPStanAnnotations(Closure $test): object
    {
        return $test();
    }

    /**
     * @template T of object
     *
     * @phpstan-param Closure():T $test
     *
     * @phpstan-return T
     */
    public function sampleForPsalmAnnotations(Closure $test): object
    {
        return $test();
    }

    public function sampleForTrailingIf(ArrayObject $collection): void
    {
        $collection->append(1);
        $collection->append(2);

        if (time() === 0) {
            $collection->append(4);
        }
    }

    public function sampleForTrailingOnLoop(ArrayObject $collection): void
    {
        foreach ([1, 2, 3, 4, 5, 6] as $value) {
            if ($value % 2 === 0) {
                $collection->append($value);
            }
        }
    }

    public function sampleForNonCapturingCatch(): void
    {
        try {
            $this->incrementAndDecrement();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        } catch (Throwable) {
            // ignore this
        }
    }

    public function sampleForMultiLineDeclaration(
        int $one,
        int $two,
        int $three,
        int $four,
    ): void {
        echo $one + $two + $three + $four;
    }

    public function sampleFormMultiLineCall(): void
    {
        $this->sampleForMultiLineDeclaration(
            1,
            2,
            3,
            4,
        );
    }

    public function sampleUnionAndIntersection(
        Traversable&Countable $items,
        int|float|null $value,
        ?int $shortNullableIsStillAllowed,
    ): void {
        echo count($items) + ($value ?? 0);

        foreach ($items as $item) {
            echo $item;
        }

        if ($shortNullableIsStillAllowed !== null) {
            echo $shortNullableIsStillAllowed;
        }
    }
}

<?php
declare(strict_types=1);

namespace Lcobucci;

use Exception;
use RuntimeException;

use function count;
use function sprintf;

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
}

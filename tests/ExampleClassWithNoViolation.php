<?php
declare(strict_types=1);

namespace Lcobucci;

use function sprintf;
use const PHP_EOL;

/**
 * @runTestsInSeparateProcesses
 *
 * @coversDefaultClass
 *
 * @uses \RuntimeException
 */
final class ExampleClassWithNoViolation
{
    private int $test = 0;

    /**
     * @internal
     * @deprecated
     *
     * @link
     * @see Testing =)
     * @Serializer\Type("string")
     * @Target
     * @Then
     * @throws \Exception When things go very bad.
     * @Transform
     * @When
     *
     * @ORM\Entity
     * @ODM\Entity
     *
     * @after
     * @afterClass
     * @AfterFeature
     * @AfterMethods
     * @AfterScenario
     * @AfterStep
     * @AfterSuite
     * @Attribute
     * @Attributes
     * @before
     * @beforeClass
     * @BeforeFeature
     * @BeforeMethods
     * @BeforeScenario
     * @BeforeStep
     * @BeforeSuite
     * @Enum
     * @Given
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
    }

    /**
     * @test
     * @group
     * @dataProvider
     * @depends
     * @doesNotPerformAssertions
     * @runInSeparateProcess
     *
     * @expectedDeprecation
     * @expectedException
     * @expectedExceptionCode
     * @expectedExceptionMessage
     * @expectedExceptionMessageRegExp
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
    }
}

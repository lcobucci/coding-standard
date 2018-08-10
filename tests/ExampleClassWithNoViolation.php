<?php
declare(strict_types=1);

namespace Lcobucci;

final class ExampleClassWithNoViolation
{
    /**
     * @var int
     */
    private $test = 0;

    /**
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
     * @covers
     * @coversDefaultClass
     * @coversNothing
     * @dataProvider
     * @depends
     * @deprecated
     * @Enum
     * @expectedDeprecation
     * @expectedException
     * @expectedExceptionCode
     * @expectedExceptionMessage
     * @expectedExceptionMessageRegExp
     * @Given
     * @group
     * @Groups
     * @IgnoreAnnotation
     * @internal
     * @Iterations
     * @link
     * @ODM\Entity
     * @ORM\Entity
     * @Required
     * @Revs
     * @runInSeparateProcess
     * @runTestsInSeparalibteProcesses
     * @see Testing =)
     * @Serializer\Type("string")
     * @Target
     * @test
     * @Then
     * @throws \Exception When things go very bad.
     * @Transform
     * @uses
     * @When
     */
    public function aMethodWithAllUsefulAnnotations(): void
    {
        echo $this->test;
    }
}

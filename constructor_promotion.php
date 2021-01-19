<?php

class TestClass
{
    private $name = 'TestClass';

    public function getName(): string
    {
        return $this->name;
    }
}

class Test2Class
{
    private $name = 'Test2Class';

    public function getName(): string
    {
        return $this->name;
    }
}

class ConstructorPromotionExample
{
    public function __construct(
      protected TestClass $testClass,
      private Test2Class $test2Class
    ) {
    }

    public function getTestClass(): TestClass
    {
        return $this->testClass;
    }

    public function getTest2Class(): Test2Class
    {
        return $this->test2Class;
    }
}

$testObject  = new TestClass();
$test2Object = new Test2Class();

$constructorTestObject = new ConstructorPromotionExample(
  $testObject,
  $test2Object
);

echo $constructorTestObject->getTestClass()->getName().PHP_EOL;
echo $constructorTestObject->getTest2Class()->getName().PHP_EOL;

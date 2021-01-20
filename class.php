<?php

interface TestInterface
{
    public function someMethod(): void;
}

class TestA implements TestInterface
{
    public function someMethod(): void
    {
        //...
    }
}

class TestB extends TestA
{

}

$object = new TestB();
echo $object::class . PHP_EOL;

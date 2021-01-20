<?php

class TestString
{
    public function __toString(): string
    {
        return 'Some test string';
    }
}

function stringableTest(string|stringable $stringOrObject) {
    echo $stringOrObject;
}

$object = new TestString();

stringableTest($object);

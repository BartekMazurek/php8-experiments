<?php

class MixedTest
{
    private const FIRST = 0;
    private const SECOND = 1;
    private const THIRD = 2;
    private const FOURTH = 3;
    private const FIFTH = 4;

    public static function getSomeData(): mixed
    {
        $id = rand(0, 4);

        return match ($id) {
            self::FIRST => 'Some data',
            self::SECOND => 99,
            self::THIRD => 99.99,
            self::FOURTH => [],
            self::FIFTH => null
        };
    }
}

$data = MixedTest::getSomeData();
var_dump($data);

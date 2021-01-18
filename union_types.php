<?php

class UnionTypesExample {

    private int|string $id;

    public function __construct(int|string $id)
    {
        $this->id = $id;
    }

    public function getId(): int|string
    {
        return $this->id;
    }
}

$id = 1;
$example = new UnionTypesExample($id);
echo $example->getId() . PHP_EOL;

$id2 = '2';
$example2 = new UnionTypesExample($id2);
echo $example2->getId() . PHP_EOL;


<?php

// FUNCTION

function namedArgumentsExample(
  string $firstArgument,
  string $secondArgument,
  int $thirdArgument
) {
    echo 'First argument: ' . $firstArgument . PHP_EOL;
    echo 'Second argument: ' . $secondArgument . PHP_EOL;
    echo 'Third argument: ' . $thirdArgument . PHP_EOL;
}

namedArgumentsExample(
  firstArgument: 'Some first argument',
  secondArgument: 'Some second argument',
  thirdArgument: 10
);

// CLASS

class NamedArgumentsClassExample {

    private string $firstProperty;
    private string $secondProperty;

    public function __construct(
      string $firstProperty,
      string $secondProperty
    ) {
        $this->firstProperty = $firstProperty;
        $this->secondProperty = $secondProperty;
    }

    public function getFirstProperty(): string
    {
        return $this->firstProperty;
    }

    public function getSecondProperty(): string
    {
        return $this->secondProperty;
    }
}

$example = new NamedArgumentsClassExample(
  firstProperty: 'Test',
  secondProperty: 'Test 2'
);

echo $example->getFirstProperty() . PHP_EOL;
echo $example->getSecondProperty() . PHP_EOL;


// CLASS 2

class Product {

    private string $name;
    private float $price;

    public function __construct(
        string $name,
        float $price
    ) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}

$productProperties = [
  'name' => 'Shoes',
  'price' => 10.99
];

$product = new Product(...$productProperties);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

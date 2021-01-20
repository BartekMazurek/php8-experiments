<?php

class Invoice
{
    private ?DateTimeInterface $createdAt;

    public function __construct(?DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }
}

$invoice = new Invoice(new DateTimeImmutable());
//$invoice = new Invoice(null);

$invoiceDate = $invoice->getCreatedAt()?->format('Y-m-d H:i');

var_dump($invoiceDate);

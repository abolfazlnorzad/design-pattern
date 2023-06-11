<?php

namespace Src\Decorator\InvoicePrice;

class InvoicePriceDecorator implements InvoicePrice
{
    public function __construct(protected InvoicePrice $invoicePrice)
    {
    }

    public function price(): int
    {
       return $this->invoicePrice->price();
    }
}

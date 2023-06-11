<?php

namespace Src\Decorator\InvoicePrice;

class InvoiceController
{
    public function calcPrice()
    {
        $invoice = new Invoice();
        $serviceInvoice = new ServiceInvoicePrice($invoice);
        $VATInvpice = new VATInvoicePrice($serviceInvoice);
        $VATInvpice->price();
    }
}

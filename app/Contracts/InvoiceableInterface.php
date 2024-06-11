<?php

namespace App\Contracts;

use App\Models\Invoice;
use App\Models\Order;

interface InvoiceableInterface
{
    
    public function invoices();
    public function orders();

    public function addInvoice(Invoice $invoice);
    public function addOrder(Order $order);

    public function getTotalAmountDue();

}
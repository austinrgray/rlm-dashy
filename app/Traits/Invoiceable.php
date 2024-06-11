<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\Invoice;
use App\Models\Order;

trait Invoiceable
{

    public function invoices(): MorphMany 
    {
        return $this->morphMany(Invoice::class, 'invoiceable');
    }

    public function orders(): MorphMany 
    {
        return $this->morphMany(Order::class, 'invoiceable');
    }

    public function addInvoice(Invoice $invoice) 
    {
        return $this->invoices()->save($invoice);
    }

    public function addOrder(Order $order) 
    {
        return $this->orders()->save($order);
    }

    public function getTotalAmountDue()
    {
        //Sum total of all unpaidInvoices
    }

}
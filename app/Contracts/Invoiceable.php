<?php

namespace App\Contracts;
use App\Models\Invoice;

interface Invoiceable
{
    public function createInvoice(array $invoiceDetails): Invoice;
    /*
    public function getAllInvoices(): \Illuminate\Database\Eloquent\Collection;
    public function getUnpaidInvoices(): \Illuminate\Database\Eloquent\Collection;
    public function getTotalAmountDue(): float;
    public function updateAmountDue(): float;
    public function markInvoiceAsPaid(Invoice $invoice): void;
    public function getLastInvoice(): ?Invoice;
    public function getInvoiceById(int $invoiceId): ?Invoice;
    public function cancelInvoice(Invoice $invoice): void;
    public function calculateInvoiceTotal(array $invoiceItems): float;
    */
}
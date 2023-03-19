<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;

    /**
     * Get the customer that owns the Invoice
     * @return BelongsTo
     */
    public function customers()
    {
        return $this->belongsTo(Customer::class);
    }
}

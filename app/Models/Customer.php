<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'zip_code',
        'password',
    ];

    /**
     * Get the invoices for the customer.
     * @return HasMany
     */
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

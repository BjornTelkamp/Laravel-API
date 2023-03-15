<?php

namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class InvoiceFilters extends ApiFilters{

    protected $allowedParams = [
        'customer_id' => ['eq'],
        'amount' => ['eq'],
        'status' => ['eq'],
        'billed_date' => ['eq'],
        'paid_date' => ['eq']

    ];

    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'neq' => '!=',
        'gt' => '>',
        'gte' => '>=',
        'lt' => '<',
        'lte' => '<=',
        'like' => 'LIKE',
        'nlike' => 'NOT LIKE',
        'in' => 'IN',
        'nin' => 'NOT IN'
    ];

}

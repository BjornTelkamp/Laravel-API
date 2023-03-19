<?php

namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class InvoiceFilters extends ApiFilters{

    /**
     * Allowed parameters for filtering
     * @var array[]
     */
    protected $allowedParams = [
        'customer_id' => ['eq'],
        'amount' => ['eq'],
        'status' => ['eq'],
        'billed_date' => ['eq'],
        'paid_date' => ['eq']

    ];

    /**
     * Column conversion map
     * @var string[]
     */
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_date',
        'paidDate' => 'paid_date'
    ];

    /**
     * Operator conversion map
     * @var string[]
     */
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

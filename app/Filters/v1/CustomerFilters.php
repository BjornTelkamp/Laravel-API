<?php

namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class CustomerFilters extends ApiFilters{

    /**
     * Allowed parameters for filtering
     * @var array[]
     */
    protected $allowedParams = [
        'name' => ['eq'],
        'email' => ['eq'],
        'phone' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'zip_code' => ['eq'],
        'country' => ['eq']
    ];

    /**
     * Column conversion map
     * @var string[]
     */
    protected $columnMap = [
        'zipCode' => 'zip_code',
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

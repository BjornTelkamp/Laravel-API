<?php

namespace App\Filters\v1;

use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class CustomerFilters extends ApiFilters{

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

    protected $columnMap = [
        'zipCode' => 'zip_code',
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

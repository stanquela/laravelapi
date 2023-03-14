<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;


class CustomersFilter extends ApiFilter {
    protected $allowedParms = [
        'name' => ['eq'],
        'type' => ['eq', 'ne'],
        'email' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq', 'ne'],
        'state' => ['eq', 'ne'],
        'postalCode' => ['eq', 'gt', 'lt', 'ne'],
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code',
    ];

    /*
       equal, less than, less than or equal, greater than, greater than or equal, not equal 
    */
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥',
        'ne' => '!=',
    ];
}

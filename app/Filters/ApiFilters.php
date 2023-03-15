<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilters {

        protected $allowedParams = [];
        protected $columnMap = [];
        protected $operatorMap = [];

        public function transform(Request $request): array
        {
            $eloQuery = [];

            foreach($this->allowedParams as $param => $operators){
                $query = $request->query($param);

                if (!isset($query)) {
                    continue;
                }

                $column = $this->columnMap[$param] ?? $param;

                foreach ($operators as $operator) {
                    if (isset($this->operatorMap[$operator])){
                        $eloQuery[] = [$column, $this->operatorMap[$operator], $query];

                    }
                }
            }
            return $eloQuery;
        }
}

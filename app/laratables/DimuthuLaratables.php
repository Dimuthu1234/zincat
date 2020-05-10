<?php
/**
 * Created by PhpStorm.
 * User: Yohan
 * Date: 7/23/2019
 * Time: 11:21 PM
 */

namespace App\laratables;

use Freshbitsweb\Laratables\Laratables;

class DimuthuLaratables extends Laratables
{
    protected function applyFiltersTo()
    {
        $searchValue = request('search')['value'];


        if ($searchValue) {
            $this->queryHandler->applyFilters($this->columnManager->getSearchColumns(), $searchValue);
        }

        // get all the columns
        $cols = request('columns');


        foreach ($cols as $col) {

            // if the column is searchable and has a value... apply a filter on it
            if ($col['searchable'] == true && !empty($col['search']['value'])) {

                $col_array = [$col['name']];
                $this->queryHandler->applyFilters($col_array, $col['search']['value']);
            }
        }
    }
}

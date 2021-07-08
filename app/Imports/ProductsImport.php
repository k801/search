<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Product([
            'client_id'            => $row[0],
            'name'                  => $row[1],
            'comment'              => $row[2],
           'agent'                 => $row[3],
           'date'                  => $row[4],
           'time'                   =>$row[5],

        ]);

    }
}

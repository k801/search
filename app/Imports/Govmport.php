<?php

namespace App\Imports;

use App\Models\Client;
use App\Models\Gov;
use Maatwebsite\Excel\Concerns\ToModel;

class Govmport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Gov([

            'name'               => $row[0],
           'branch_name'         => $row[1],
           'gps'                  => $row[2],
           'gov_id'              => $row[3],
           'line_id'                 => $row[4],

        ]);
    }
}

<?php

namespace App\Imports;

use App\Models\Sponser;
use Maatwebsite\Excel\Concerns\ToModel;

class SponserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Sponser([
            'client_id'       => $row[0],
            'name'           => $row[1],
            'status'         => $row[2],
           'address'           => $row[3],
           'phone'           => $row[4],
           'id-no'     => $row[5],
           'agent'     => $row[6],
           'date'         => $row[7],
           'time'        => $row[8],

        ]);
    }
}

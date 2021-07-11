<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;

class ClientsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Client([

            'id2'               => $row[0],
            'name'              => $row[1],
            'phone1'            => $row[2],
           'phone2'            => $row[3],
           'phone3'            => $row[4],
           'id_no'             =>$row[5],
        ]);
    }
}

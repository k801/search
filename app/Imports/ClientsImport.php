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

            'id2'            => $row[0],
            'old_id'            => $row[1],
            'name'             => $row[2],
            'phone1'           => $row[3],
           'phone2'           => $row[4],
           'phone3'           => $row[5],
           'mobilefamily'     => $row[6],
           'statusfamily'     => $row[7],
           'presenter'         => $row[8],
           'bill-date'        => $row[9],
           'address	'         => $row[10],
           'id-no'            =>$row[11],
            'agent'           => $row[12],
            'date'             => $row[13],
            'time'             => @$row[14],
        ]);
    }
}

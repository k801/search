<?php

namespace App\Imports;

use App\Models\excelsheet;
use Maatwebsite\Excel\Concerns\ToModel;

class ExcelsheetsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new excelsheet([

            'id2'                  => $row[0],
            'name'                 => $row[1],
            'product'              => $row[2],
            'product2'             => $row[3],
           'comment'               => $row[4],
           'mob1'                  => $row[5],
           'mob2'                  => $row[6],
           'mob3'                  => $row[7],
           'famaily_phone'         => $row[8],
           'family_propery'        => $row[9],
           'presenter	'          => $row[10],
           'data_entry'            =>$row[11],
            'presenter'            => $row[12],
            'bill_date'            =>$row[13],
             'address'             =>$row[14],
            'id_no'                => $row[15],
            'sponser'              => $row[16],
            'sponser_property'     => $row[17],
            'sponser_mobile'       => $row[18],
            'sponser_id_no'        => $row[19],
        ]);



    }
}

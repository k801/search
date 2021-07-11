<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excelsheet extends Model
{
    use HasFactory;
    protected $table="excelsheet";
    protected $fillable=['id2','name','product','product2','comment','mob1','mob2','mob3','famaily_phone','family_propery','data_entry','presenter','bill_date','address','id_no','sponser','sponser_property','sponser_address','sponser_mobile','sponser_id_no'	];
    public $timestamps = false;

}

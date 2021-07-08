<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=['old_id','id2','name','phone1','phone2','phone3','mobilefamily','statusfamily','presenter','bill-date','address','agent','id-no','date','time','updated_at','create_at'];

    public $timestamps = false;

             protected $table="clients";

}

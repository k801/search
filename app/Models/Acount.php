<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acount extends Model
{
    use HasFactory;
    protected $table="accounts";
    protected $fillable=['id','name','mob1','mob2','mob3','id_n','type','date','time'];


}

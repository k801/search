<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable=['id2','name','phone1','phone2','phone3','id_no'];

    public $timestamps = false;

             protected $table="newclients";

}

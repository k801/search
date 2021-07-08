<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponser extends Model
{
    use HasFactory;
    protected $table="sponsors";
    protected $guarded=[];
    protected $fillable=['address','client_id','name','status','address','phone','id-no','agent','date','time'];
    public $timestamps = false;

}

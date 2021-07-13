<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gov extends Model
{
    use HasFactory;
    protected $fillable=["name","branch_name","gps","gov_id","line_id"];
    protected $table="area";
    public $timestamps = false;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $table="accounts";

    protected $fillable=["name","mob1","mob2","mob3","id_n"];
    public $timestamps = false;
}

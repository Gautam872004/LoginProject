<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = "tbl_product";
    protected $primaryKey = "pid";

    protected $fillable = ["pname","pdescription","price","pcatagery"];
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luser extends Model
{
    protected $table = "auth_tbl";
    protected $primeryKey = "user_id";

    protected $fillable = ["name","email","contact","password"];
    public $timestamps = false;
    
    use HasFactory;
}

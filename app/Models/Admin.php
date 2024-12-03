<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "admin";
    protected $primaryKey = "username";
    public $incrementing = false;

}

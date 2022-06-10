<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutBound extends Model
{
    use HasFactory;
    protected $table='outbounds';
    public $timestamps=false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nservice extends Model
{
    use HasFactory;
    protected $table = 'nservice';
    protected $fillable = [
        'service'
    ];
}

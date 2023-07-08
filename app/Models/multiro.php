<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multiro extends Model
{
    use HasFactory;
    protected $table = 'multiro';
    protected $fillable = [
        'host',
        'username',
        'password',
        'router',
        'service_id'
    ];
    public function fservice()
    {
        return $this->belongsTo(nservice::class, 'service_id', 'id');
    }
};

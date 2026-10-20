<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitDevice extends Model
{
    protected $fillable = ['fingerprint', 'blocked', 'note'];

    protected $casts = ['blocked' => 'boolean'];
}

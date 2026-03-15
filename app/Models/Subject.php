<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'type_id',
        'credit',
        'semester'
    ];

    public $timestamp = false;
}

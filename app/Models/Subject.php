<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';

    protected $fillable = [
        'credit',
        'semester'
    ];

    public $timestamp = false;

    // subject has one folder
    public function folder()
    {
        return $this->hasOne(Folder::class, 'subject_id');
    }
}

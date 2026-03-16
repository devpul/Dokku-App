<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentType extends Model
{
    protected $table = 'document_types';

    protected $fillable = [
        'type'
    ];

    public $timestamp = false;

    // document type has many folder
    public function folder()
    {
        return $this->hasMany(Subject::class, 'type_id');
    }
}

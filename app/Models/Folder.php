<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $table = 'folders';

    protected $fillable = [
        'user_id',
        'type_id',
        'subject_id',
        'name ',
        'color ',
    ];

    public $timestamp = false;

    // folder has many documents
    public function document()
    {
        return $this->hasMany(Document::class, 'folder_id');
    }

    // folders belongs to (has One) user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    // folder has one type
    public function type()
    {
        return $this->belongsTo(DocumentType::class, 'type_id');
    }

    // folder has many subjects
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }
}

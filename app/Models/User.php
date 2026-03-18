<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = [
        'username',
        'email',
        'password',
        // 'created_at',
        // 'updated_at ',
    ];
    
    public function folder()
    {
        return $this->hasMany(Folder::class, 'user_id');
    }

    public function document()
    {
        return $this->hasMany(Document::class, 'user_id');
    }
}

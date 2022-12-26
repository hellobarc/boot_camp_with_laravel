<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserContactList extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'contact',
        'user_message',
    ];
}

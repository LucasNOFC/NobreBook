<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Profile extends Model
{

    protected $fillable = [
        'fullname',
        'title',
        'adress',
        'desc_bio',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class File extends Model
{
    protected $fillable = [
        'name','user_id', 'description'
    ];

    public function user(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

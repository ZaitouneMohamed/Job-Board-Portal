<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name"
    ];

    public function User(){
        return  $this->belongsTo(User::class);
    }
}

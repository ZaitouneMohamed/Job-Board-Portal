<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "description",
        "first_name",
        "last_name",
        "gender",
        "phone",
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "certificate_name",
        "major",
        "university",
        "start_date",
        "end_date",
        "percentage"
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}

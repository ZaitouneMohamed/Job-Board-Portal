<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'is_current',
        'start_date',
        'end_date',
        'title',
        'company_name',
        'city',
        'description',
    ];
}

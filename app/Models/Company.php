<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'description',
        'start_date',
        'location',
        'site_url',
        'phone_number',
    ];

    public function Annonces()
    {
        return     $this->hasMany(Annonce::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'title',
        'companie_id',
        'description',
        'location',
        'statue',
        'categorie_id',
    ];

    public function categorie()
    {
        return     $this->belongsTo(Categorie::class);
    }

    public function user()
    {
        return     $this->belongsTo(User::class);
    }

    public function Companie()
    {
        return     $this->belongsTo(Company::class);
    }
    public function AppliedUsers()
    {
        return $this->belongsToMany(User::class, 'annonce_apllied', 'annonce_id', 'user_id');
    }
}

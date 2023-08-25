<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'salary',
        'title',
        'company_id',
        'description',
        'requirement',
        'location',
        'statue',
        'categorie_id',
    ];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }
    public function getTypeAttribute($value)
    {
        return $value === 1 ? "Full time" : "part Time";
    }

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
    public function FavoritesUsers()
    {
        return $this->belongsToMany(User::class, 'annonce_apllied', 'annonce_id', 'user_id');
    }
}

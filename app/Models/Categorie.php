<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon_class'
    ];

    public function Annonces(){
        return 	$this->hasMany(Annonce::class);
    }
}

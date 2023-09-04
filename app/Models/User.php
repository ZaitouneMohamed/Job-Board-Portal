<?php

namespace App\Models;

use App\Models\user\Education;
use App\Models\user\Experience;
use App\Models\user\Profile;
use App\Models\user\Skill;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    public function isAdmin()
    {
        return $this->hasRole('admin');
    }
    public function isUser()
    {
        return $this->hasRole('user');
    }
    public function isFournisseur()
    {
        return $this->hasRole('fournisseur');
    }

    public function AppliedAnnonces()
    {
        return $this->belongsToMany(Annonce::class, 'annonce_apllied', 'user_id', 'annonce_id');
    }
    public function FavoriteAnnonces()
    {
        return $this->belongsToMany(Annonce::class, 'annonce_favorite', 'user_id', 'annonce_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function Experience()
    {
        return $this->hasMany(Experience::class);
    }
    public function Skills()
    {
        return  $this->hasMany(Skill::class);
    }

    public function Education()
    {
        return $this->hasMany(Education::class);
    }
}

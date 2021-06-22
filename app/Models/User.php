<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function tecnologies()
    {
        return $this->belongsToMany(Tecnology::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function languajes()
    {
        return $this->belongsToMany(Languaje::class);
    }

    public function education()
    {
        return $this->belongsToMany(Education::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function certification()
    {
        return $this->hasMany(Certifications::class);
    }

    public function experience()
    {
        return $this->belongsTo(Experience::class);
    }

    public function developer()
    {
        return $this->hasOne(Developer::class);
    }

    public function recluiter()
    {
        return $this->hasOne(Recluiter::class);
    }

    public function getAvatarAttribute()
    {
        //gravatar
        $email = md5($this->email);
        return "https://es.gravatar.com/avatar/$email";
    }
}

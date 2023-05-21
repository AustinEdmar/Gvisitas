<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'first_name','last_name','birthday','image', 'confirmation_token', 'email','phone_number','police_rank_id',
        'level_id','direction_id','department_id','section_id','gender_id',
        'status_id','password','group_id','floor_id'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function police_rank()
    {
        return $this->belongsTo(Police_rank::class);
    }

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function manage_subject()
    {
        return $this->hasMany(Manage_subject::class);
    }

     public function group()
    {
        return $this->belongsTo(Group::class);
    }
     public function floor()
    {
        return $this->belongsTo(Floor::class);
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

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}

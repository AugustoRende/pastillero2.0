<?php

namespace Pastillero;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * Get the organization record associated with the user.
     */
    public function organization()
    {
        return $this->belongsTo('Pastillero\Organization');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'group', 'organization_id',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'active', 'visible', 'enabled',
    ];

    protected $dates = ['deleted_at'];
}

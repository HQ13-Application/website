<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\AdminResetPasswordNotification;
class Admin extends Authenticatable
{
    use Notifiable;





    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotification($token));

    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password','userCity','userState','userContry','userPhone','userAddress1','userAddress2',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Auth;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'photo'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function updateUserData($data, $fileName)
    {
        $name           = $data->name;
        $email          = $data->email;
        if(empty($data->password)){
            $password       = Auth::user()->password;
        } else {
            $password       = bcrypt($data->password);
        }
        if(empty($data->photo)){
            $photo          = Auth::user()->photo;
        } else {
            $photo          = $fileName;
        }

        return $this->where('id', Auth::user()->id)
                        ->update([
                            'name'          => $name,
                            'email'         => $email,
                            'password'      => $password,
                            'photo'         => $photo,
                            'updated_at'    => Carbon::now()
                        ]);
    }
}

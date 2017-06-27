<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'fullname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function posts()
    {
        return $this->hasMany(\App\Models\Post::class);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes["password"] = md5($password);
    }

    public function getEmailAttribute($email)
    {
        $emailDomainRegex = "/(?<=\@).*$/";
        preg_match($emailDomainRegex, $email, $emailDomain);
        $emailDomainLength = (count($emailDomain) ? strlen($emailDomain[0]) : 1);

        return preg_replace($emailDomainRegex, str_repeat("*", $emailDomainLength), $email);
    }
}

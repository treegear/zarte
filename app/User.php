<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

      /**
     * Get the EtcAgent.
     *
     * @param  string $value
     * @return string
     */
    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y H:i:s', strtotime($value));
    }

    /**
        * @return \Illuminate\Database\Eloquent\Relations\HasOne
    */
    public function getSoftware(){
        return $this->hasOne('App\Software', 'id', 'software_format');
    }


    public static function getAllClients(){
        return User::select('id','name')->where('is_active','=',1)->where('user_type','=','client')->get();
    }

    public static function getAllDigitizers(){
        return User::select('id','name')->where('is_active','=',1)->where('user_type','=','digitizer')->get();
    }

    public static function getDigitizerEmail($id){
        return User::select('email')->where('id','=',$id)->get()->pluck('email')->first();
    }

    public static function check_email_exist($email){
		$email = User::select('id','email')->where('email', '=', $email)->first();
        if(isset($email['email'])){            
		    return 1;
        }else{
            return 0;
        }
		    
	}
}

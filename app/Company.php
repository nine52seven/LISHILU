<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'company';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    // protected $hidden = ['password', 'remember_token'];

    /**
     * 禁止被批量更新的字段
     *
     * @var array
     */
    // protected $guarded = ['id', 'password'];

    public function staff()
    {
        return $this->hasMany('App\User');
    }
}

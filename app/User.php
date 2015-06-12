<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $table = 'users';
    protected $fillable = ['name', 'identity', 'contests_id', 'ticket', 'lastlogin_ip', 'lastlogin_at'];
    protected $hidden = [];

    public function getContest()
    {
        return $this->belongsTo('App\Contest', 'contests_id');
    }



}

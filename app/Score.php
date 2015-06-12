<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model {

    protected $table = 'scores';
    protected $fillable = ['contests_id', 'users_id', 'scoredata'];
    protected $hidden = [];


    public function getContest()
    {
        return $this->belongsTo('App\Contest', 'contests_id');
    }

    public function getUser()
    {
        return $this->belongsTo('App\User', 'users_id');
    }
}

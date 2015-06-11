<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model {

    protected $table = 'contests';
    protected $fillable = ['name', 'info', 'subject'];
    protected $hidden = [];

    public function isStarted(){
        if (empty($this->start)){
            return true;
        }
        else{
            if(Carbon::now()->timestamp > $this->start){
                return true;
            }
            else{
                return false;
            }
        }
    }

    public function isEnded(){
        if (empty($this->end)){
            return false;
        }
        else{
            if(Carbon::now()->timestamp < $this->end){
                return false;
            }
            else{
                return true;
            }
        }
    }

    public function isInProgress(){
        return $this->isStarted() && !$this->isEnded();
    }

}

<?php


namespace Q\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Q\Models\Question;

class User extends Eloquent {

    protected $table    = 'users';
    protected $fillable = ['username', 'email', 'password'];

    public function questions() {

        return $this -> hasMany('Question');
        //return $this -> hasMany('Q\Models\Question'); La entidad con la que está relacionada
        //solo funciona si tiene incluida una clave foránea

    }

}
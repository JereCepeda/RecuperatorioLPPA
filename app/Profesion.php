<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesion extends Model
{
    protected $fillable=['title'];
    public function usuarios()
    {
        return $this->belongsTo(User::class);
    }
    
}

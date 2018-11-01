<?php

namespace imedev2\cpanel;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $fillable = ['name'];


    public function jobs()
    {
        return $this->hasMany('App/Jobs');
    }

}

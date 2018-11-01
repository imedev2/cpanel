<?php

namespace imedev2\cpanel;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable =[
        'order',
        'title',
        'ar_title',
        'description',
        'ar_description',
        'no_reqs',
        'visible',
        'com_id'];

    public function jobreqs()
    {
        return $this->hasMany('App/Jobreq');
    }


    public function company()
    {
        return $this->belongsTo('App/Company','com_id');
    }

}

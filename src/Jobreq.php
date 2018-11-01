<?php

namespace imedev2\cpanel;

use Illuminate\Database\Eloquent\Model;

class Jobreq extends Model
{
    protected $fillable = [
        'job_id',
        'order',
        'name',
        'message',
        'filename',
        'review'
    ];


    public function job()
    {
        return $this->belongsTo('App/Job','job_id');
    }

}

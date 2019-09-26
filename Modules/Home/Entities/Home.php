<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'name',
        'title',
        'description'
    ];


}

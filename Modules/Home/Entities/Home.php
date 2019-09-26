<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table = 'home';

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'title',
        'description'
    ];

    protected static $rules = [
        'default' => [
            'name'          => 'required|max:191',
            'title'         => 'required|max:191',
            'description'   => 'required|max:191'
        ],
    ];

    protected $dates = ['created_at', 'updated_at'];

    protected $casts = ['id'];




}

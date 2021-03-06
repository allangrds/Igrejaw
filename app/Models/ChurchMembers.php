<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChurchMembers extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'church_members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'born_at', 'image', 'is_active', 'function_id', 'department_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    protected $dates = ['born_at'];

}

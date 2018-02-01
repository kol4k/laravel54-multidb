<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Windows extends Model
{
    /**
     * Option Connection Database
     */
    protected $connection = 'windows';
    /**
     * Table
     */
    protected $table = 'post';
    /**
     * Primary Key
     */
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];
}

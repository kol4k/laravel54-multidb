<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linux extends Model
{
    /**
     * Option Connection Database
     */
    protected $connection = 'linux';
    /**
     * Table
     */
    protected $table = 'postlinux';
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

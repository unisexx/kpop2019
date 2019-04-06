<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kpopnew extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kpop_news';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['image', 'title', 'detail', 'url', 'status'];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\News;
class User extends Model
{
    protected $table = "users";
    protected $primarykey = 'id';

    function news()
    {
        return $this->hasMany(News::class);
    }
}

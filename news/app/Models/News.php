<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class News extends Model
{
    protected $table = "news";
    protected $primarykey = "id";

    function users()
    {
        return $this->hasOne(User::class, 'userId');
    }
}

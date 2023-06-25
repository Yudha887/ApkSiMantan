<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [''];

    public function flags()
    {
        return $this->belongsTo("App\Models\Flag", "flag_id", "id");
    }

    public function user()
    {
        return $this->belongsTo("App\Models\User", "user_id", "id");
    }
}

<?php

namespace App\Models;
use App\Models\Genre;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genre()
{
    return $this->belongsTo(Genre::class);
}

}

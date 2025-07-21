<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function scopeFilterSearch($query)
    {
    if ($search =request('search')) {
        $query->where('name', 'like', "%".$search."%")
            ->orWhere('description', 'like', "%".$search."%");  
    }
    return $query;
    }




    public function movies()
    {
        return $this->hasMany(Movie::class);
    }

}

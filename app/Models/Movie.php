<?php

namespace App\Models;
use App\Models\Genre;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','duration','release_date','rating','genre_id','language','cast'];
    
public function genre()
{
    return $this->belongsTo(Genre::class);
}

public function scopeFilterSearch($query)
{
    if ($search =request('search')) {
        $query->where('name', 'like', "%".$search."%")
            ->orWhere('description', 'like', "%".$search."%")
        
                ->orwhereHas('genre', function ($qa) use ($search) {
                    $qa->where('name', 'like', "%".$search."%");
                });
            
    }
    return $query;
}

public static function scopefilterByGenre($query)
{
   
    if ($genreId = request("genre_id")) {
        $query->where('genre_id', $genreId);
    }

    return $query;
}


}
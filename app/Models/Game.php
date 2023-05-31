<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = ['slug', 'thumb'];
    public function getRouteKeyName()
    {
       return 'slug';
    }

    public function genres() {
        return $this->belongsToMany('App\Models\Genre');
    }

    public function developers()
    {
        return $this->belongsToMany(Developer::class);
    }
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function review(){
        return $this->hasOne(Review::class);
    }
}


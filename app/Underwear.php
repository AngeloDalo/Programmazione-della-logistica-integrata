<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Underwear extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'size',
        'image',
        'visible',
        'slug',
        'created_at',
        'updated_at',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function createSlug($name)
    {
        $slug = Str::slug($name, '-');
        $oldUnderwear = Underwear::where('slug', $slug)->first();

        $counter = 0;
        while ($oldUnderwear) {
            $newSlug = $slug . '-' . $counter;
            $oldUnderwear = Underwear::where('slug', $newSlug)->first();
            $counter++;
        }

        return (empty($newSlug)) ? $slug : $newSlug;
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}

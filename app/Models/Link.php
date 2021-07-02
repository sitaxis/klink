<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = ['url'];

    public static function boot() {
        parent::boot();

        static::creating(function (Link $link) {
            $slug = "";

            for ($i = 0; $i < config('links.length'); $i++) {
                $slug .= config('links.characters')[rand( 0, strlen(config('links.characters')) - 1)];
            }
            $link->slug = $slug;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

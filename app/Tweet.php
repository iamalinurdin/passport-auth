<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];

    /**
     * Relasi One to Many User -> Tweet
     * params 1: arah relasi model
     * params 2: field yg menjadi foreign key
     * params 3: primary key di model tujuan
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

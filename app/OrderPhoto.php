<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPhoto extends Model
{
    protected $fillable = ['photo_type', 'photo_url'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
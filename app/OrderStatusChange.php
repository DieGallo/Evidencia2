<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStatusChange extends Model
{
    protected $fillable = ['status', 'change_time'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
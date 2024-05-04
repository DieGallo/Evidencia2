<?php
   namespace App;

   use Illuminate\Database\Eloquent\Model;
   
   class Order extends Model
   {
       protected $fillable = ['invoice_number', 'order_date', 'notes', 'status', 'deleted'];
   
       public function customer()
       {
           return $this->belongsTo(Customer::class);
       }
   
       public function statusChanges()
       {
           return $this->hasMany(OrderStatusChange::class);
       }
   
       public function orderPhotos()
       {
           return $this->hasMany(OrderPhoto::class);
       }
   }
?>
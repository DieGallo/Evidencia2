<?php
    namespace App;

    use Illuminate\Database\Eloquent\Model;
    
    class Customer extends Model
    {
        protected $fillable = ['customer_name', 'fiscal_data', 'delivery_address'];
    
        public function orders()
        {
            return $this->hasMany(Order::class);
        }
    }
?>

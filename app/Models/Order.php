<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
    
    public function sales_report() {
        return $this->hasMany(Sales_Report::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales_Report extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function product() {
        return $this->belongsTo(Products::class);
    }
    public function order() {
        return $this->belongsTo(Order::class);
    }
}

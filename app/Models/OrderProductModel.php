<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProductModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'Order_id',
        'User_id',
        'Product_id',
        'Quantity'
    ];
    

    public function ProductsModel(){
        return $this->belongsTo(ProductsModel::class, 'Product_id', 'id');
    }
}

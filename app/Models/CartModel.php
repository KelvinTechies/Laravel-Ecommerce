<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;


    protected $fillable=[
        'UserId',
'Product_id',
'Quantity',
'User_id',
'Product_id'
    ];


    public function userCreateModels(){
        return $this->hasMany(CartModel::class);
    }
    
    public function ProductsModels(){
        return $this->belongsTo(ProductsModel::class, 'Product_id');
    }
}

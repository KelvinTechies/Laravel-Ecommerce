<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ordering extends Model
{
    use HasFactory;

    protected $fillable=[
        'User_id',
        'Product_id',
        'Address1',
        'Address2',
        'Country',
        'Zip',
        'Fullname',
        'Email',
        'Tracking_id',
        'Status',
        'Fone'
    ];

    public function userCreateModel(){
        return $this->belongsTo(userCreateModel::class);
    }
    public function ProductsModel(){
        return $this->belongsToMany(ProductsModel::class)->withPivot('Quantity');
    }
    public function OrderProductModel(){
        return $this->hasMany(OrderProductModel::class, 'Order_id', 'id');
    }
}

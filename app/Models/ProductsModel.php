<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageModel;
class ProductsModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'DogName',
        'Breed',
        'Color',
        'Quantity',
        'DogType',
        'Price',
        'Image',
        'Description',

    ];
    // protected $primaryKey = 'products_model';

    public function CartModel(){
        return $this->hasMany(CartModel::class);
    }

    public function ImageModels(){
        return $this->hasMany(ImageModel::class, 'Product_id');
    }

    public function scopeFilter($query, array $filters){
        // if($filters['search'] ?? false){
        //     $query->where('search', 'like', '%'. request('tag'). '%');
        // }

        if($filters['search'] ?? false){
            $query->where('DogName', 'like', '%'.request('search'). '%')->orWhere('DogType', 'like', '%'.request('search'). '%')->orWhere('Breed', 'like', '%'.request('search'). '%');
        }
    }
}


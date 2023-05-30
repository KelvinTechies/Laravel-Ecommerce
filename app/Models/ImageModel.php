<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductsModel;
class ImageModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'Image',
        'Product_id'
    ];
    public function ProductsModel(){
        return $this->belongsTo(ProductsModel::class);
    }
}

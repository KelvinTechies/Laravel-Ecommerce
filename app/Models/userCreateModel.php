<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userCreateModel extends Model
{
    use HasFactory;


   protected  $fillable=[
        'FullName',
        'UserName',
        'Email',
        'Password'
   ];


   public function CartModel(){
    return $this->belongsTo(userCreateModel::class);
}

public function order(){
    return $this->hasMany(ordering::class);
}
}

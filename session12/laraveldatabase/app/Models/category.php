<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class category extends Model
{
    use HasFactory;
    protected $table = "category";
    public $timestamps = false;

    public $fillable = [
        "name"
    ];

    public function product(){
        return $this->hasMany("App\Models\product");
    }


    // public function name() :Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => "m-".$value,
    //         set: fn ($value) => "toto-".$value
    //     );
    // }

    // public function id() :Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => "id-".$value
    //     );
    // }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $table = "product";

    // have one category
    public function category()
    {
        return $this->belongsTo("App\Models\category");
    }
}


// product belong to category
// category has many product

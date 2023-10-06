<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Car;

class PriceRange extends Model
{
    use HasFactory;
    protected $table = 'pricerange';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'min', 'max'	
    ];

    public function cars(){
        return $this->belongTo(Car::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Modele;
use App\Models\Motorisation;
use App\Models\PriceRange;


class Car extends Model
{
    use HasFactory;
    protected $table = 'car';
    protected $primarykey = 'id';
    protected $fillable = [
        'image', 'motorisation_id', 'generation_id', 'pricerange_id'
    ];

    public function pricerange(){
        return $this->belongTo(PriceRange::class);
    }

    public function motorisation(){
        return $this->belongsTo(Motorisation::class);
    }
}

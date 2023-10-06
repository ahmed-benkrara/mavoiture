<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Modele;
use App\Models\Phase;
use App\Models\PriceRange;


class Car extends Model
{
    use HasFactory;
    protected $table = 'car';
    protected $primarykey = 'id';
    protected $fillable = [
        'image_path', 'motorization', 'modele_id', 'phase_id','pricerange_id'
    ];

    public function modele(){
        return $this->belongTo(Modele::class);
    }

    public function phase(){
        return $this->belongTo(Phase::class);
    }

    public function pricerange(){
        return $this->belongTo(PriceRange::class);
    }
}

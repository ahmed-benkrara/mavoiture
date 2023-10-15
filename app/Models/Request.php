<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Car;
use App\Models\Problem;

class Request extends Model
{
    use HasFactory;
    protected $table = 'solution';
    protected $primarykey = 'id';
    protected $fillable = [
        'phone', 'car_id', 'problem_id'
    ];

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function problem(){
        return $this->belongsTo(Problem::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Modele;

class Phase extends Model
{
    use HasFactory;
    protected $table = 'phase';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'start', 'end'	
    ];

    public function modeles(){
        return $this->belongsToMany(Modele::class, 'modele_phase');
    }
}

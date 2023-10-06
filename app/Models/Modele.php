<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Phase;
use App\Models\Mark;

class Modele extends Model
{
    use HasFactory;
    protected $table = 'modele';
    protected $primarykey = 'id';
    protected $fillable = [
        'name', 'mark_id'
    ];

    public function phases(){
        return $this->belongsToMany(Phase::class, 'modele_phase');
    }

    public function mark(){
        return $this->belongsTo(Mark::class);
    }
}

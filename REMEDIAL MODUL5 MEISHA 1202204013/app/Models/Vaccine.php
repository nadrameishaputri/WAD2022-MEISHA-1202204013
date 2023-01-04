<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $table = 'vaccines';
    public $timestamps = false;

    protected $fillable = [
        'name', 
        'price', 
        'description', 
        'image',
    ];

    public function patient(){
        return $this->hasMany(Patient::class);
    }

    
}

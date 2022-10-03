<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function Classes() {
        return $this->belongsTo(Classes::class,'class_id','class_id');
    }
    public function Country() {
        return $this->belongsTo(Country::class,'country_id','country_id');
    }
    use HasFactory;
    public $table='students';
    protected $fillable = [
        'class_id',
        'country_id',
        'name',
        'date_of_birth',

      
    ];
}

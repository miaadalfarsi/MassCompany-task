<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Student() {
        return $this->hasMany(Student::class, 'country_id');
    }
   
    use HasFactory;
    public $table='countries';
    protected $primaryKey ='country_id';
    protected $fillable = [
        'name',
      
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    public function Student() {
        return $this->hasMany(Student::class, 'class_id');
        
    }
       
    
    
    use HasFactory;
    public $table='classes';
    protected $primaryKey ='class_id';
    protected $fillable = [
        'name',
      
    ];
}

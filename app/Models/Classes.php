<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{

    public function Student() {
        return $this->hasMany('Student', 'class_id');
    }
    use HasFactory;
    protected $fillable = [
        'class_name',
      
    ];
}

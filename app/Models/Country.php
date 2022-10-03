<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function Student() {
        return $this->hasMany('Student', 'country_id');
    }
    use HasFactory;
    protected $fillable = [
        'name',
      
    ];
}

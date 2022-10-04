<?php

namespace App\Models;
use Carbon\Carbon;

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
    protected $primaryKey ='id';
    public $fillable = [
        'class_id',
        'country_id',
        'name',
        'date_of_birth'

    ];
   
    
        public function age()
{
       return Carbon::parse($this->attributes['date_of_birth'])->age;
}


}

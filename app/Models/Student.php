<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //public $table="students";


    public function payment(){
        return $this->hasMany(Payment::class,'rollnumber', 'rollnumber');
    }
}

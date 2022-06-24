<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $fillable = [ 'department_name' , 'num_students'];
    public function students() {
        $this->hasMany(\App\Models\Student::class);
    }

}

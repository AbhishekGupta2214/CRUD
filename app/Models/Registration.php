<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'registration';
    protected $id = 'id';

    // public function setUnameAttribute($value)
    // {
    //     $this->attribute['uname']=ucwords($value);   
    // }
}

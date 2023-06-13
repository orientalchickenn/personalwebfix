<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portfolio extends Model   
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $guarded = ['id'];
    protected $filliable = ['category_id','name','desc','image_file_url'];
}

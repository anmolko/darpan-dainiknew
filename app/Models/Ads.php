<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    protected $table ='advertisements';
    protected $fillable = ['id','name','position','shortcode','placement','url','description','image','created_by','updated_by'];
}

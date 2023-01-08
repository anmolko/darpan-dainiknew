<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    protected $fillable =['id','name','slug','description','parent_category','created_by','updated_by'];

    public function blogs(){
        return $this->belongsToMany('App\Models\Blog');
    }

}

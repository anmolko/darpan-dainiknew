<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table ='comments';
    protected $fillable =['id','user_id','blog_id','parent_id','comment'];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function post(){
        return $this->belongsTo('App\Models\Blog');
    }

    public function replies(){
        return $this->hasMany('App\Models\Comment','parent_id');
    }

}

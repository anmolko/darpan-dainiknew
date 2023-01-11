<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table ='blogs';
    protected $fillable =['id','title','slug','excerpt','description','status','image','featured_from','featured_to','meta_title','meta_tags','meta_description','created_by','updated_by'];

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function publishedDateNepali(){
        $date = $this->created_at;
        $convert = Bsdate::eng_to_nep($date->year,$date->month,$date->day);
        return $convert['year'].' '.$convert['nmonth'].' '.$convert['date'].' गते '.$this->toNepaliString(Date::parse($this->created_at)->format('h:i'));
    }

    public function hasCategory($categoryid){
        return $this->categories()->where('category_id',$categoryid)->count()>0;
    }

    public function hasTag($tagid){
        return $this->tags()->where('tag_id',$tagid)->count()>0;
    }

    public function url(){
        return $this->created_at->year.'/'.$this->created_at->month.'/'.$this->slug;
    }
}

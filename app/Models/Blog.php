<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bsdate;

class Blog extends Model
{
    use HasFactory;

    protected $table ='blogs';
    protected $fillable =['id','title','slug','numeric_slug','excerpt','description','status','image','featured_from','featured_to','meta_title','meta_tags','meta_description','created_by','updated_by'];

    private $nepaliArray = [
        '0' => '०',
        '1' => '१',
        '2' => '२',
        '3' => '३',
        '4' => '४',
        '5' => '५',
        '6' => '६',
        '7' => '७',
        '8' => '८',
        '9' => '९',
    ];

    public function categories(){
        return $this->belongsToMany('App\Models\Category');
    }

    public function tags(){
        return $this->belongsToMany('App\Models\Tag');
    }

    public function publishedDateNepali(){
        $year    = $this->created_at->format('Y');
        $month   = $this->created_at->format('m');
        $day     = $this->created_at->format('d');
        $date    = Bsdate::eng_to_nep($year,$month,$day);
        $time    = $this->toNepaliString($this->created_at->format('H:i'));
        echo $date['date'].' '.$date['nmonth'].' '.$date['year'].','.$time;
    }

    public function toNepaliString($string){
        return strtr($string, $this->nepaliArray);
    }
    public function getMinsAgoinNepali($string){
        $number =  preg_replace('/\D/', '', $string);
        return strtr($number, $this->nepaliArray);
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

    public function shortContent($cut = 0){
        $content    = $this->description;
        $start      = strpos($content, '<p>');
        $end        = strpos($content, '</p>', $start);
        $paragraph  = substr($content, $start, $end-$start+4);
        $finalData  = strip_tags($paragraph);
        if($cut>0 && strlen($finalData)<$cut){
            return substr($finalData,0,$cut);
        }
        return $finalData;
    }

    public function relatedPostsByTag()
    {
        return Blog::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->where('id', '<>', $this->id)->get();
    }
    public function relatedPostsByCategory()
    {
        return Blog::whereHas('categories', function ($query) {
            $tagIds = $this->categories()->pluck('categories.id')->all();
            $query->whereIn('categories.id', $tagIds);
        })->where('id', '<>', $this->id)->get();

    }

}

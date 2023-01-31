<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table ='comments';
    protected $fillable =['id','user_id','blog_id','parent_id','comment'];
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
        'minutes' => 'मिनेट',
        'minute' => 'मिनेट',
        'week' => 'हप्ता',
        'weeks' => 'हप्ता',
        'year' => 'वर्ष',
        'years' => 'वर्ष',
        'hours' => 'घन्टा',
        'hour' => 'घन्टा',
        'days' => 'दिन',
        'day' => 'दिन',
        'ago' => 'अगाडि',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id','id' );
    }

    public function toNepaliStrings($string){
        return strtr($string, $this->nepaliArray);
    }

    public function getCommentedAgoinNepali(){
        $string = $this->created_at->diffForHumans();
        return $this->toNepaliStrings($this->created_at->diffForHumans());
    }

    public function post(){
        return $this->belongsTo('App\Models\Blog')->orderBy('created_at','DESC');
    }

    public function replies(){
        return $this->hasMany('App\Models\Comment','parent_id')->orderBy('created_at','DESC');
    }

    public function haslikedordisliked($user_id){
        return LikeComment::where('comment_id',$this->id)->where('user_id',$user_id)->count()>0;
    }

    public function hasliked($user_id){
        return LikeComment::where('comment_id',$this->id)->where('user_id',$user_id)->where('like',1)->count()>0;
    }
    public function hasdisliked($user_id){
        return LikeComment::where('comment_id',$this->id)->where('user_id',$user_id)->where('dislike',1)->count()>0;
    }

    public function likes(){
        return $this->hasMany('App\Models\LikeComment','comment_id')->sum('like');
    }

    public function dislikes(){
        return $this->hasMany('App\Models\LikeComment','comment_id')->sum('dislike');
    }

}

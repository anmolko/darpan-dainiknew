<?php

use App\Models\Ads;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use App\Models\Menu;
use App\Models\MenuItem;

if (!function_exists('getNepaliMonth')) {
    $selected_month;
    function getNepaliMonth($month){
     if($month == '1' || $month == '01'){
       $selected_month = "Baisakh";
     }else if($month == '2' || $month == '02'){
      $selected_month = "Jestha";
     }else if($month == '3' || $month == '03'){
      $selected_month = "Ashar";
     }else if($month== '4' || $month == '04'){
        $selected_month = "Shrawan";
     }else if($month== '5' || $month == '05'){
      $selected_month = "Bhadra";
     }else if($month== '6' || $month == '06'){
      $selected_month = "Ashoj";
     }else if($month== '7' || $month == '07'){
      $selected_month = "Kartik";
     }else if($month== '8' || $month == '08'){
      $selected_month = "Mangsir";
     }else if($month== '9' || $month == '09'){
      $selected_month = "Poush";
     }else if($month== '10'){
      $selected_month = "Magh";
     }else if($month== '11' ){
      $selected_month = "Falgun";
     }else if($month== '12' ){
      $selected_month = "Chaitra";
     }
     return $selected_month;
    }
}

function url_get_contents ($Url) {
  if (!function_exists('curl_init')){
      die('CURL is not installed!');
  }
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $Url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

if (!function_exists('greeting_msg')) {
    function greeting_msg(){
        date_default_timezone_set('Asia/kathmandu');
        $hour      = date('H');
        if ($hour >= 20) {
            $greetings = "Good Night";
        } elseif ($hour > 17) {
            $greetings = "Good Evening";
        } elseif ($hour > 11) {
            $greetings = "Good Afternoon";
        } elseif ($hour < 12) {
            $greetings = "Good Morning";
        }
        return $greetings;
    }
}

if (!function_exists('profile_percentage')) {
    function profile_percentage($id){
        $user       = User::find($id);
        $name       = 20;
        $email      = 20;
        $contact    = 20;
        $image      = 15;
        $gender     = 10;
        $address    = 10;
        $about      = 5;
        $percetage = 0;
        if ($user->name !== null) {
            $percetage += $name;
        }
        if ($user->email !== null) {
            $percetage += $email;
        }
        if ($user->contact !== null) {
            $percetage += $contact;
        }
        if ($user->address !== null) {
            $percetage += $address;
        }
        if ($user->image !== null) {
            $percetage += $image;
        }
        if ($user->gender !== null) {
            $percetage += $gender;
        }
        if ($user->about !== null) {
            $percetage += $about;
        }
        return $percetage;
    }
}


if (!function_exists('get_slugs_to_disable')) {
    function get_slugs_to_disable($id){
        $disable    = [];
        $desiredMenu   = Menu::where('slug',$id)->first();
        $menuitems     = MenuItem::where('menu_id',$desiredMenu->id)->get();
        foreach ($menuitems as $items){
            array_push($disable,$items->slug);
        }
        return $disable;
    }
}

if (! function_exists('getNumericSlug')) {
    /**
     * Generate a Numeric URL friendly "slug" from blogs.
     *
     * @param  string  $title
     * @param  string  $separator
     * @param  string  $language
     * @return string
     */
    function getNumericSlug()
    {
        $blog = \App\Models\Blog::latest()->first();
        $digits = 5;
        if($blog == null){
            $slug = 'dd-'.'1'. str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
        }else{
            $number = $blog->id + 1;
            $slug = 'dd-'.$number.str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);

        }
        return $slug;
    }
}

if (! function_exists('getMiddleBanner')) {
    /**
     * Generate a Numeric URL friendly "slug" from blogs.
     *
     * @param  string  $title
     * @param  string  $separator
     * @param  string  $language
     * @return string
     */
    function getMiddleBanner()
    {
        $between2   = Ads::where('placement','in-between-post')->where('status','active')->skip(1)->take(3)->get();
        $block   = '<div class="inside-editor-content col-lg-12 col-md-6 col-12">';
        foreach ($between2 as $between){
            $url = (@$between->url !== null) ? @$between->url:"#";
                $block .= '<a href="'.$url.'" target="_blank"><img src="'.asset('/images/banners/'.@$between->image).'" alt="'.@$between->name.'"></a>';
        }
        $block  .= '</div>';
        return $block;
    }
}

if (! function_exists('getLatestPosts')) {
    /**
     * Get latest post based on what to skip and take
     *
     * @param  integer  $skip
     * @param  integer  $take
     * @return array
     */
    function getLatestPosts($skip,$take)
    {
        return Blog::orderBy('created_at', 'DESC')->where('status','publish')->skip($skip)->take($take)->get();
    }
}

if (! function_exists('getCategoryRelatedPost')) {
    /**
     * Get posts based on category ID and limit/skip the data as per the $limit variable
     *
     * @param  integer  $catid
     * @param  integer  $skip
     * @param  integer  $take
     * @return array
     */
    function getCategoryRelatedPost($catid,$skip,$take)
    {
        if(is_numeric($catid)){
            return Blog::with('categories')->where('status','publish')
                ->whereHas('categories',function ($query) use ($catid){
                    $query->where('category_id', $catid);
                })->skip($skip)->take($take)->get();
        }else{
            return Blog::with('categories')->where('status','publish')
                ->whereHas('categories',function ($query) use ($catid){
                    $query->where('slug', $catid);
                })->skip($skip)->take($take)->get();
        }
    }
}

if (! function_exists('getTagsRelatedPost')) {
    /**
     * Get posts based on tags ID and limit the data as per the $limit variable
     *
     * @param  integer  $tagid
     * @param  integer  $skip
     * @param  integer  $take
     * @return array
     */
    function getTagsRelatedPost($tagid,$skip,$take)
    {
       return Blog::with('tags')->where('status','publish')
            ->whereHas('tags',function ($query) use ($tagid){
                 $query->where('tag_id', $tagid);
            })->skip($skip)->limit($take)->get();
    }
}

if (! function_exists('categoryChildren')) {
    /**
     * Get child category list based on parent category ID.
     *
     * @param  integer  $categoryID
     * @return array
     */
    function categoryChildren($categoryID)
    {
        return Category::with('blogs')->where('parent_category',$categoryID)->take(8)->get();

    }
}
if (! function_exists('countCategoryChildren')) {
    /**
     * Get child category count based on parent category ID.
     *
     * @param  integer  $categoryID
     * @return boolean
     */
    function countCategoryChildren($categoryID)
    {
        return Category::where('parent_category',$categoryID)->count()>0;

    }
}

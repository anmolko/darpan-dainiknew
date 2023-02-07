<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Setting;
use App\Models\HomePage;
use App\Models\Team;
use App\Models\User;
use App\Models\SectionElement;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionGallery;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use CountryState;
use Bsdate;


class FrontController extends Controller
{
    protected $contact = null;
    protected $setting = null;
    protected $blog = null;
    protected $bcategory = null;
    protected $faq = null;
    protected $service = null;
    protected $career = null;
    protected $home_page = null;
    protected $page = null;
    protected $pagesection = null;
    protected $client = null;
    protected $slider = null;


    public function __construct(HomePage $home_page, PageSection $pagesection, Page $page, Setting $setting, Category $bcategory, Blog $blog)
    {
        $this->setting = $setting;
        $this->bcategory = $bcategory;
        $this->blog = $blog;
        $this->page = $page;
        $this->pagesection = $pagesection;
        $this->home_page = $home_page;
    }



    public function index()
    {
        $date      =  date('Y-m-d');
        $featured  = $this->blog::with('author')->where('status','publish')
                    ->whereDate('featured_from', '<=', $date)
                    ->whereDate('featured_to', '>=', $date)
                    ->orderBy('created_at','desc')
                    ->limit(6)
                    ->get();
        $video_featured = VideoGallery::orderBy('created_at', 'desc')->first();
        $video_all = VideoGallery::orderBy('created_at', 'desc')->skip(1)->take(3)->get();

        return view('welcome',compact('featured','video_all','video_featured'));
    }


    public function privacy()
    {
        return view('frontend.pages.privacy');
    }

    public function terms()
    {

        return view('frontend.pages.term');
    }

    public function faq()
    {
        $page_detail = $this->page->with('sections')->where('slug','faq')->where('status','active')->first();
        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sorted_sections        = array();
        $accordian2_elements = "";
        $list_2        = "";


        foreach ($page_section as $section){
            $sorted_sections[$section->id] = $section->section_slug;
            if ($section->section_slug == 'accordion_section_2'){
                $list_2 = $section->list_number_2;
                $accordian2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }

        }
        return view('frontend.pages.faq',compact('list_2','accordian2_elements'));
    }

    public function page($page)
    {
        $page_detail = $this->page->with('sections')->where('slug', $page)->where('status','active')->first();

        if (!$page_detail) {
            return abort(404);
        }
        $page_section = $this->pagesection->with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
        if (!$page_section) {
            return abort(404);
        }
        $sections      = array();

        $list_2        = "";
        $list_3        = "";
        $process_num   = "";
        $basic_elements = "";
        $map_descp = "";
        $call1_elements = "";
        $call2_elements = "";
        $bgimage_elements = "";
        $flash_elements = "";
        $header_descp_elements = "";
        $video_descp_elements = "";
        $gallery_elements = "";
        $location_map = "";
        $gallery2_elements = "";
        $contact_info_elements = "";
        $accordian1_elements = "";
        $accordian2_elements = "";
        $slider_list_elements = "";
        $icon_title_elements = "";
        $process_elements = "";
        foreach ($page_section as $section){
            $sections[$section->id] = $section->section_slug;
            if($section->section_slug == 'basic_section'){
                $basic_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            } else if($section->section_slug == 'map_and_description'){
                $map_descp = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'call_to_action_1'){
                $call1_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'background_image_section'){
                $bgimage_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'flash_cards'){
                $flash_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'simple_header_and_description'){
                $header_descp_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->first();
            }
            else if ($section->section_slug == 'accordion_section_2'){
                $list_2 = $section->list_number_2;
                $accordian2_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'gallery_section'){
                $gallery_elements = SectionGallery::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'gallery_section_2'){
                $gallery2_elements = SectionGallery::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
            else if ($section->section_slug == 'slider_list'){
                $list_3      = $section->list_number_3;
                $slider_list_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }

            else if ($section->section_slug == 'small_box_description'){
                $process_num = $section->list_number_3;
                $process_elements = SectionElement::with('section')
                    ->where('page_section_id', $section->id)
                    ->get();
            }
        }

        return view('frontend.pages.dynamic_page',compact( 'page_detail','sections','process_num','process_elements','map_descp','icon_title_elements','location_map','video_descp_elements','list_2','list_3','basic_elements','call1_elements','gallery2_elements','bgimage_elements','call2_elements','flash_elements','gallery_elements','header_descp_elements','accordian1_elements','accordian2_elements','slider_list_elements','contact_info_elements'));

    }

    public function blogs(){
        $allPosts       = $this->blog->orderBy('created_at', 'DESC')->where('status','publish')->paginate(30);
        return view('frontend.pages.blogs.index',compact('allPosts'));
    }

    public function blogSingle($year,$month,$slug){
        $singleBlog = $this->blog->with('comments.replies','comments.replies.user','comments.user')->where('numeric_slug', $slug)->first();
//        dd($singleBlog->toArray());
        if (!$singleBlog) {
            return abort(404);
        }
        $singleBlog->visit()->dailyIntervals()->withIp();//log the user visit
        $bcategories = $this->bcategory->get();
        $previous    = Blog::where('id', '<', $singleBlog->id)->orderBy('id','desc')->first();
        $next        = Blog::where('id', '>', $singleBlog->id)->orderBy('id')->first();
        $above       = Ads::where('placement','above-post-featured')->where('status','active')->first();
        $below       = Ads::where('placement','below-post-featured')->where('status','active')->first();
        $between1    = Ads::where('placement','in-between-post')->where('status','active')->first();
        $between2    = Ads::where('placement','in-between-post')->where('status','active')->skip(1)->take(3)->get();
        $belowpost   = Ads::where('placement','post-end')->where('status','active')->first();
        return view('frontend.pages.blogs.single',compact('singleBlog','bcategories','previous','next','above','below','between2','between1','belowpost'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');

    }

    public function contactStore(Request $request)
    {
        $theme_data = Setting::first();
            $data = array(
                'fullname'        =>$request->input('name'),
                'message'        =>$request->input('message'),
                'email'        =>$request->input('email'),
                'subject'        =>$request->input('subject'),
                'customer_phone'        =>$request->input('phone'),
                'address'        =>ucwords($theme_data->address),
                'site_email'        =>ucwords($theme_data->email),
                'site_name'        =>ucwords($theme_data->website_name),
                'phone'        =>ucwords($theme_data->phone),
                'logo'        =>ucwords($theme_data->logo),
            );
//             Mail::to('surajmzn75@gmail.com')->send(new ContactDetail($data));

            // Mail::to($theme_data->email)->send(new ContactDetail($data));

            // Session::flash('success','Thank you for contacting us!');
            $status ='success';
            return response()->json($status);


        // return redirect()->back();
    }

    public function blogCategories($slug){
        $category       = Category::where('slug', $slug)->first();
        $id             = Blog::with('categories')->where('status','publish')
            ->whereHas('categories',function ($query) use ($slug){
                $query->where('slug', $slug);
            })->take(3)->pluck('id');

        $allPosts       = Blog::with('categories')->where('status','publish')
            ->whereHas('categories',function ($query) use ($slug){
                $query->where('slug', $slug);
            })->whereNotIn('id', $id)->paginate(6);
        return view('frontend.pages.blogs.category',compact('allPosts','category'));
    }

    public function searchBlog(Request $request)
    {
        $query          = $request->s;
        $searchPosts       = $this->blog->where('title', 'LIKE', '%' . $query . '%')->where('status','publish')->orderBy('title', 'asc')->paginate(5);
        return view('frontend.pages.blogs.search',compact('searchPosts','query'));
    }

    public function redirectOld($one,$two,$three){
        if(is_numeric($one)){
            return redirect('https://sub.darpandainik.com/'.$one.'/'.$two.'/'.$three);
        }else{
            return redirect()->intended();
        }
    }

    public function removeFacebookUser(Request $request){

    }

    public function team(){
        $teams = Team::orderBy('order', 'asc')->get();
        return view('frontend.pages.team',compact('teams'));
    }

    public function aboutUs(){
        $homesettings    = HomePage::first();
        return view('frontend.pages.aboutus',compact('homesettings'));
    }

    public function videoNews(){
        $videoPost    = VideoGallery::orderBy('created_at', 'desc')->paginate(12);
        return view('frontend.pages.video',compact('videoPost'));
    }

}

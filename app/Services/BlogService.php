<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;


class BlogService {

    private $model, $dataTables;

    public function __construct(Blog $blog, DataTables $dataTables)
    {
        $this->model = $blog;
        $this->dataTables = $dataTables;
    }

    public function getDataForDatatable(Request $request){

        $query = $this->model->query()->withTotalVisitCount()->with('categories')->orderBy('created_at', 'desc');
        return $this->dataTables->eloquent($query)
            ->editColumn('category',function ($blog){
                $params = [
                    'categories' => $blog->categories,
                ];
                return view('backend.blog.includes.category_list', compact('params'));
            })
//            ->editColumn('tags',function ($blog){
//                $params = [
//                    'tags' => $blog->tags,
//                ];
//                return view('backend.blog.includes.tag_list', compact('params'));
//
//            })
            ->editColumn('page_views',function ($blog){
                return '<p class="page-views">'.$blog->totalCount().'</p>';
            })
            ->editColumn('status',function ($blog){
                $params = [
                    'blog' => $blog,
                ];
                return view('backend.blog.includes.status', compact('params'));
            })
            ->editColumn('action',function ($blog){
                $params = [
                    'blog' => $blog,
                ];
                return view('backend.blog.includes.dataTable_action', compact('params'));

            })
            ->rawColumns(['action','category','tags','page_views','status'])
            ->addIndexColumn()
            ->make(true);



    }

}

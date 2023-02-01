@extends('frontend.layouts.master')
@section('title') User Dashboard @endsection
@section('css')
    <style>

    </style>
@endsection
@section('content')


    <div class="blog-section section">
        <div class="container">

            <!-- Feature Post Row Start -->
            <div class="row">

                <div class="col-lg-12 col-12 mb-50">

                    <!-- Post Block Wrapper Start -->
                    <div class="post-block-wrapper">

                        <!-- Post Block Head Start -->
                        <div class="head feature-head">

                            <!-- Title -->
                            <h4 class="title">User Dashboard</h4>

                            <!-- Tab List Start -->
                            <ul class="post-block-tab-list feature-post-tab-list nav d-none d-md-block">
                                <li class="nav-item"><a class="active" data-bs-toggle="tab" href="#feature-comments">Comments</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" href="#feature-likes">Likes</a></li>
                                <li class="nav-item"><a data-bs-toggle="tab" href="#feature-profile">Profile</a></li>
                                <li class="nav-item"> <a  href="#"   onclick="event.preventDefault();
                                                     document.getElementById('customer-logout-form').submit();" id="v-pills-settings-tab" aria-selected="false">
                                        <i class="fas fa-sign-out-alt mr-2"></i>
                                        <form id="customer-logout-form" action="{{ route('logout') }}"  method="POST" class="d-none">
                                            @csrf
                                        </form>
                                        <span class="font-weight-bold small text-uppercase">Logout</span></a></li>
                            </ul>

                        </div>


                        <div class="body pb-0">
{{--                            <div class="tab-content">--}}

{{--                                <div class="tab-pane fade show active" id="feature-comments">--}}

{{--                                    <div class="row">--}}

{{--                                        <div class="table-responsive">--}}
{{--                                            <table id="all-orders" class="table table-striped table-bordered  responsive" role="grid" aria-describedby="basic-col-reorder_info">--}}
{{--                                                <thead>--}}
{{--                                                <tr>--}}
{{--                                                    <th>Comment</th>--}}
{{--                                                    <th>Commented on</th>--}}
{{--                                                    <th>Replies</th>--}}
{{--                                                    <th>Action</th>--}}
{{--                                                </tr>--}}
{{--                                                </thead>--}}
{{--                                                <tbody>--}}
{{--                                                @if(count($orders)>0)--}}
{{--                                                    @foreach($orders as  $order)--}}
{{--                                                        <tr>--}}
{{--                                                            <td>{{@$order->order_number}}</td>--}}
{{--                                                            <td>NPR. {{number_format(@$order->total_amount)}}</td>--}}
{{--                                                            <td>{{\Carbon\Carbon::parse(@$order->created_at)->isoFormat('MMM Do, YYYY')}}</td>--}}
{{--                                                            <td>{{@$order->user->email}}</td>--}}
{{--                                                            <td class="text-right">--}}
{{--                                                                <a class="btn btn-sm btn-warning action-delete" href="#" hrm-delete-per-action="{{route('orders.destroy',$order->id)}}"> <i class="fa fa-trash"></i> </a>--}}
{{--                                                            </td>--}}
{{--                                                        </tr>--}}
{{--                                                    @endforeach--}}
{{--                                                @else--}}
{{--                                                    <tr>--}}
{{--                                                        <td colspan="6" style="text-align: center">You do not have order(s) place yet. Look through our <a href="{{route('product.frontend')}}" style="color: #0a90eb">products</a> to place your order.</td>--}}
{{--                                                    </tr>--}}
{{--                                                @endif--}}
{{--                                                </tbody>--}}
{{--                                            </table>--}}
{{--                                        </div>--}}
{{--                                        <form action="#" method="post" id="deleted-form" >--}}
{{--                                            {{csrf_field()}}--}}
{{--                                            <input name="_method" type="hidden" value="DELETE">--}}
{{--                                        </form>--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="tab-pane fade" id="feature-likes">--}}

{{--                                    <div class="row">--}}

{{--                                        <!-- Post Wrapper Start -->--}}
{{--                                        <div class="col-md-6 col-12 mb-20">--}}

{{--                                            <!-- Post Start -->--}}
{{--                                            <div class="post feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-12.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>--}}
{{--                                                        </div>--}}

{{--                                                        <!-- Description -->--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post End -->--}}

{{--                                            <!-- Post Start -->--}}
{{--                                            <div class="post feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-11.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h4 class="title"><a href="post-details.html">Fashion is about some thing that comes from with in you.</a></h4>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>--}}
{{--                                                        </div>--}}

{{--                                                        <!-- Description -->--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post End -->--}}

{{--                                        </div><!-- Post Wrapper End -->--}}

{{--                                        <!-- Small Post Wrapper Start -->--}}
{{--                                        <div class="col-md-6 col-12 mb-20">--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-16.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-17.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-18.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Most beautiful lens for an amaing photo.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-13.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-14.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-15.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                        </div><!-- Small Post Wrapper End -->--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="tab-pane fade" id="feature-profile">--}}

{{--                                    <div class="row">--}}

{{--                                        <!-- Post Wrapper Start -->--}}
{{--                                        <div class="col-md-6 col-12 mb-20">--}}

{{--                                            <!-- Post Start -->--}}
{{--                                            <div class="post feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-12.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h4 class="title"><a href="post-details.html">How group of rebel are talking on Banasree epidemic.</a></h4>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>--}}
{{--                                                        </div>--}}

{{--                                                        <!-- Description -->--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post End -->--}}

{{--                                            <!-- Post Start -->--}}
{{--                                            <div class="post feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-11.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h4 class="title"><a href="post-details.html">Fashion is about some thing that comes from with in you.</a></h4>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <a href="#" class="meta-item author"><i class="fa fa-user"></i>Sathi Bhuiyan</a>--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                            <a href="#" class="meta-item comment"><i class="fa fa-comments"></i>(34)</a>--}}
{{--                                                        </div>--}}

{{--                                                        <!-- Description -->--}}
{{--                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elits. Proin nec purus lectus. Aenean sodales quis eros is quis eleifend. Vestibulum condimentum.</p>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post End -->--}}

{{--                                        </div><!-- Post Wrapper End -->--}}

{{--                                        <!-- Small Post Wrapper Start -->--}}
{{--                                        <div class="col-md-6 col-12 mb-20">--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-16.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-17.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Apple, time to IOS With macos.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-18.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Most beautiful lens for an amaing photo.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-13.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Hynpodia helps female travelers find health.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-14.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Australia announced squad for Bangladesh tour.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                            <!-- Post Small Start -->--}}
{{--                                            <div class="post post-small post-list feature-post post-separator-border">--}}
{{--                                                <div class="post-wrap">--}}

{{--                                                    <!-- Image -->--}}
{{--                                                    <a class="image" href="post-details.html"><img src="img/post/post-15.jpg" alt="post"></a>--}}

{{--                                                    <!-- Content -->--}}
{{--                                                    <div class="content">--}}

{{--                                                        <!-- Title -->--}}
{{--                                                        <h5 class="title"><a href="post-details.html">Fish Fry With green vegetables.</a></h5>--}}

{{--                                                        <!-- Meta -->--}}
{{--                                                        <div class="meta fix">--}}
{{--                                                            <span class="meta-item date"><i class="fa fa-clock-o"></i>10 March 2022</span>--}}
{{--                                                        </div>--}}

{{--                                                    </div>--}}

{{--                                                </div>--}}
{{--                                            </div><!-- Post Small End -->--}}

{{--                                        </div><!-- Small Post Wrapper End -->--}}

{{--                                    </div>--}}

{{--                                </div>--}}

{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
<script>
    $(document).on('click','.customer-remove', function (e) {
        e.preventDefault();
        var action = $(this).attr('hrm-delete-per-action');
        swal({
            title: "Are You Sure?",
            text: "Your login credentials including order details will be removed permanently!",
            type: "info",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        }, function(){
            $.get( action )
                .done(function(response) {
                    swal("Deleted!", "Your credential was removed successfully", "success");
                    $(response).remove();
                    setTimeout(function() {
                        window.location.reload();
                    }, 2500);


                })
                .fail(function(response){
                    console.log(response)

                });
        });
    });

</script>
@endsection

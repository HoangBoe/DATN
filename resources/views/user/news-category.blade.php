@extends('layouts.user-master-layout',['currentPage' => 'News Category'])
@section('page-title','News Category')
@section('content')
    <head>
        <link href="{{asset('newstheme/css/bootstrap1.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/fonts/font-awesome/css/font-awesome1.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/owl.carousel.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/owl.theme.default.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/offcanvas.min.css')}}" rel="stylesheet">
        <link href="{{asset('newstheme/css/style1.css')}}" rel="stylesheet">
    </head>
    {{--Content--}}
    <nav aria-label="breadcrumb" class="align-items-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">Tin Tức Thể Hình</a></li>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="#">{{$category->name}}</a>
            </li>
        </ol>
    </nav>
    <!-- Feature Category Section & sidebar -->
    <section id="feature_category_section" class="feature_category_section category_page section_wrapper">
        <div class="container">
            <div class="row">
                <?php
                $data = $news->shift();
                ?>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="feature_news_item category_item">
                                <div class="item">
                                    <div class="item_wrapper">
                                        <div class="item_img">
                                            <img style="width: 847px; height: 635px" class="img-responsive" src="{{$data['images']}}" alt="Chania">
                                        </div><!--item_img-->
                                        <div class="item_title_date">
                                            <div class="news_item_title">
                                                <h1><a style="font-weight: bold" href="/news/{{$data['id']}}.html">{{$data['title']}}</a></h1>
                                            </div><!--news_item_title-->
                                            <div class="item_meta"><a href="#">{{$data['created_at']}}</a> by: <a href="#">Admin</a></div>
                                        </div><!--item_title_date-->
                                    </div><!--item_wrapper-->
                                    <div class="item_content">{{$data['summary']}}
                                    </div><!--item_content-->
                                </div><!--item-->
                            </div><!--feature_news_item-->
                        </div><!--col-md-6-->
                    </div>
                    <div class="row">
                        @foreach($news->all() as $others)
                        <div class="col-md-6">
                            <div class="feature_news_item">
                                <div class="item">
                                    <div class="item_wrapper">
                                        <div class="item_img">
                                            <img style="width: 408px; height: 306px" class="img-responsive" src="{{$others['images']}}" alt="Chania">
                                        </div> <!--item_img-->
                                        <div class="item_title_date">
                                            <div class="news_item_title">
                                                <h1><a style="font-weight: bold" href="/news/{{$others['id']}}.html">{{$others['title']}}</a></h1>
                                            </div>
                                            <div class="item_meta"><a href="#">{{$others['created_at']}}</a> by: <a href="#">Admin</a></div>
                                        </div><!--item_title_date-->
                                    </div> <!--item_wrapper-->
                                    <div class="item_content">{{$others['summary']}}
                                    </div>
                                </div><!--item-->
                            </div><!--feature_news_item-->
                        </div><!--col-md-6-->
                        @endforeach
                    </div><!--row-->

                    <div class="row text-center">
                        <div class="col-md-12">
                            {{ $news->links() }}
                        </div>
                    </div><!--pagination-->

                </div><!--col-md-9-->

                <div class="col-md-3">
                    <div class="tab sitebar" >
                        <div class="sidebar_title">
                            <h2 style="padding: 20px 15px 0px 20px">Popular</h2>
                        </div>
                        <div class="tab-content">
                            @foreach($popular as $news)
                                <div class="tab-pane active" id="1">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="/news/{{$news->id}}.html"><img class="media-object" width="120px" height="80px" src="{{$news->images}}" alt="Generic placeholder image"></a>
                                        </div><!--media-left-->
                                        <div class="media-body">
                                            <h3 class="media-heading"><a href="/news/{{$news->id}}.html" style="font-size: 13px; font-weight: bold ">{{$news->title}}</a></h3>
                                            <span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-full"></i>
									</span>
                                        </div><!--media-body-->
                                    </div><!--media-->
                                </div>
                            @endforeach
                        <!--tab-pane-->
                        </div><!--tab-content-->
                    </div><!--tab-->

                    <div class="ad">
                        <a href="http://localhost:8000/product"><img style="width: 255px; height: 269px" class="img-responsive" src="{{asset('img/news/ad1.jpg')}}" alt="img" /></a>
                    </div>

                    <div class="ad">
                        <img class="img-responsive" src="{{asset('newstheme/img/img-ad2.jpg')}}" alt="img" />
                    </div>

                    <div class="most_comment">
                        <div class="sidebar_title">
                            <h2>Most Commented</h2>
                        </div>
                        <?php
                        $most_comment_news = DB::select(
                            "SELECT n.id, n.title, n.images, COUNT(c.id) AS cc FROM `news` AS n
                                LEFT JOIN `comments` AS c
                                ON c.id_news = n.id
                                GROUP BY n.id, n.title, n.images
                                ORDER BY cc DESC
                                LIMIT 0,3");
                        ?>
                        @foreach($most_comment_news as $n)
                            <div class="media">
                                <div class="media-left">
                                    <a href="/news/{{$n->id}}.html"><img class="media-object" src="{{$n->images}}" width="100px" height="80px"></a>
                                </div><!--media-left-->
                                <div class="media-body">
                                    <h3 class="media-heading"><a href="/news/{{$n->id}}.html">{{$n->title}}</a></h3>
                                    <div class="comment_box">
                                        <div class="comments_icon"> <i class="fa fa-comments" aria-hidden="true"></i></div>
                                        <div class="comments"><a href="#">{{$n->cc}} Comments</a></div>
                                    </div><!--comment_box-->
                                </div><!--media-body-->
                            </div><!--media-->
                        @endforeach
                    </div><!--most_comment-->
                </div>
            </div>
        </div>
    </section><!--feature_category_section-->
    {{--Script--}}
    <script src="{{asset('newstheme/js/jquery.min.js')}}"></script>
    <script src="{{asset('newstheme/js/owl.carousel.js')}}"></script>
    <script src="{{asset('newstheme/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('newstheme/js/script.js')}}"></script>
    <script src="{{asset('newstheme/js/offcanvas.min.js')}}"></script>
@endsection

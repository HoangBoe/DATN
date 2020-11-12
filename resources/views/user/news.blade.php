@extends('layouts.user-master-layout',['currentPage' => 'News'])
@section('page-title','News')
@section('content')
    <link href="{{asset('newstheme/css/bootstrap1.min.css')}}" rel="stylesheet">
    <link href="{{asset('newstheme/fonts/font-awesome/css/font-awesome1.min.css')}}" rel="stylesheet">
    <link href="{{asset('newstheme/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{asset('newstheme/css/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('newstheme/css/offcanvas.min.css')}}" rel="stylesheet">
    <link href="{{asset('newstheme/css/style1.css')}}" rel="stylesheet">

    {{--Content--}}
    <nav aria-label="breadcrumb" class="align-items-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">Tin Tức Thể Hình</a></li>
        </ol>
    </nav>
    <body>
    <div id="main-wrapper">
        <!-- Feature Carousel Section -->
        <section id="feature_news_section" class="feature_news_section section_wrapper">
            <div class="container">
                <div class="row" >
                    <div class="col-md-6">
                        <div class="feature_news_carousel">
                            <div id="featured-news-carousal" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($best2 as $key => $item)
                                        <?php
                                        $class = $key === 0 ? 'item active feature_news_item' : 'item feature_news_item';
                                        ?>
                                        <div class="{{$class}}">
                                            <div class="item_wrapper">
                                                <div class="item_img">
                                                    <img class="img-responsive" style="height: 380px" src="{{$item->images}}" alt="">
                                                </div> <!--item_img-->
                                                <div class="item_title_date">
                                                    <div class="news_item_title">
                                                        <h2><a href="news/{{$item->id}}.html"
                                                               style="font-weight: bold">{{$item->title}}</a></h2>
                                                    </div>
                                                </div> <!--item_title_date-->
                                            </div>    <!--item_wrapper-->
                                            <div class="item_content" style="font-size: x-small"><a href="#" style="font-size: x-small">{{$item->created_at}}</a> by: <a href="#" style="font-size: x-small">Admin</a></div>
                                        </div><!--feature_news_item-->
                                    @endforeach

                                <!-- Left and right controls -->
                                    <div class="control-wrapper">
                                        <a class="left carousel-control" href="#featured-news-carousal" role="button"
                                           data-slide="prev">
                                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        </a>
                                        <a class="right carousel-control" href="#featured-news-carousal" role="button"
                                           data-slide="next">
                                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div><!--carousel-inner-->
                            </div><!--carousel-->
                        </div><!--feature_news_carousel-->
                    </div><!--col-md-6-->

                    <div class="col-md-6">
                        <div class="feature_news_static">
                            <div class="row">
                                @foreach($best4 as $item)
                                    <div class="col-md-6">
                                        <div class="feature_news_item">
                                            <div class="item active">
                                                <div class="item_wrapper">
                                                    <div class="item_img">
                                                        <img class="img-responsive" style="height: 380px" src="{{$item->images}}"
                                                             alt="Chania">
                                                    </div> <!--item_img-->
                                                    <div class="item_title_date" style="width: 210px; height: 70px; font-size: small; padding: 0px; " >
                                                        <div class="news_item_title">
                                                            <h2><a href="news/{{$item->id}}.html" style="font-weight: bold">{{$item->title}}</a>
                                                            </h2>
                                                        </div>
                                                    </div><!--item_title_date-->
                                                </div> <!--item_wrapper-->
                                                <div class="item_content" style="font-size: x-small"><a href="#" style="font-size: x-small">{{$item->created_at}}</a> by:<a href="#" style="font-size: x-small">Admin</a></div>

                                            </div><!--item-->
                                        </div><!--feature_news_item-->
                                    </div>
                                @endforeach
                            </div><!--row-->
                        </div><!--feature_news_static-->
                    </div><!--col-md-6-->
                </div><!--row-->
            </div><!--container-->
        </section><!--feature_news_section-->

        <!-- Feature Category Section & sidebar -->
        <section id="feature_category_section" class="feature_category_section section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        @foreach($obj_categoryNews as $tl)
                            <div class="category_layout">
                                <div class="item_caregory red"><h2><a href="/news/categoryNews{{$tl->id}}.html">{{$tl->name}}</a></h2></div>
                                <?php
                                $data = $tl->news->where('hot', 1)->sortByDesc('created_at')->take(5);
                                $news1 = $data->shift();
                                ?>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="item feature_news_item">
                                            <div class="item_wrapper">
                                                <div class="item_img">
                                                    <a href="/news/{{$news1['id']}}.html"><img class="img-responsive"
                                                                                              style="width: 500px ;height: 400px"
                                                                                              src="{{$news1['images']}}"
                                                                                              alt="Chania"></a>
                                                </div><!--item_img-->
                                                <div class="item_title_date">
                                                    <div class="news_item_title">
                                                        <h1><a href="/news/{{$news1['id']}}.html"
                                                               style="font-weight: bold">{{$news1['title']}}</a></h1>
                                                    </div><!--news_item_title-->
                                                    <div class="item_meta">{{$news1['created_at']}} by: <a href="#">admin</a>
                                                    </div>
                                                </div><!--item_title_date-->
                                            </div><!--item_content-->
                                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error
                                                sit
                                            </div>

                                        </div><!--feature_news_item-->
                                    </div><!--col-md-7-->
                                    <div class="col-md-5">
                                        <div class="media_wrapper">
                                            @foreach($data->all() as $others)
                                                <div class="media">
                                                    <div class="media-left">
                                                        <a href="/news/{{$others['id']}}.html"><img class="media-object"
                                                                                                   style="width:100px; height: 70px "
                                                                                                   src="{{$others['images']}}"
                                                                                                   alt="Generic placeholder image"></a>
                                                    </div><!--media-left-->
                                                    <div class="media-body">
                                                        <h3 class="media-heading"><a href="/news/{{$others['id']}}.html">{{$others['title']}}
                                                            </a></h3>
                                                    </div><!--media-body-->
                                                </div><!--media-->
                                            @endforeach
                                        </div><!--media_wrapper-->
                                    </div><!--col-md-5-->
                                </div><!--row-->
                            </div><!--category_layout-->

                        @endforeach

                        <div id="more_news_item" class="more_news_item">
                            <div class="more_news_heading"><h2><a href="#" style="font-weight: bolder">More News</a>
                                </h2></div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feature_news_item">
                                        <div class="item">
                                            <div class="item_wrapper">
                                                <div class="item_img">
                                                    <img class="img-responsive"
                                                         src="{{asset('newstheme/img/img-news.jpg')}}" alt="Chania">
                                                </div><!--item_img-->
                                                <div class="item_title_date">
                                                    <div class="news_item_title">
                                                        <h3><a href="#">Track Roboto the Real Tracker.</a></h3>
                                                    </div><!--news_item_title-->
                                                    <div class="item_meta"><a href="#">20Aug- 2020,</a> by:<a href="#">Admin</a>
                                                    </div>
                                                </div><!--item_title_date-->
                                            </div><!--item_wrapper-->
                                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error
                                                sit
                                            </div><!--item_content-->

                                        </div><!--item-->
                                    </div><!--feature_news_item-->
                                </div><!--col-xs-4-->

                                <div class="col-md-4">
                                    <div class="feature_news_item">
                                        <div class="item active">
                                            <div class="item_wrapper">
                                                <div class="item_img">
                                                    <img class="img-responsive"
                                                         src="{{asset('newstheme/img/img-news1.jpg')}}" alt="Chania">
                                                </div><!--item_img-->
                                                <div class="item_title_date">
                                                    <div class="news_item_title">
                                                        <h3><a href="#">Track Roboto the Real Tracker.</a></h3>
                                                    </div><!--news_item_title-->
                                                    <div class="item_meta"><a href="#">20Aug- 2020,</a> by:<a href="#">Admin</a>
                                                    </div>
                                                </div><!--item_title_date-->
                                            </div><!--item_wrapper-->
                                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error
                                                sit
                                            </div><!--item_content-->

                                        </div><!--item-->
                                    </div><!--feature_news_item-->
                                </div><!--col-xs-4-->

                                <div class="col-md-4">
                                    <div class="feature_news_item">
                                        <div class="item active">
                                            <div class="item_wrapper">
                                                <div class="item_img">
                                                    <img class="img-responsive"
                                                         src="{{asset('newstheme/img/img-news2.jpg')}}" alt="Chania">
                                                </div><!--item_img-->
                                                <div class="item_title_date">
                                                    <div class="news_item_title">
                                                        <h3><a href="#">Track Roboto the Real Tracker.</a></h3>
                                                    </div><!--news_item_title-->
                                                    <div class="item_meta"><a href="#">20Aug- 2020,</a> by:<a href="#">Admin</a>
                                                    </div>
                                                </div><!--item_title_date-->
                                            </div><!--item_wrapper-->
                                            <div class="item_content">Sed ut perspiciatis unde omnis iste natus error
                                                sit
                                            </div><!--item_content-->

                                        </div><!--item-->
                                    </div><!--feature_news_item-->
                                </div><!--col-xs-4-->
                            </div><!--row-->
                        </div><!--more_news_item-->
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

        <!-- Feature Video Item -->
        <section id="feature_video_item" class="feature_video_item section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="feature_video_wrapper">
                            <div class="feature_video_title"><h2>Featured Videos</h2></div>

                            <div id="feature_video_slider" class="owl-carousel">
                                <div class="item">
                                    <div class="video_thumb"><img src="{{asset('newstheme/img/video.jpg')}}"
                                                                  alt="Owl Image"></div>
                                    <div class="video_info">
                                        <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the
                                                    craze of Runner world</a></h3></div><!--video_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2020</a></div><!--item_meta-->
                                    </div><!--video_info-->
                                </div>
                                <div class="item">
                                    <div class="video_thumb"><img src="{{asset('newstheme/img/video2.jpg')}}"
                                                                  alt="Owl Image"></div>
                                    <div class="video_info">
                                        <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the
                                                    craze of Runner world</a></h3></div><!--video_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2020</a></div><!--item_meta-->
                                    </div><!--video_info-->
                                </div>
                                <div class="item">
                                    <div class="video_thumb"><img src="{{asset('newstheme/img/video3.jpg')}}"
                                                                  alt="Owl Image"></div>
                                    <div class="video_info">
                                        <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the
                                                    craze of Runner world</a></h3></div><!--video_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2020</a></div><!--item_meta-->
                                    </div><!--video_info-->
                                </div>
                                <div class="item">
                                    <div class="video_thumb"><img src="{{asset('newstheme/img/video2.jpg')}}"
                                                                  alt="Owl Image"></div>
                                    <div class="video_info">
                                        <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the
                                                    craze of Runner world</a></h3></div><!--video_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                                    </div><!--video_info-->
                                </div>
                                <div class="item">
                                    <div class="video_thumb"><img src="{{asset('newstheme/img/video.jpg')}}"
                                                                  alt="Owl Image"></div>
                                    <div class="video_info">
                                        <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the
                                                    craze of Runner world</a></h3></div><!--video_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                                    </div><!--video_info-->
                                </div>
                                <div class="item">
                                    <div class="video_thumb"><img src="{{asset('newstheme/img/video3.jpg')}}"
                                                                  alt="Owl Image"></div>
                                    <div class="video_info">
                                        <div class="video_item_title"><h3><a href="#">Track & Fiels famous still in the
                                                    craze of Runner world</a></h3></div><!--video_item_title-->
                                        <div class="item_meta"><a href="#">20Aug- 2015</a></div><!--item_meta-->
                                    </div><!--video_info-->
                                </div>
                            </div><!--feature_video_slider-->


                        </div><!--col-xs-12-->
                    </div><!--row-->
                </div><!--feature_video_wrapper-->
            </div><!--container-->
        </section>


    </div> <!--main-wrapper-->

    <script src="{{asset('newstheme/js/jquery.min.js')}}"></script>

    <!-- Owl carousel -->
    <script src="{{asset('newstheme/js/owl.carousel.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('newstheme/js/bootstrap.min.js')}}"></script>

    <!-- Theme Script File-->
    <script src="{{asset('newstheme/js/script.js')}}"></script>

    <!-- Off Canvas Menu -->
    <script src="{{asset('newstheme/js/offcanvas.min.js')}}"></script>

@endsection
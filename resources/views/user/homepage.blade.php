@extends('layouts.user-master-layout',['currentPage' => 'homepage'])
@section('page-title','Gymer Store')
@section('content')

    <!-- Banner -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1"
                     style="background-image: url({{asset('img/banner.jpg')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="/product"
                               class="flex-c-m size2 bo-rad-23 s-text2 text-white bgblack hov1 trans-0-4">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1"
                     style="background-image: url({{asset('img/banner2.jpg')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                            <a href="/product" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1"
                     style="background-image: url({{asset('img/banner3.jpg')}});">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="/product" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua ngay
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img style="width:370px; height: 370px" src="{{$whey_protein->image}}" alt="IMG-BENNER">
                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{'/product'.'?categoryId='.$whey_protein->id}}"
                               class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 bg-dark text-white">
                                Whey Protein
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img style="width:370px; height: 370px" src="{{$sua_tang_can->image}}" alt="IMG-BENNER">
                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{'/product'.'?categoryId='.$sua_tang_can->id}}"
                               class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 bg-dark text-white">
                                Sữa tăng cân
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img style="width:370px; height: 370px" src="{{$bcaa->image}}" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{'/product'.'?categoryId='.$bcaa->id}}"
                               class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 bg-dark text-white">
                                BCAA
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img style="width:370px; height: 370px" src="{{$phu_kien->image}}" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{'/product'.'?categoryId='.$phu_kien->id}}"
                               class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 bg-dark text-white">
                                Phụ kiện
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img style="width:370px; height: 370px" src="{{$vitamin->image}}" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{'/product'.'?categoryId='.$vitamin->id}}"
                               class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 bg-dark text-white">
                                Vitamin, khoáng
                            </a>
                        </div>
                    </div>

                    <!-- block2 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img style="width:370px; height: 370px" src="{{$pre_workout->image}}" alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="{{'/product'.'?categoryId='.$pre_workout->id}}"
                               class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4 bg-dark text-white">
                                Pre-workout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HOT Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    SẢN PHẢM NỔI BẬT
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    @foreach($obj as $item)
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative" style="text-align: center">
                                    <?php
                                    if ($item->BlockStyle == 'both') {
                                        echo '<span class="block2-labelsale text-danger">' . '-' . $item->discount . '%' . '</span>' . '<span class="block2-labelnew"></span>';
                                    } else if ($item->BlockStyle == 'new') {
                                        echo '<span class="block2-labelnew"></span>';
                                    } else if ($item->BlockStyle == 'sale') {
                                        echo '<span class="block2-labelsale">' . '-' . $item->discount . '%' . '</span>';
                                    }
                                    ?>
                                    <a href="/product/{{$item->id}}"><img
                                                src="{{$item->images}}"
                                                alt="IMG-PRODUCT">
                                        <div class="block2-overlay trans-0-4">
                                            <a href="/product/{{$item->id}}"
                                               class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4"
                                                 id="add-cart-{{$item->id}}">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Thêm vào giỏ hàng
                                                </button>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="block2-txt p-t-20" style="text-align: center">
                                    <a href="/product/{{$item->id}}" class="block2-name dis-block s-text3 p-b-5">
                                        {{$item->name}}
                                    </a>

                                    <span class="block2-newprice m-text8 p-r-5">
									{{$item->discountPriceString}}
								</span>

                                    <span class="block2-oldprice m-text7 p-r-5">
									{{$item->originalPriceString}}
								</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section>

    <!-- Brands -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                THƯƠNG HIỆU
            </h3>
        </div>

        <div class="flex-w">
            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{asset('img/nhan_hieu1.jpg')}}" alt="IMG-INSTAGRAM">

                <a href="{{'/brands'}}" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
                            in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                            metus elit.
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{asset('img/nhan_hieu2.jpg')}}" alt="IMG-INSTAGRAM">

                <a href="{{'/brands'}}" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
                            in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                            metus elit.
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{asset('img/nhan_hieu3.jpg')}}" alt="IMG-INSTAGRAM">

                <a href="{{'/brands'}}" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
                            in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                            metus elit.
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{asset('img/nhan_hieu4.jpg')}}" alt="IMG-INSTAGRAM">

                <a href="{{'/brands'}}" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
                            in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                            metus elit.
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src="{{asset('img/nhan_hieu5.jpg')}}" alt="IMG-INSTAGRAM">

                <a href="{{'/brands'}}" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla
                            in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget
                            metus elit.
                        </p>

                        <span class="s-text9">
							Photo by @nancyward
						</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    SHIP COD TOÀN QUỐC
                </h4>

                <span class="s-text11 t-center">
                    Nhận hàng và thanh toán tiền tại nhà
				</span>

            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    ĐỔI TRẢ VỚI BẤT KỲ LÍ DO
                </h4>

                <span class="s-text11 t-center">
                    Dễ dàng trả lại hàng trong 30 ngày và thay thế bằng một sản phẩm mới
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    ĐỘI NGŨ TƯ VẤN CHUYÊN SÂU
                </h4>

                <span class="s-text11 t-center">
					Tư vấn 1 cách bài bản, khoa học nhất
				</span>
            </div>
        </div>
    </section>
@endsection

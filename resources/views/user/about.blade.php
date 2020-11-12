@extends('layouts.user-master-layout')
@section('page-title','Giới Thiệu')
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{asset('img/contact_banner.jpg')}});">
    <h2 class="l-text2 t-center" style="color: White">
        Giới Thiệu
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-b-30">
                <div class="hov-img-zoom">
                    <img src="https://i.imgur.com/auo4PfT.jpg" height="450" alt="IMG-ABOUT">
                </div>
            </div>

            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                    Về chúng tôi
                </h3>

                <p class="p-b-28">
                    Gymer Store cam kết bán hàng chính hãng công ty phân phối, nguồn gốc rõ ràng, đảm bảo chất lượng . Sản phẩm đều có tem cào chứng nhận của bộ Công An và bộ Y Tế kiểm định . Cam kết không bán hàng giả, hàng kém chất lượng , đền gấp 100 lần giá trị sản phẩm nếu phát hiện hàng giả .
                </p>

                <p class="p-b-28">
                    Chúng tôi luôn mong muốn đem lại hiệu quả , sự tin tưởng và an tâm của khách hàng mỗi khi sử dụng sản phẩm của Gymerstore.vn
                </p>

                <p class="p-b-28">
                    Phương Châm Của Gymer Store :
                </p>

                <div class="bo13 p-l-29 m-l-9 p-b-10">
                    <p class="p-b-11">
                        - Hàng đảm bảo chất lượng , mang lại hiệu quả thực sự cho khách hàng
                    </p>
                    <p class="p-b-11">
                        - Chính sách bán hàng rõ ràng, cam kết giá tốt nhất, giá V.I.P rẻ nhất so với thị trường
                    </p>
                    <p class="p-b-11">
                        - Luôn có chương trình khuyến mại , giảm giá đối với khách hàng thân thiết
                    </p>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
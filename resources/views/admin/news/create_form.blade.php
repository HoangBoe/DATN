@extends('layouts.new-master', ['currentPage' => 'create'])
@section('page-title', 'THÊM TIN MỚI')
@section('active-create-news','active')
@section('show-news','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm tin tức mới</h1>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-lg-6 col-md-offset-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-success hidden">
                    {{--{{ session()->get('message') }}--}}
                </div>
            @endif
            <form action="/admin/news" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                    <p class="alert-danger" style="margin-top: 1%"></p>
                </div>
                <div class="form-group">
                    <label>Tóm tắt</label>
                    <textarea class="form-control " name="summary" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label>Loại tin</label>
                    <select class="form-control" name="categoryNewsId">
                        @foreach($obj_categoryNews as $item)
                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control ckeditor" id="ckeditor" rows="10" cols="60" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Hình ảnh</label>
                    <input class="form-control" type="file" multiple="multiple" name="images[]" id="add_images">
                </div>
                <div class="form-group">
                    <label>Nổi bật</label>
                    <label class="radio-inline">
                        <input name="hot" value="0" type="radio"> Không
                    </label>
                    <label class="radio-inline">
                        <input name="hot" value="1" checked="" type="radio"> Có
                    </label>
                </div>
                <div class="preview_images hidden"></div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-block">Xác nhận</button>
                    <button type="reset" class="btn btn-primary btn-block">Đặt lại</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(function() {
            var imagesPreview = function(input, display_images) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            $($.parseHTML('<img>')).attr('src', e.target.result).appendTo(display_images);
                            $("img").addClass("preview_image");
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#add_images').on('change', function() {
                $('.preview_images').removeClass("hidden");
                imagesPreview(this, 'div.preview_images');
            });
            $(":reset").click(function (){
                $(".preview_images").addClass('hidden');
                $(".preview_image").remove();
            });
            if($(".alert-success")[0]){
                swal({
                        title: 'Saved Sucess',
                        type: 'success',
                        allowOutsideClick: true,
                        html: 'News information saved into dababase'
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            window.location.href = '/admin/news';
                        }
                    });
            }
        });

    </script>
@endsection
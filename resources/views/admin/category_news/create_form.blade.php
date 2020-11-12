@extends('layouts.new-master', ['currentPage' => 'create'])
@section('page-title', 'THÊM DANH MỤC TIN')
@section('active-create-category-news','active')
@section('show-category-news','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">THÊM DANH MỤC TIN </h1>
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
            <form action="/admin/categoryNews" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên danh mục</label>
                    <input type="text" class="form-control" name="name">
                    <p class="alert-danger" style="margin-top: 1%"></p>
                </div>
                <div class="form-group" style="text-align: center;">
                    <button type="submit" class="btn btn-primary btn-block">Xác nhận</button>
                    <button type="reset" class="btn btn-primary btn-block">Đặt lại</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        $(function() {
            if($(".alert-success")[0]) {
                swal({
                        title: 'Saved Sucess',
                        type: 'success',
                        allowOutsideClick: true,
                        html: 'Category information saved into dababase'
                    },
                    function (isConfirm) {
                        if (isConfirm) {
                            window.location.href = '/admin/categoryNews';
                        }
                    });
            }
        });

    </script>
@endsection
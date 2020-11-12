@extends('layouts.new-master', ['currentPage' => 'list'])
@section('page-title', 'Danh sách tài khoản')
@section('active-list-admin','active')
@section('show-list','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header text-center" style="font-size: 30px;">Danh sách tài khoản Admin</h1>
        </div>
    </div>
    <div class="panel-body">
        @if(session()->has('message'))
            <div class="alert alert-success hidden">
            </div>
        @endif
        <table width="100%" class="table table-hover" id="dataTables-example" style="background-color: white">
            <thead>
            <tr>
                <th style="text-align: center">Tên tài khoản</th>
                <th style="text-align: center">Họ và tên</th>
                <th style="text-align: center">Giới tính</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Địa chỉ</th>
                <th style="text-align: center">Ngày sinh</th>
                <th style="text-align: center">Phone</th>
                <th style="text-align: center">Trạng thái</th>
                <th style="text-align: center">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($obj as $item)
                <tr class="odd gradeX row-item" id="row-item-{{$item->id}}">
                    <td style="text-align: center">{{$item->username}}</td>
                    <td style="text-align: center">{{$item -> full_name}}</td>
                    <td style="text-align: center">
                        @if($item -> gender == 1)
                            {{'Nữ'}}
                        @else
                            {{'Nam'}}
                        @endif
                    </td>
                    <td style="text-align: center">{{$item -> email}}</td>
                    <td style="text-align: center">{{$item -> address}}</td>
                    <td style="text-align: center">{{$item -> DOB}}</td>
                    <td style="text-align: center">{{$item -> phone}}</td>
                    <td style="text-align: center">
                        @if($item->status==1)
                            <div class="active-banner">
                                Đang kích hoạt
                            </div>
                        @endif
                    </td>
                    <td class="black-icon" style="text-align: center">
                        <a href="#" class="fa fa-lock btn-quick-edit mr-2"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{--Quick Edit Modal--}}
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Sửa thông tin tài khoản</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="quick_edit_form" method="post" action="/admin/quickUpdate/account"
                          enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}
                        <input type="hidden" name="quick-update-id">
                        <div class="form-group">
                            <label>Mô tả</label>
                            <textarea class="form-control" name="description" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input class="form-control" type="file" name="image" id="add_images">
                        </div>
                        <div class="preview_images form-group">
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-update">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--Quick Edit Modal--}}

    <script src="#"></script>
@endsection
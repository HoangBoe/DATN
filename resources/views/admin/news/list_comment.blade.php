@extends('layouts.new-master', ['currentPage' => 'list'])
@section('page-title', 'QUẢN LÝ COMMENT')
@section('active-list-comment','active')
@section('show-news','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý Comment</h1>
        </div>
    </div>
    <div class="panel-body">
        @if(session()->has('message'))
            <div class="alert alert-success hidden">
            </div>
        @endif
        <table width="100%" class="table table-hover" id="dataTables-example2" style="background-color: white">
            <thead>
            <tr>
                <th style="text-align: center">ID </th>
                <th style="text-align: center">Người viết</th>
                <th style="text-align: center">Nội dung Comment</th>
                <th style="text-align: center">Tên tin tức</th>
                <th style="text-align: center">Trạng thái</th>
                <th style="text-align: center">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cmts as $cmt)
                @if(is_null($cmt->news))
                    @continue
                @endif
                <tr class="odd gradeX row-item" id="row-item">
                    <td style="text-align: center">{{$cmt -> id}}</td>
                    <td style="text-align: center"><p style="font-weight: bolder">{{$cmt -> email}}</p>
                        <span style="font-size: small; font-style: italic" >{{date('d/m/Y H:i',strtotime($cmt->created_at))}}</span>
                    </td>
                    <td style="text-align: center">{{$cmt -> content}}</td>
                    <td style="text-align: center">{{$cmt -> news ->title}}</td>
                    <td style="text-align: center">
                        @if($cmt->status==1)
                            <div class="active-banner">
                                Đã duyệt
                            </div>
                        @else
                            <div class="order-cancel-banner">
                                Chưa duyệt
                            </div>
                        @endif
                    </td>
                    <td class="black-icon" style="text-align: center">
                        <a href="#" class="fa fa-lock quick-lock mr-2"
                           data-comment="{{$cmt->id}}" data-status="{{$cmt->status}}"></a>
                        <a href="#" id="{{$cmt -> id}}" class="fa fa-trash mr-2"></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{--Lock Modal--}}
    <div class="modal fade" id="lock-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="lockModalLabel"></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="quick_edit_form" method="post" action="#" enctype="multipart/form-data">
                        <div class="form-group">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="btn-lock">Do it</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{--Lock Modal--}}



    <script src="{{asset('/js/comment_list.js')}}"></script>
@endsection

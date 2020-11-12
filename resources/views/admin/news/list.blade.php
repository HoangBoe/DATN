@extends('layouts.new-master', ['currentPage' => 'list'])
@section('page-title', 'DANH SÁCH DANH MỤC TIN')
@section('active-list-news','active')
@section('show-news','show')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách Tin</h1>
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
                <th style="text-align: center">Tiêu đề</th>
                <th style="text-align: center">Tóm tắt</th>
                {{--<th style="text-align: center">Nội dung</th>--}}
                <th style="text-align: center">Loại tin</th>
                <th style="text-align: center">Nổi bật</th>
                <th style="text-align: center">Thao tác</th>
            </tr>
            </thead>
            <tbody>
            @foreach($obj as $item)
                <tr class="odd gradeX row-item" id="row-item-{{$item->id}}">
                    <td style="text-align: center">{{$item -> id}}</td>
                    <td style="text-align: center"><p>{{$item -> title}}</p>
                        <img width="100px" src={{$item->images}} >
                    </td>
                    <td style="text-align: center">{{$item -> summary}}</td>
                    <td style="text-align: center">{{$item -> category_news -> name}}</td>
                    <td style="text-align: center">
                        @if($item -> hot == 0)
                            {{'Không'}}
                        @else
                            {{'Có'}}
                        @endif
                    </td>
                    <td class="black-icon" style="text-align: center">
                        <a href="#" data-id="{{$item -> id}}" class="fa fa-pencil btn-quick-edit mr-2"></a>
                        <a href="#" id="{{$item -> id}}" class="fa fa-trash mr-2"></a>
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
                    <h3 class="modal-title" id="exampleModalLabel">Sửa tin</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form name="quick_edit_form" method="post" action="/admin/quickUpdate/news"
                          enctype="multipart/form-data">
                        @method('PUT')
                        {{csrf_field()}}
                        <input type="hidden" name="quick-update-id">
                        <input type="hidden" name="remain-images">
                        <div class="form-group">
                            <label>Title</label>
                            <input class="form-control" type="text" name="title">
                        </div>
                        <div class="form-group">
                            <label>Tóm tắt</label>
                            <input class="form-control" type="text" name="summary">
                        </div>
                        <div class="form-group">
                            <label>Nội dung</label>
                            <textarea class="form-control ckeditor" id="ckeditor" rows="10" cols="60" name="content"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Loại tin</label>
                            <select class="form-control" name="category_news_id">
                                @foreach($obj_categoryNews as $item)
                                    <option value="{{$item -> id}}" name="news_category">{{$item -> name}}</option>
                                @endforeach
                            </select>
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
                        <div class="form-group">
                            <label>Ảnh nền </label>
                            <input class="form-control" type="file" multiple="multiple" name="images[]" id="add_images">
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

    <script src="{{asset('/js/list_news.js')}}"></script>
@endsection
@extends('admin.layouts.index')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Set trang phục <small> Danh sách</small></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="d-flex-right">
                        <a href="{{ asset("admin/set/add") }}" class="btn btn-info"><i class="fa fa-plus-circle"></i> Thêm set mới</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        @if(count($errors)>0)
                            <div class="alert alert-danger alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('alert-success'))
                            <div class="alert alert-success alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{session('alert-success')}}
                            </div>
                        @endif
                        
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th class="txt-center">ID</th>
                                    <th class="txt-center">Mô tả</th>
                                    <th class="txt-center">Hành động</th>
                                </tr>
                            </thead>

                            <tbody>

                                @foreach ($sets as $item)
                                    <tr>
                                        <td class="txt-center">{{ str_pad($item->id, 8, '0', STR_PAD_LEFT) }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="txt-center">
                                            <a href="{{ asset("admin/set/$item->id/detail") }}" title="Xem chi tiết" class="btn btn-success btn-xs btn-action">
                                                <i class="fa fa-info"></i>
                                            </a>
                                            <a href="{{ asset("admin/set/$item->id/edit") }}" title="Chỉnh sửa" class="btn btn-info btn-xs  btn-action">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="{{ asset("admin/set/$item->id/delete") }}" title="Xóa" class="btn btn-danger btn-xs  btn-action">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
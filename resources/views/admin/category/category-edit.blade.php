@extends('admin.layouts.index')

@section('content')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Danh mục sản phẩm<small> Chỉnh sửa</small></h3>
            </div>
            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="d-flex-right">
                        <a href="{{ asset('admin/category') }}" class="btn btn-dark"><i class="fa fa-reply"></i></a>
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

                        <form class="form-horizontal form-label-left"
                                action="{{ asset("admin/category/$category->id/edit") }}" 
                                method="POST"
                                enctype="multipart/form-data">

                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">* Tên danh mục</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input
                                        type="text"
                                        class="form-control" 
                                        placeholder="Nhập tên danh mục"
                                        name="name"
                                        value="{{ $category->name }}"
                                        required/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">* Loại</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                    <select class="form-control" 
                                            name="type" required>
                                        <option value="0" 
                                            @if ($category->type == 0)
                                                selected
                                            @endif
                                        >Áo</option>
                                        <option value="1"
                                             @if ($category->type == 1)
                                                selected
                                            @endif
                                        >Quần</option>
                                        <option value="2"
                                             @if ($category->type == 2)
                                                selected
                                            @endif
                                        >Váy</option>
                                        <option value="3"
                                             @if ($category->type == 3)
                                                selected
                                            @endif
                                        >Bộ</option>
                                        <option value="4"
                                             @if ($category->type == 4)
                                                selected
                                            @endif
                                        >Phụ kiện</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <a href="{{ asset('admin/category') }}" class="btn btn-danger">Hủy</a>
                                    <button type="reset" class="btn btn-info">Làm lại</button>
                                    <button type="submit" class="btn btn-success">Lưu</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
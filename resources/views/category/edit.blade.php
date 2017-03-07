@extends('adminlte::layouts.app')


@section('css-content')
    <link href="{{asset('plugins/colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/backend.css')}}" rel="stylesheet" type="text/css" />    
@endsection

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

{{--
@push('header-content')
    <link rel="stylesheet" type="text/css" href="">
@endpush
--}}



@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Edit Category</h3>
                    </div>
{{--
                    <form role="form" method="POST" action="{{route('category-update', ['id'=>$categoryRow->id, 'x'=>'a'])}}">
--}}
                    <form role="form" method="POST" action="{{route('category-update', $categoryRow->id)}}">
                      <div class="box-body">

                        {{csrf_field()}}

                        <div class="form-group">
                          <label for="name">Category Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{$categoryRow->name}}">
                        </div>

                        <div class="form-group">
                            <label for="color">Color</label>
                            <div class="input-group my-colorpicker2 colorpicker-element">
                              <input type="text" class="form-control" id="color" name="color" placeholder="Color Hexa Code" value="{{$categoryRow->color}}">

                              <div class="input-group-addon">
                                <i style="background-color: rgb(255, 5, 5);"></i>
                              </div>
                            </div>
                        </div>
                      
                        <div class="form-group">
                          <label for="is_visible">Visibility</label>
                          <select class="form-control" id="is_visible" name="is_visible">
                            @if($categoryRow->is_visible == 1)
                              <option value="1" selected="true">Visible</option>
                              <option value="0">Not Visible</option>
                            @else
                              <option value="0" selected="true">Not Visible</option>  
                              <option value="1">Visible</option>
                            @endif
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="news_type_id">News Type</label>
                          <select class="form-control" id="news_type_id" name="news_type_id">
                            @if($categoryRow->news_type_id == 1)
                              <option value="1" selected="true">Regular</option>
                              <option value="0">Non Regular</option>
                            @else
                              <option value="0" selected="true">Non Regular</option>  
                              <option value="1">Regular</option>
                            @endif
                          </select>
                        </div>

                        <div class="form-group">
                          <label for="is_fillable">Fillable</label>
                          <select class="form-control" id="is_fillable" name="is_fillable">
                            @if($categoryRow->is_fillable == 1)
                              <option value="1" selected="true">Fillable</option>
                              <option value="0">Not Fillable</option>
                            @else
                              <option value="0" selected="true">Not Fillable</option>  
                              <option value="1">Fillable</option>
                            @endif
                          </select>
                        </div>

                      </div>

                      <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-content')
    <script type="text/javascript" src="{{asset('plugins/colorpicker/bootstrap-colorpicker.min.js')}}"></script>
    <script>
        $(function() {
            $('.my-colorpicker2').colorpicker();
        });
    </script>
@endpush
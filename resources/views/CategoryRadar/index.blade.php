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
                <h3 class="box-title">Category Radar List</h3>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <div class="box-body table-responsive no-padding">
                  <table class="table">
                    <tbody>
                      <tr>
                        <th>#</th>
                        <th>Category Radar</th>
                        <th class="text-center">Color</th>
                        <th class="text-center">Visibility</th>
                        <th class="text-center">News Type</th>
                        <th class="text-center">Fillable</th>
                        <th class="text-center">Action</th>
                      </tr>
                      @foreach($categories as $parentCategoryKey => $parentCategory)
                        <tr>
                          <td>{{$parentCategoryKey + 1}}.</td>
                          <td>{{ucwords($parentCategory->name)}}</td>
                          <td class="text-center">
                            @if($parentCategory->color <> '')
                              <div>
                                <i style="background-color: {{$parentCategory->color}};">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i>
                              </div>
                            @endif
                            {{$parentCategory->color}}
                          </td>
                          <td class="text-center">
                            @if($parentCategory->is_visible == 1)
                                visible
                            @else
                                not visible
                            @endif
                          </td>
                          <td class="text-center">
                            @if($parentCategory->news_type_id == 1)
                              regular
                            @else
                              non regular
                            @endif
                          </td>
                          <td class="text-center">
                            @if($parentCategory->is_fillable == 1)
                              fillable
                            @else
                              not fillable
                            @endif
                          </td>                                  
                          <td class="text-center">
                            
                            <a href="{{route('categoryradar-edit', $parentCategory->id)}}" class="btn btn-warning">edit</a>
                            
                            <form class="display-inline" method="POST" action="{{route('categoryradar-destroy', $parentCategory->id)}}">
                              
                              {{csrf_field()}}                                    
                              
                              <button type="submit" class="btn btn-danger deleteButton" data-categoryName="Category {{ucwords($parentCategory->name)}}">delete</button>
                            
                            </form>

                          </td>
                        </tr>
                        @if(count($parentCategory->children) > 0)
                          <tr>
                            <td colspan="7">  
                              <table id="tableGrid1" align="center" class=" table_detail table table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th>
                                      <a href="#collapse{{$parentCategory->id}}" data-toggle="collapse">Click Here To Show / Hide Sub Category {{ucwords($parentCategory->name)}}</a>
                                      </div>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody id="collapse{{$parentCategory->id}}" class="collapse">
                                  <tr>
                                    <td colspan="2">
                                      <table align="center" class="table table_detail  table-striped">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Sub Category</th>
                                            <th class="text-center">Color</th>
                                            <th class="text-center">Visibility</th>
                                            <th class="text-center">News Type</th>
                                            <th class="text-center">Fillable</th>
                                            <th class="text-center">Action</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($parentCategory->children as $childCategoryKey => $childCategory)                                                    
                                            <tr>
                                              <td>{{$childCategoryKey + 1}}.</td>
                                              <td>{{ucwords($childCategory->name)}}</td>
                                              <td class="text-center">{{$childCategory->color}}</td>
                                              <td class="text-center">
                                                @if($childCategory->is_visible == 1)
                                                    visible
                                                @else
                                                    not visible
                                                @endif
                                              </td>
                                              <td class="text-center">
                                                @if($childCategory->news_type_id == 1)
                                                  regular
                                                @else
                                                  non regular
                                                @endif
                                              </td>
                                              <td class="text-center">
                                                @if($childCategory->is_fillable == 1)
                                                  fillable
                                                @else
                                                  not fillable
                                                @endif
                                              </td>
                                              <td class="text-center">
                                                <a href="{{route('category-edit', $childCategory->id)}}" class="btn btn-warning">edit</a>
                                                
                                                <form class="display-inline" method="POST" action="{{route('category-destroy', $childCategory->id)}}">
                                                  
                                                  {{csrf_field()}}                                    
                                                
                                                  <button type="submit" class="btn btn-danger deleteButton" data-categoryName="Sub Category {{ucwords($childCategory->name)}}">delete</button>
                                                
                                                </form>
                                              </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>   
                            </td>                                   
                          </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
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
    <script>
      $(".deleteButton").click(function(e){
        var answer = confirm('You are going to delete ' + $(this).attr('data-categoryName') + ', are You sure?')
        if(!answer)
          e.preventDefault();
      })
    </script>    
@endpush
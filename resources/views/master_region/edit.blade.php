@extends('adminlte::layouts.app')


@section('css-content')
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
{{--
                    <div class="panel-heading">Category</div>
--}}

                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Master Region Type</h3>
                    </div>
{{--
                    <form role="form" method="POST" action="{{route('category-update', ['id'=>$categoryRow->id, 'x'=>'a'])}}">
--}}
                    <form role="form" method="POST" action="{{route('master_region-update', $masterRegionRow->radar_id)}}">
                      <div class="box-body">
                        {{csrf_field()}}
                        <div class="form-group">
                          <label for="name">Master Region Name</label>
                          <input type="text" class="form-control" id="name" name="name" placeholder="Master Region Name" value="{{$masterRegionRow->name}}">
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
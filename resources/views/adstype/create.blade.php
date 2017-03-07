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
{{--
                    <div class="panel-heading">Ads Type</div>                   
                    
--}}
                    <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">Create Ads Type</h3>                         
                        </div>

                        <form role="form" method="POST" action="{{route('adstype-store')}}">
                            <div class="box-body">
                                {{csrf_field()}}
                                <div class="form">
                                  <label for="name">Ads Type Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Ads Type Name">
                                </div>

                      <!--           <div class="form-group">
                                    <label for="color">Color</label>
 -->
                         <!--            <div class="input-group my-colorpicker2 colorpicker-element">
                                      <input type="text" class="form-control" id="color" name="color" placeholder="Color Hexa Code">
 -->
                              <!--         <div class="input-group-addon">
                                        <i style="background-color: rgb(255, 5, 5);"></i>
                                      </div> -->
                                 <!--    </div>
                                </div> -->
                          </div>
                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@push('script-content')

@endpush
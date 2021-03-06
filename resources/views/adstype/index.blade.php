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

                  <div class="row">
                    <div class="col-xs-12">
                      <div class="box">
                        <div class="box-header">
                          <h3 class="box-title">Ads Type List</h3>
                        </div>

                        <div class="box-body table-responsive no-padding">
                        
                          <table class="table table-hover">
                            <tbody>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th style="text-align:center">Action</th>
                              </tr>
                              @foreach($adstypes as $adstype)
                                <tr>
                                  <td>{{$adstype->id}}</td>
                                  <td>{{$adstype->name}}</td>
                                  <td style="text-align:center">
                                    
                                    <a href="{{route('adstype-edit', $adstype->id)}}" class="btn btn-warning">edit</a>
                                                                        
                                    <form class="display-inline" method="POST" action="{{route('adstype-destroy', $adstype->id)}}">
                                      {{csrf_field()}}
                                      <button type="submit" class="btn btn-danger deleteButton" data-adsName="Ads {{ucwords($adstype->name)}}">delete</button>
                                      
                                    </form>

                                  </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                        
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                    </div>
                  </div>


                  </div>
                </div>








            </div>
        </div>
    </div>
@endsection

@push('script-content')
    <script>
      $(".deleteButton").click(function(e){
        var answer = confirm('You are going to delete ' + $(this).attr('data-adsName') + ', are You sure?')
        if(!answer)
          e.preventDefault();
      })
    </script>   
@endpush
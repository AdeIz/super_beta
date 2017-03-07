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
                          <h3 class="box-title">User List</h3>

                            <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                              <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                          <table class="table table-hover">
                            <tbody>
                              <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th style="text-align:center">Action</th>
                              </tr>
                              @foreach($users as $key=>$user)
                                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{$user->id}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                  <td>***hidden***</td>
                  <td style="text-align:center">
                    
                    <a href="{{route('user-edit', $user->id)}}" class="btn btn-warning">edit</a>
                    
                    <form class="display-inline" method="POST" action="{{route('user-destroy', $user->id)}}">
                      {{csrf_field()}}
                      <button type="submit" class="btn btn-danger deleteButton" data-userName="Username {{ucwords($user->username)}}">delete</button>
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
        var answer = confirm('You are going to delete ' + $(this).attr('data-userName') + ', are You sure?')
        if(!answer)
          e.preventDefault();
      })
    </script>    
@endpush
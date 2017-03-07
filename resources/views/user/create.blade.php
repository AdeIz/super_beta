@extends('adminlte::layouts.app')


@section('css-content')
    <link href="{{asset('plugins/datepicker/datepicker3.css')}}" rel="stylesheet" type="text/css" />
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
                          <h3 class="box-title">Create User</h3>                         
                        </div>

                        <form role="form" method="POST" action="{{route('user-store')}}">
                            <div class="box-body">
                                {{csrf_field()}}
                                <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                                </div>

                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>

                                <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>                                                                

                                <div class="form-group">
                                  <label for="password2">Retype Password</label>
                                  <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype Password">
                                </div>

                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                </div>

                                <div class="form-group">
                                  <label for="gender">Gender</label>
                                  <select class="form-control" id="gender" name="gender">
                                    <option value="male">Male</option>
                                    <option value="male">Female</option>
                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="birthdate">Birth Date</label>
                                  <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Birthdate">
                                </div>                                                                


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
  <script type="text/javascript" src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript">
      $('#birthdate').datepicker({
    format: 'mm/dd/yyyy'
});
  </script>
@endpush
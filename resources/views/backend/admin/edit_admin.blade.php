@extends('backend.layouts.index')
 @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">admin
                            <small>{{$admin->admin_name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="backend/admin/editadmin/{{$admin->admin_id}}" method="POST">
                          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group">
                                <label>Admin name</label>
                                <input class="form-control" name="name" value="{{$admin->admin_name}}" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pass" placeholder="Please Enter Password" value="{{$admin->admin_pass}}"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Active</label>
                                <input type="text" class="form-control" name="active"  value="{{$admin->admin_active}}"/>
                            </div>
                            
                            <button type="submit" class="btn btn-default">admin Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        @endsection
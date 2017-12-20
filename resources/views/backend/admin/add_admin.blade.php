@extends('backend.layouts.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Admin
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors)>0)
                            <div class="alert alert-danger">
                                 @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                         @endif
                        
                         @if(session('thongbao'))
                            <div class="alert alert-succcess">
                                 
                                    {{session('thongbao')}}<br>
                                
                            </div>
                         @endif
                        <form action="backend/admin/addadmin" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            
                            <div class="form-group">
                                <label>Admin Name</label>
                                <input class="form-control" name="Name" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Admin pass</label>
                                <input class="form-control" name="pass" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Admin active</label>
                                <input class="form-control" name="active" placeholder="Please Enter Category Keywords" />
                            </div>
                           
                            <button type="submit" class="btn btn-default"> Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection
@extends('backend.layouts.index')
 @section('content')
 <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    @if(session('thongbao'))
                            <div class="alert alert-succcess">
                                 
                                    {{session('thongbao')}}<br>
                                
                            </div>
                         @endif
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Pass</th>
                                <th>active</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($admin as $adm)
                            <tr class="odd gradeX" align="center">
                                <td>{{$adm->admin_id}}</td>
                                <td>{{$adm->admin_name}}</td>
                                <td>{{$adm->admin_pass}}</td>
                                <td>{{$adm->admin_active}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="backend/admin/deleteadmin/{{$adm->admin_id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="backend/admin/editadmin/{{$adm->admin_id}}">Edit</a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div
 @endsection
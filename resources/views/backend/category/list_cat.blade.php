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
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cat as $cate)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cate->cat_id}}</td>
                                <td>{{$cate->car_name}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="backend/category/delete"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="backend/category/edit_cat/{{$cate->cat_id}}">Edit</a></td>
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
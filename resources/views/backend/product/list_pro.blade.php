@extends('backend.layouts.index')
 @section('content')
  <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>category name</th>
                                <th>Pro Name</th>
                                <th>Price</th>
                                <th>Num</th>
                                <th>Discount</th>
                                <th>discription</th>
                                <th>size</th>
                                <th>tra name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pro as $pr)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$pr->pro_id}}</td>
                                    <td>{{$pr->category->car_name}}</td>
                                    <td>{{$pr->pro_name}}</td>
                                    <td>{{$pr->pro_price}}</td>
                                    <td>{{$pr->pro_num}}</td>
                                    <td>{{$pr->pro_discount}}</td>
                                    <td>{{$pr->pro_discription}}</td>
                                    <td>{{$pr->pro_size}}</td>
                                    <td>{{$pr->tra->tra_name}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="backend/product/deletepro/{{$pr->pro_id"> Delete</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="backend/product/editpro/{{$pr->pro_id">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection
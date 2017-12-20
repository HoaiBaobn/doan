@extends('backend.layouts.index')
 @section('content')
   <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Product
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" enctype="multipart/form-data" method="POST">
                          <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                          <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="cat">
                                    @foreach($cat as $ct)
                                        <option value="{{$ct->cat_id}}">{{$ct->car_name}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>Trademark</label>
                                <select class="form-control" name="tra">
                                    @foreach($tra as $tr)
                                        <option value="{{$tr->tra_id}}">{{$tr->tra_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="txtName" placeholder="Please Enter Name" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="txtPrice" placeholder="Please Enter Price" />
                            </div>
                            <div class="form-group">
                                <label>Num</label>
                                <input class="form-control" name="txtnum" placeholder="Please Enter num" />
                            </div>
                            <div class="form-group">
                                <label>discount</label>
                               <input class="form-control" name="txtdis" placeholder="Please Enter discount" />
                            </div>
                              <div class="form-group">
                                <label>size</label>
                               <input class="form-control" name="txtsize" placeholder="Please Enter size" />
                               
                            </div>
                           
                            <div class="form-group">
                                <label>description</label>
                                <input class="form-control" name="txtdes" placeholder="Please Enter description" />
                            </div>
                           <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="hinh" multiple>
                            </div>
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection
@extends('app')
@section('content')
<style type="text/css">
 #dataTables-example_paginate{
      float: right;
 }
</style>
<div id="wrapper">
<!-- Navigation -->
@include('components/menu')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Employee List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Employee
                    <a href="<?php echo URL::to('employees'); ?>" style="float:right;margin-bottom:5px;" id="delete-button" class="btn btn-primary">Back</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="col-lg-6">
                        <form role="form" action="<?php echo URL::to('updateemployeedetails'); ?>" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="empid" id="empid" value="<?php echo $emp_row->id; ?>">
                            <div class="form-group">
                                <label>Employee Name</label>
                                <input class="form-control" name="emp-name" placeholder="Enter Employee Name" value="<?php echo $emp_row->name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="emp-email" placeholder="Enter Email" value="<?php echo $emp_row->email; ?>">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input class="form-control" name="emp-age" placeholder="Enter Age" value="<?php echo $emp_row->age; ?>">
                            </div>
                            <div class="form-group">
                                <label>DOB</label>
                                <input class="form-control" name="emp-dob" placeholder="Enter DOB" value="<?php echo $emp_row->dob; ?>">
                            </div>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input class="form-control" name="emp-mobile" placeholder="Enter Mobile No" value="<?php echo $emp_row->mobile; ?>">
                            </div>
                            <div class="form-group">
                                <label>Text area</label>
                                <textarea class="form-control" name="emp-area" rows="3" value="<?php echo $emp_row->description; ?>" ><?php echo $emp_row->description; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>File input</label>
                                <input type="file" name="emp-image">
                            </div>
                            <img src="<?php echo URL::to('public/images'); ?>/<?php echo $emp_row->image; ?>"><br/>
                            <button type="submit" name="emp-submit" class="btn btn-default">Submit Button</button>
                            <button type="reset" class="btn btn-default">Reset Button</button>
                        </form>
                    </div>
         
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
     </div>
  
   </div>
   <!-- /.row -->
</div>
  <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->

<script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
<script></script>
@endsection

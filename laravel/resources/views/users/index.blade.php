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
            <h1 class="page-header">Users List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Users
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                            	<th>Sl No:</th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($users as $key) {  ?>
                            <tr class="odd gradeX">
                            	<td><?php echo $key->id; ?></td>
                                <td><?php echo $key->name; ?></td>
                                <td><?php echo $key->email; ?></td>
                                <td><?php echo $key->created_at; ?></td>
                                <td>
                                	<a type="button" id="edit-button" class="btn btn-primary" nname="<?php echo $key->name; ?>" nid="<?php echo $key->id; ?>" nemail="<?php echo $key->email; ?>" data-toggle="modal" data-target="#myModal">Edit</a>
                                	<a id="delete-button" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
         
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form role="form">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<input type="hidden" name="userid" id="userid">
            <div class="form-group">
                <label>User Name</label>
                <input class="form-control" placeholder="Enter User Name" id="uname">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input class="form-control" placeholder="Enter text" id="uemail">
            </div>
         </form>      
      </div>
      <div class="modal-footer">
      	<button type="button" id="save-button" class="btn btn-primary">Save</button>
        <button type="button" id="close-button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<script src="{{ asset('public/vendor/jquery/jquery.min.js') }}"></script>
<script>
	$(document).on('click',"#edit-button",function(){
		var n=$(this).attr('nname');
		var e=$(this).attr('nemail');
		var i=$(this).attr('nid');
		$("#uname").val(n);
		$("#uemail").val(e);
		$("#userid").val(i);
	});
	$(document).on("click","#save-button", function(){
		var uname=$("#uname").val();
		var uemail=$("#uemail").val();
		var userid=$("#userid").val();
       $.ajax({
       	    headers:{ 'X-CSRF-Token': $('input[name="_token"]').val() },
	       	url: "<?php echo URL::to('updateuser'); ?>",
	       	type:"POST",
	       	data:{'uid':userid,'username':uname,'useremail':uemail},
	        success: function(result){
             window.location.reload();
	        }
        });
	});
</script>
@endsection

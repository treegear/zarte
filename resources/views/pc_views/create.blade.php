@extends('layouts.master')
@section('content')
 
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / Product Category</li>
            </ol>
        </nav>
    </div>
	<div class="inner-contents">
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> Add Product Category </h3>
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route('productCategory.store')}}" id="myform_1" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}  
					<div class="row">
						<div class="form-group col-sm-4">
							<label class="form-label">Name</label>
							<input type="text" name="pc_name" value="" class="form-control" placeholder="Enter Name">
						</div>   
						
						<div class="form-group col-sm-4">
							<label class="form-label">Slug</label>
							<input type="text" name="pc_slug" value="" class="form-control" placeholder="Enter Name">
						</div>   

					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary submit_btn">Save</button>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>


<script>
	$(function () {
	  
	  $('#myform_1').validate({
	    rules: {
	        pc_name: {
				required: true
			},  
	    },
	    messages: {
	      pc_name: "Please enter the name",  
	
	    },
		
		submitHandler: function (form) { // for demo  
	        console.log('55555');
			$('.submit_btn').submit();
		},
	    errorElement: 'span',
	    errorPlacement: function (error, element) {
	      error.addClass('invalid-feedback');
	      element.closest('.form-group').append(error);
	    },
	    highlight: function (element, errorClass, validClass) {
	      $(element).addClass('is-invalid');
	    },
	    unhighlight: function (element, errorClass, validClass) {
	      $(element).removeClass('is-invalid');
	    }
	  });
	
	 
	});
</script>

 
 
@endsection
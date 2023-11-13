@extends('layouts.master')
@section('content')
 
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / Testimonials</li>
            </ol>
        </nav>
    </div>
	<div class="inner-contents">
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> Edit Testimonials</h3>
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route('testimonial.update')}}" id="myform_1" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}

					
					<input type="hidden" name="te_id" value="{{$te_data['te_id']}}">  
					<div class="row">
						<div class="form-group col-sm-4"  style="display:none;">
							<label class="form-label">Title</label>
							<input type="text" name="te_title" value="{{$te_data['te_title']}}" class="form-control" placeholder="Enter Name">
						</div>  
						<div class="form-group col-sm-4">
							<label class="form-label">Name</label>
							<input type="text" name="te_name" value="{{$te_data['te_name']}}" class="form-control" placeholder="Enter Name">
						</div>
						<div class="form-group col-lg-4"> 
							<label class="form-label">Desigination</label>
							<input type="text" name="te_desigination" value="{{$te_data['te_desigination']}}" class="form-control" placeholder="Enter Desigination">
						</div>   
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="te_img_1" id="avatar" >									  
							<label class="col-md-12 "> {{$te_data['te_img']}}
							</label>	 
						</div> 


						<div class="form-group col-lg-12"> 
							<label class="form-label">Description</label>
							<textarea class="form-control" name="te_desc" placeholder=" Description">{{$te_data['te_desc']}} </textarea> 
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
	        te_title: {
				required: true
			}, 
			te_desc: {
				required: true
			}, 
			te_name: {
				required: true
			}, 
			te_desigination: {
				required: true
			}, 
	    },
	    messages: {
	      te_title: "Please enter your title", 
	      te_desc: "Please enter the  description", 
	      te_name: "Please enter the  Name", 
	      te_desigination: "Please enter the Desigination", 
	
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
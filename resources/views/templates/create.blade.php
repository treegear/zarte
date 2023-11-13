@extends('layouts.master')
@section('content')
 
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / {{$headline}}</li>
            </ol>
        </nav>
    </div>
	<div class="inner-contents">
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> Add {{$headline}} </h3>
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route($headline.'.store')}}" id="myform_1" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}} 
					<input type="hidden" name="headline" value="{{$headline}}">
					<input type="hidden" name="ss_type" value="{{$headline}}">
					<div class="row">
						<div class="form-group col-sm-4">
							<label class="form-label">Name</label>
							<input type="text" name="ss_name" value="" class="form-control" placeholder="Enter Name">
						</div>
						@if($headline=='members')
							<div class="form-group col-lg-4"> 
								<label class="form-label">Desigination</label>
								<input type="text" name="ss_desc" value="" class="form-control" placeholder="Enter Desigination">
							</div> 
						@endif

						<!-- <div class="form-group col-sm-4">
							<label class="form-label">Website Link</label>
							<input type="text" name="ss_website" value="" class="form-control" placeholder="Enter Website Link">
						</div> -->
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="ss_img_1" id="avatar" >									  
							<label class="col-md-12 " style="color:red;"> @if($headline=='services') size 44*50px @endif
							</label>	 
						</div>
						@if($headline!='members')
							<div class="form-group col-lg-12"> 
								<label class="form-label">Description</label>
								<textarea class="form-control" name="ss_desc" placeholder="	 Description"> </textarea> 
							</div> 
						@endif

						@if($headline=='members')
							<div class="form-group col-lg-4"> 
								<label class="form-label">Facebook</label>
								<input type="text" name="ss_facebook" value="" class="form-control" placeholder="Enter facebook">
							</div> 
							<div class="form-group col-lg-4"> 
								<label class="form-label">Twitter</label>
								<input type="text" name="ss_twitter" value="" class="form-control" placeholder="Enter twitter">
							</div> 
							<div class="form-group col-lg-4"> 
								<label class="form-label">Linkedin</label>
								<input type="text" name="ss_linkedin" value="" class="form-control" placeholder="Enter linkedin">
							</div> 
						@endif



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
				ss_name: {
				required: true
			}, 
			ss_desc: {
				required: true
			},  
			ss_img_1: {
				required: true
			},
			},
			messages: {
			ss_name: "Please enter your name", 
			ss_desc: "Please enter the description", 
			ss_img_1: "Please select the image", 
		
			},
			
			submitHandler: function (form) { 
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
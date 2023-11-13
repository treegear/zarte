@extends('layouts.master')
@section('content')

<script src="https://cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script>

<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li>
                <li class="breadcrumb-item"><a>/ Metta & Page Details</a></li>
                <li class="breadcrumb-item active">{{$m_data['m_name']}}</li>
            </ol>
        </nav>
    </div>
	<div class="inner-contents">
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> {{$m_data['m_name']}} Metta Data</h3>
					<a class=" col-lg-6" data-bs-toggle="collapse" data-bs-target="#metta_div_id" aria-expanded="false" aria-controls="metta_div_id"> <span class="btn nav-icon flex-shrink-0"  style="float:right;padding:0px;"><i class="bi bi-plus fs-18"></i></span></a> 
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route('metta.update')}}" id="myform_1" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}
					<input type="hidden" name="m_id" value="{{$m_data['m_id']}}">
					<input type="hidden" name="m_slug" value="{{$m_data['m_slug']}}">
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-label">Metta Title</label>
							<input type="text" name="metta_title" value="{{$m_data['metta_title']}}" class="form-control" placeholder="Enter Title">
						</div>
						<div class=" form-group col-md-6 "> 
							<label class="form-label">Banner Image</label>
							<input type="file" class="fileupload form-control " name="m_banner_img" id="avatar"  value="{{$m_data['m_banner_img']}} " >									  
							<label class="col-md-12 "> {{$m_data['m_banner_img']}}
							</label>	 
						</div>
						<div class="form-group col-lg-6"> 
							<label class="form-label">Metta Description</label>
							<textarea class="form-control" name="metta_desc" placeholder="Metta Description">{{$m_data['metta_desc']}}</textarea> 
						</div>
						<div class="form-group col-lg-6"> 
							<label class="form-label">Metta Keyword</label>
							<textarea class="form-control" name="metta_keywords" placeholder="Metta Keyword">{{$m_data['metta_keywords']}}</textarea> 
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary submit_btn">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> {{$m_data['m_name']}} Page Details</h3>
					<a class=" col-lg-6" data-bs-toggle="collapse" data-bs-target="#page_div_id" aria-expanded="false" aria-controls="page_div_id"> <span class="btn nav-icon flex-shrink-0"  style="float:right;padding:0px;"><i class="bi bi-plus fs-18"></i></span></a> 
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="page_div_id">
				<form action="{{route('page.update')}}" id="myform_2" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}
					<input type="hidden" name="md_id" value="{{$m_details['md_id']}}"> 
					<input type="hidden" name="md_m_id" value="{{$m_details['md_m_id']}}"> 
					<div class="row">
						<div class="form-group col-sm-6">
							<label class="form-label">Title</label>
							<input type="text" name="md_title" value="{{$m_details['md_title']}}" class="form-control" placeholder="Enter Title">
						</div>
						<div class="form-group col-sm-6">
							<label class="form-label">Sub Title</label>
							<input type="text" name="md_sub_title" value="{{$m_details['md_sub_title']}}" class="form-control" placeholder="Enter Sub Title">
						</div>
						<div class=" form-group col-md-4 "  style="display:none;"> 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="md_img_1" id="avatar"  value="{{$m_details['md_img_1']}} " >									  
							<label class="col-md-12 "> {{$m_details['md_img_1']}}
							</label>	 
						</div>
						<div class="form-group col-lg-12"  style="display:none;"> 
							<label class="form-label">Description</label>
							<textarea class="form-control" name="md_desc" placeholder=" Description">{{$m_details['md_desc']}}</textarea> 
						</div>
						<div class="form-group col-sm-4"  style="display:none;">
							<label class="form-label">Name</label>
							<input type="text" name="md_content1" value="{{$m_details['md_content1']}}" class="form-control" placeholder="Enter Name">
						</div>
						<div class="form-group col-sm-4"  style="display:none;">
							<label class="form-label">Desigination</label>
							<input type="text" name="md_content2" value="{{$m_details['md_content2']}}" class="form-control" placeholder="Enter Desigination">
						</div>
						<div class=" form-group col-md-4 "  style="display:none;"> 
							<label class="form-label">Signature</label>
							<input type="file" class="fileupload form-control " name="md_img_2" id="avatar"  value="{{$m_details['md_img_2']}} " >									  
							<label class="col-md-12 "> {{$m_details['md_img_2']}}
							</label>	 
						</div> 
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary submit_btn_2">Save</button>
					</div>
				</form>
			</div>
		</div>
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> {{$m_data['m_name']}}  Details</h3>
					<a class=" col-lg-6" data-bs-toggle="collapse" data-bs-target="#page_div_id" aria-expanded="false" aria-controls="page_div_id"> <span class="btn nav-icon flex-shrink-0"  style="float:right;padding:0px;"><i class="bi bi-plus fs-18"></i></span></a> 
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="page_div_id">
				<form action="{{route('contacts.update')}}" id="myform_2" method="post" >
					@csrf
					{{method_field('put')}}
					<input type="hidden" name="c_id" value="{{$c_details['c_id']}}"> 
					<input type="hidden" name="m_id" value="{{$m_data['m_id']}}"> 
					<div class="row">
						<div class="form-group col-sm-4        z">
							<label class="form-label">Title</label>
							<input type="text" name="c_title" value="{{$c_details['c_title']}}" class="form-control" placeholder="Enter Title">
						</div> 
						<div class="form-group col-sm-4        z">
							<label class="form-label">Contact Info</label>
							<input type="text" name="c_phone" value="{{$c_details['c_phone']}}" class="form-control" placeholder="Enter Contact Info">
						</div> 
						<div class="form-group col-sm-4">
							<label class="form-label">Live Support</label>
							<input type="text" name="c_email" value="{{$c_details['c_email']}}" class="form-control" placeholder="Enter Live Support">
						</div> 
						<div class="form-group col-sm-6">
							<label class="form-label">Our Address</label>
							<textarea class="form-control" name="c_address" placeholder=" Enter Our Our Address">{{$c_details['c_address']}}</textarea> 

							<!-- <input type="text" name="c_address" value="{{$c_details['c_address']}}" class="form-control" placeholder="Enter Our Location"> -->
						</div> 
						<div class="form-group col-lg-6"  style="display:none;"> 
							<label class="form-label">Description</label>
							<textarea class="form-control" name="c_desc" placeholder=" Description">{{$c_details['c_desc']}}</textarea> 
						</div> 
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary submit_btn_2">Save</button>
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
	        c_title: {
	        required: true
	      }, 
	      c_desc: {
	        required: true
	      },
	      c_phone: {
	        required: true
	      }, 
	      c_address: {
	        required: true
	      }, 
	      c_email: {
	        required: true
	      }, 
	    },
	    messages: {
	      c_title: "Please enter the title", 
	      c_desc: "Please enter the description",
	      c_phone: "Please enter the phone number", 
	      c_address: "Please enter the address", 
	      c_email: "Please enter the email", 
	
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
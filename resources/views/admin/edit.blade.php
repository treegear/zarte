@extends('layouts.master')
@section('content')
 
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active">Settings</li>
            </ol>
        </nav>
    </div>
	<div class="inner-contents">
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> Edit Settings</h3>
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route('settings.update')}}" id="myform_1" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}

					
					<input type="hidden" name="s_id" value="{{$s_data['s_id']}}">

					<div class="row">
						<div class="form-group col-sm-4">
							<label class="form-label">Admin Name</label>
							<input type="text" name="s_admin_name" class="form-control" placeholder="Enter Admin Name"  value="{{$s_data['s_admin_name']}}">
						</div>   
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Admin Logo</label>
							<input type="file" class="fileupload form-control " name="s_admin_logo" id="avatar" >									  
							<input type="hidden" class=" form-control " name="s_admin_logo_val" id="avatar" value="{{$s_data['s_admin_logo']}}">									  
							<label class="col-md-12 "> {{$s_data['s_admin_logo']}} </label>	 
						</div> 
						
						<div class="form-group col-sm-4">
							<label class="form-label">Site Name</label>
							<input type="text" name="s_site_name" class="form-control" placeholder="Enter Site Name"  value="{{$s_data['s_site_name']}}">
						</div>   
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Site Logo</label>
							<input type="file" class="fileupload form-control " name="s_site_logo" id="avatar" >								
							<input type="hidden" class=" form-control " name="s_site_logo_val" id="avatar" value="{{$s_data['s_site_logo']}}">									  
							<label class="col-md-12 "> {{$s_data['s_site_logo']}} </label>	 
						</div> 
						<div class="form-group col-sm-4">
							<label class="form-label">Site Address</label>
							<input type="text" name="s_site_address" class="form-control" placeholder="Enter Address"  value="{{$s_data['s_site_address']}}">
						</div>
						<div class="form-group col-sm-4">
							<label class="form-label">Site Contact</label>
							<input type="text" name="s_site_contact" class="form-control" placeholder="Enter Contact"  value="{{$s_data['s_site_contact']}}">
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
	        s_admin_name: {
	        required: true
	      }, 
	    //   s_admin_logo: {
	    //     required: true
	    //   },
	      s_site_name: {
	        required: true
	      }, 
	    //   s_site_logo: {
	    //     required: true
	    //   }, 
	      s_site_address: {
	        required: true
	      }, 
	      s_site_contact: {
	        required: true
	      }, 
	    },
	    messages: {
	      s_admin_name: "Please enter admin name", 
	    //   s_admin_logo: "Please select the admin logo",
	      s_site_name: "Please enter thesite name", 
	    //   s_site_logo: "Please select the site logo", 
	      s_site_address: "Please enter the site address", 
	      s_site_contact: "Please enter the contact number", 
	
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

<script>
   CKEDITOR.replace( 'md_desc_2' );
</script>
@endsection
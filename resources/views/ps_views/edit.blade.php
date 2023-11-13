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
					<h3 class="mb-0 col-lg-6"> Edit {{$headline}}</h3>
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route($headline.'.update')}}" id="myform_12" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}

					
					<input type="hidden" name="ps_id" value="{{$ps_data['ps_id']}}"> 
					<input type="hidden" name="headline" value="{{$headline}}">

					<div class="row">
						<div class="form-group col-sm-4">
							<label class="form-label">Name</label>
							<input type="text" name="ps_name" class="form-control" placeholder="Enter Name"  value="{{$ps_data['ps_name']}}">
						</div>  
						@if($headline=='slider')
							<div class="form-group col-sm-4">
								<label class="form-label">Sub Text</label>
								<input type="text" name="ps_sub_text" class="form-control" placeholder="Enter Sub Text"  value="{{$ps_data['ps_sub_text']}}">
							</div> 
						@endif
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="ps_img_1" id="avatar" >									  
							<label class="col-md-12 "> {{$ps_data['ps_img_1']}} </label>	 
						</div> 



					</div> 
					<div class="form-group">
						<button type="submit" class="btn btn-primary submit_btn2">Save</button>
					</div>
				</form>
			</div>
		</div>
		
	</div>
</div>

<script>
	$(function () {
	  
// 	  $('#myform_1').validate({
// 	    rules: {
// 	        ps_img_1: {
// 	        required: true
// 	      },  
// 	    },
// 	    messages: {
// 	      ps_img_1: "Please select your image",  
	
// 	    },
		
// 		submitHandler: function (form) { // for demo  
// 	        console.log('55555');
// 			$('.submit_btn').submit();
// 		},
// 	    errorElement: 'span',
// 	    errorPlacement: function (error, element) {
// 	      error.addClass('invalid-feedback');
// 	      element.closest('.form-group').append(error);
// 	    },
// 	    highlight: function (element, errorClass, validClass) {
// 	      $(element).addClass('is-invalid');
// 	    },
// 	    unhighlight: function (element, errorClass, validClass) {
// 	      $(element).removeClass('is-invalid');
// 	    }
// 	  });
	
	    
	});
</script>

<script>
   CKEDITOR.replace( 'md_desc_2' );
</script>
@endsection
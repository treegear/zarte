@extends('layouts.master')
@section('content')
 

<!-- <script src="{{asset('plugins/ckeditor/ckeditor.js')}}"></script> -->

<script src="https://cdn.ckeditor.com/4.19.0/standard-all/ckeditor.js"></script>


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
						<div class="form-group col-sm-4" style="display:none;">
							<label class="form-label">Title</label>
							<input type="text" name="md_title" value="{{$m_details['md_title']}}" class="form-control" placeholder="Enter Title">
						</div>
						<div class="form-group col-sm-4" style="display:none;">
							<label class="form-label">Sub Title</label>
							<input type="text" name="md_sub_title" value="{{$m_details['md_sub_title']}}" class="form-control" placeholder="Enter Sub Title">
						</div>
						<div class=" form-group col-md-4 " style="display:none;" > 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="md_img_1" id="avatar"  value="{{$m_details['md_img_1']}} " >									  
							<label class="col-md-12 "> {{$m_details['md_img_1']}}
							</label>	 
						</div>
						<div class="form-group col-lg-12"> 
							<label class="form-label"><!-- Description --> Our Mission </label>
							<textarea class="form-control" name="md_desc" placeholder=" Description">{{$m_details['md_desc']}}</textarea> 
						</div>
						<div class="form-group col-sm-4" style="display:none;">
							<label class="form-label">Name</label>
							<input type="text" name="md_content1" value="{{$m_details['md_content1']}}" class="form-control" placeholder="Enter Name">
						</div>
						<div class="form-group col-sm-4" style="display:none;">
							<label class="form-label">Desigination</label>
							<input type="text" name="md_content2" value="{{$m_details['md_content2']}}" class="form-control" placeholder="Enter Sub Title">
						</div>
						<div class=" form-group col-md-4 " style="display:none;"> 
							<label class="form-label">Signature</label>
							<input type="file" class="fileupload form-control " name="md_img_2" id="avatar"  value="{{$m_details['md_img_2']}} " >									  
							<label class="col-md-12 "> {{$m_details['md_img_2']}}
							</label>	 
						</div>
                  		<div class="form-group col-lg-12"> 
							<label class="form-label"><!--- Middle Content --> Our company vision</label>
							<textarea class="form-control" id="editor_id5" name="md_desc_2" placeholder=" Description">{{$m_details['md_desc_2']}}</textarea> 
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
	        metta_title: {
	        required: true
	      }, 
	      metta_desc: {
	        required: true
	      },
	      metta_keywords: {
	        required: true
	      }, 
	    },
	    messages: {
	      metta_title: "Please enter your title", 
	      metta_desc: "Please enter the metta description",
	      metta_keywords: "Please enter the metta keyword", 
	
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
	
	    $('#myform_2').validate({
	    rules: {
	        md_title: {
	        required: true
	      }, 
	      md_sub_title: {
	        required: true
	      },
	      md_desc: {
	        required: true
	      }, 
	    },
	    messages: {
	      md_title: "Please enter your title", 
	      md_sub_title: "Please enter the sub title",
	      md_desc: "Please enter the description", 
	
	    },
		
		submitHandler: function (form) { // for demo  
	        console.log('55555');
			$('.submit_btn_2').submit();
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
    CKEDITOR.replace( 'editor_id', { 
				height: 250,
				extraPlugins: 'colorbutton,colordialog,image2,uploadimage',
				removeButtons: 'PasteFromWord',
			});
</script>
@endsection
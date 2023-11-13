@extends('layouts.master')
@section('content')
 
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / Products</li>
            </ol>
        </nav>
    </div>
	<div class="inner-contents">
		<div class="card border-0">
			<div class="card-header bg-transparent border-0 p-5 pb-0">
				<span class="col-lg-12 row">
					<h3 class="mb-0 col-lg-6"> Edit Products </h3>
				</span>
			</div>
			<div class="card-body pt-3 collapse multi-collapse show" id="metta_div_id">
				<form action="{{route('products.update')}}" id="myform_1" method="post" enctype="multipart/form-data">
					@csrf
					{{method_field('put')}}  
					<div class="row">						

						<input type="hidden" name="pro_id" value="{{$pro_data['pro_id']}}">	
						<div class="form-group col-sm-4">
							<label class="form-label">Product Category</label>

							<select name="pro_pc_id" class="form-control boxbrd fill" required>
								<option value=''>Select Product Category</option>
								@foreach($pc_list as $pc_row)
									<option value="{{ $pc_row['pc_id'] }}" {{ $pc_row['pc_id']== $pro_data->pro_pc_id?'selected':''}}>{{ $pc_row['pc_name'] }}</option>
								@endforeach 
							</select>
						</div>

						<div class="form-group col-sm-4">
							<label class="form-label">Slug</label>
							<input type="text" name="pro_slug" value="{{$pro_data->pro_slug}}" class="form-control menu_slug" placeholder="Enter Slug" readonly>
						</div>
						<div class="form-group col-sm-4">
							<label class="form-label">Metta Tittle</label>
							<input type="text" name="pro_metta_title" value="{{$pro_data->pro_metta_title}}" class="form-control  menu_title" placeholder="Enter Metta Tittle">
						</div> 
						<div class="form-group col-lg-12"> 
							<label class="form-label">Metta Description</label>
							<textarea class="form-control" name="pro_metta_desc" placeholder="Metta Description"> {{$pro_data->pro_metta_desc}} </textarea> 
						</div>
						<div class="form-group col-lg-12"> 
							<label class="form-label">Metta Keywords</label>
							<textarea class="form-control" name="pro_metta_keywords" placeholder="Metta Keywords"> {{$pro_data->pro_metta_keywords}} </textarea> 
						</div>
						<div class="form-group col-sm-4">
							<label class="form-label">Name</label>
							<input type="text" name="pro_title" value="{{$pro_data->pro_title}}" class="form-control" placeholder="Enter Name">
						</div> 
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="pro_img_1" id="avatar" >									  
							<label class="col-md-12 ">  {{$pro_data->pro_img}} </label>	 
						</div> 					

						<div class="form-group col-sm-2">
							<label class="form-label">Price</label>
							<input type="text" name="pro_price" value="{{$pro_data->pro_price}}" class="form-control" placeholder="Enter Price">
						</div>						

						<div class="form-group col-sm-2">
							<label class="form-label">Discount Price</label>
							<input type="text" name="pro_s_price" value="{{$pro_data->pro_s_price}}" class="form-control" placeholder="Enter Discount Price">
						</div>
						<div class="form-group col-lg-12"> 
							<label class="form-label">Description</label>
							<textarea class="form-control" name="pro_desc" placeholder="Description"> {{$pro_data->pro_desc}} </textarea> 
						</div>   
						
						<div class="form-group col-lg-12"> 
							<label class="form-label">Features</label>
							<textarea class="form-control" id="editor_id" name="pro_features" placeholder=" Features"> {{$pro_data->pro_features}} </textarea> 
						</div>
						<div class="row " id="mu_img_div_id"> 
							<div class="form-group col-lg-12" id="mu_img_div_id"> 
								<a class="btn btn-info" id="mu_img_id" style="float:right;"><i class="bi bi-plus fs-18"></i> Add Images</a>							
							</div>
							@foreach($psi_list as $psi_key=>$psi_row)
								<div class="form-group col-md-4 " data-div_id="'+div_c+'" id="img_div_id_{{$psi_key}}">
									<label class="form-label">Image</label> 
									<span class="close_d_cls" data-div_c_id="{{$psi_key}}"> 
										<i class="bi bi-trash fs-18"></i>
									</span> 
									<input type="file" class="fileupload form-control " name="mu_img_1[]" id="avatar" multiple > 
									<input type="hidden" name="psi_id[]" value="{{$psi_row->psi_id}}" multiple > 
									<label class="col-md-12 "> {{$psi_row->psi_img}} </label> 
								</div>
							@endforeach
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
				pro_slug: {
					required: true
				}, 
				pro_metta_title: {
					required: true
				},  
				pro_metta_desc: {
					required: true
				}, 
				pro_metta_keywords: {
					required: true
				}, 
				pro_title: {
					required: true
				},  
				pro_price: {
					required: true
				}, 
				pro_s_price: {
					required: true
				},
			},
			messages: {
				pro_slug: "Please enter slug", 
				pro_metta_title: "Please enter the metta tittle", 
				pro_metta_desc: "Please enter the metta description", 
				pro_metta_keywords: "Please enter the metta keywords", 
				pro_title: "Please enter the title",  
				pro_price: "Please enter the price", 
				pro_s_price: "Please enter the discount price", 
		
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
	
		$('#mu_img_id').click(function(){
			div_c = $('#mu_img_div_id').lenght;
			$('#mu_img_div_id').append('<div class="form-group col-md-4 " data-div_id="'+div_c+'" id="img_div_id_'+div_c+'">'+ 
							'<label class="form-label">Image</label> <span class="close_d_cls" data-div_c_id="'+div_c+'"> <i class="bi bi-trash fs-18"></i></span>'+
							'<input type="file" class="fileupload form-control " name="mu_img_1[]" id="avatar" multiple > <label class="col-md-12 ">  </label> </div> ');
		});
		$("body").on("click" , ".close_d_cls" ,  function(){ 
			this_c = $(this).data('div_c_id');
			$('#img_div_id_'+this_c+'').remove();
		});

	
		// $('body').on('keyup keydown', '.menu_title',function(){ 
		// 	this_slug = $(this).val(); 
		// 	$('.menu_slug').val(this_slug);
		// });

	   
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
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
					<input type="hidden" name="ps_type" value="{{$headline}}">
					<div class="row">
						<div class="form-group col-sm-4">
							<label class="form-label">Name</label>
							<input type="text" name="ps_name" value="" class="form-control" placeholder="Enter Name">
						</div>  
						@if($headline=='slider')
							<div class="form-group col-sm-4">
								<label class="form-label">Sub Text</label>
								<input type="text" name="ps_sub_text" value="" class="form-control" placeholder="Enter Sub Text">
							</div> 
						@endif
						<div class=" form-group col-md-4 "> 
							<label class="form-label">Image</label>
							<input type="file" class="fileupload form-control " name="ps_img_1" id="avatar" >									  
							<label class="col-md-12 "> 
							</label>	 
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

 
 
@endsection
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
        <!-- Table One  -->
        <div class="card border-0 p-5">
            <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                <h4 class="mb-0">Testimonials</h4>
                <div class="ms-auto d-flex align-items-center gap-3">
                     <a href="{{route('testimonial'.'.create')}}" class="btn btn-success"> Add Testimonials</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="table-1" class="display text-center">
                        <thead>
                            <tr>
                                <!-- <th>Title</th>   -->
                                <th>Description</th>  
                                <!-- <th>Image</th>  -->
                                <th>Name</th> 
                                <th>Desigination</th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($te_list as $te_row) 

                                <tr> 
                                    <!-- <td>{{$te_row->te_title}} </td>  -->
                                    <td>{{substr($te_row->te_desc, 0, 20)}} ....</td>                                    
                                    <!-- <td><img src="{{asset('uploads/images/thumb/'.$te_row->te_img.'')}}"></td> -->
                                    <td>{{$te_row->te_name}}</td>
                                    <td>{{$te_row->te_desigination}}</td>                                     
                                    <td>
                                        <a href="{{route('testimonial'.'.edit',base64_encode($te_row->te_id))}}" class="btn btn-success"> <i class="bi bi-card-text "></i> </a>

                                        <a href="{{route('testimonial'.'.delete',base64_encode($te_row->te_id))}}" class="btn btn-danger"> <i class="bi bi-trash "></i> </a>

                                    </td>
                                </tr>
                            @endforeach
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
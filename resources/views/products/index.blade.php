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
        <!-- Table One  -->
        <div class="card border-0 p-5">
            <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                <h4 class="mb-0">Products</h4>
                <div class="ms-auto d-flex align-items-center gap-3">
                     <a href="{{route('products.create')}}" class="btn btn-success"> Add Products</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="table-1" class="display text-center">
                        <thead>
                            <tr>
                                <th>Name</th> 
                                <th>Category</th> 
                                <th>Image</th> 
                                <th>Price</th> 
                                <th>Discount Price</th> 
                                <th>Description</th> 
                                <th>Slug</th>  
                                <th>Metta Tittle</th>
                                <th>Metta Description</th>
                                <th>Metta Keywords</th>
                                <!-- <th>Features</th>       -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pro_data_list as $pro_row)

                                <tr> 
                                    <td>{{$pro_row->pro_title  }}</td>
                                    <td>{{$pro_row->pc_name}}</td>
                                    <td><img src="{{asset('uploads/products/thumb/'.$pro_row->pro_img.'')}}"</td>

                                    <td>{{$pro_row->pro_price  }}</td>
                                    <td>{{$pro_row->pro_s_price  }}</td>
                                    <td>{{substr_replace($pro_row['pro_desc'], "...", 50)}} </td>
                                    <td>{{$pro_row->pro_slug}}</td>
                                    <td>{{$pro_row->pro_metta_title     }}</td>
                                    <td>{{$pro_row->pro_metta_desc  }}</td>
                                    <td>{{$pro_row->pro_metta_keywords  }}</td>
                                    
                                    <!-- <td></td>  -->
                                    <td>
                                        <a href="{{route('products.edit',base64_encode($pro_row->pro_id))}}" class="btn btn-success"> <i class="bi bi-card-text "></i> </a>
                                        <a href="{{route('products.delete',base64_encode($pro_row->pro_id))}}" class="btn btn-danger"> <i class="bi bi-trash "></i> </a>

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
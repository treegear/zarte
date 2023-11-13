@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / Product Category</li>
            </ol>
        </nav>
    </div>
    <div class="inner-contents">
        <!-- Table One  -->
        <div class="card border-0 p-5">
            <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                <h4 class="mb-0">Product Category</h4>
                <div class="ms-auto d-flex align-items-center gap-3">
                     <a href="{{route('productCategory.create')}}" class="btn btn-success"> Add Product Category</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="table-1" class="display text-center">
                        <thead>
                            <tr>
                                <th>Name</th>  
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pc_data_list as $pc_row) 

                                <tr> 
                                    <td>{{$pc_row->pc_name}} </td> 
                                    <td>
                                        <a href="{{route('productCategory.edit',base64_encode($pc_row->pc_id))}}" class="btn btn-success"> <i class="bi bi-card-text "></i> </a>

                                        <a href="{{route('productCategory.delete',base64_encode($pc_row->pc_id))}}" class="btn btn-danger"> <i class="bi bi-trash "></i> </a>

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
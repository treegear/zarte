@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / {{$ps_type_val}}</li>
            </ol>
        </nav>
    </div>
    <div class="inner-contents">
        <!-- Table One  -->
        <div class="card border-0 p-5">
            <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                <h4 class="mb-0">{{$ps_type_val}}</h4>
                <div class="ms-auto d-flex align-items-center gap-3">
                     <a href="{{route($ps_type_val.'.create',base64_encode($ps_type_val))}}" class="btn btn-success"> Add {{$ps_type_val}}</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="table-1" class="display text-center">
                        <thead>
                            <tr>
                                <th>Name</th> 
                                @if($ps_type_val=='slider') 
                                    <th> Sub Text</th>
						        @endif
                                <th>Image</th> 
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ps_data_list as $ps_row) 

                                <tr> 
                                    <td>{{$ps_row->ps_name}} </td>
                                    @if($ps_type_val=='slider') 
                                        <td>{{$ps_row->ps_sub_text}}</td>
						            @endif
                                    <td><img src="{{asset('uploads/images/thumb/'.$ps_row->ps_img_1.'')}}"></td>
                                     
                                    <td>
                                        <a href="{{route($ps_type_val.'.edit',[base64_encode($ps_row->ps_id),base64_encode($ps_type_val)])}}" class="btn btn-success"> <i class="bi bi-card-text "></i> </a>

                                        <a href="{{route($ps_type_val.'.delete',[base64_encode($ps_row->ps_id),base64_encode($ps_type_val)])}}" class="btn btn-danger"> <i class="bi bi-trash "></i> </a>

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
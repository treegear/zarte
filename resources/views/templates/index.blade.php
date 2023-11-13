@extends('layouts.master')
@section('content')
<div class="container-fluid">
	<div class="card-body col-md-12">
		<nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="float: right;">
                <li class="breadcrumb-item"><a href="{{route('dashborad')}}"><i class="bi bi-house fs-18"></i></a></li> 
                <li class="breadcrumb-item active"> / {{$ss_type_val}}</li>
            </ol>
        </nav>
    </div>
    <div class="inner-contents">
        <!-- Table One  -->
        <div class="card border-0 p-5">
            <div class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                <h4 class="mb-0">{{$ss_type_val}}</h4>
                <div class="ms-auto d-flex align-items-center gap-3">
                     <a href="{{route($ss_type_val.'.create',base64_encode($ss_type_val))}}" class="btn btn-success"> Add {{$ss_type_val}}</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table id="table-1" class="display text-center">
                        <thead>
                            <tr>
                                <th>Name</th>
                                @if($ss_type_val=='members')
                                    <th>Desigination</th> 
                                @else
                                    <th>Description</th>
                                @endif    
                                <th>Image</th>
                                <!-- @if($ss_type_val=='members')
                                    <th>icon</th>
                                @endif -->

                                @if($ss_type_val=='members')
                                    <th>Facebook</th> 
                                    <th>Twitter</th> 
                                    <th>Linkedin</th> 
                                @endif
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ss_data_list as $ss_row)

                                <tr> 
                                    <td>{{$ss_row->ss_name}}</td>
                                    <td>{{substr($ss_row->ss_desc, 0, 20)}} ....</td>
                                    <td><img src="{{asset('uploads/images/thumb/'.$ss_row->ss_img_1.'')}}"</td>
                                    @if($ss_type_val=='members')
                                    <td>{{$ss_row->ss_website}}</td>

                                        <td>{{$ss_row->ss_facebook}}</td>
                                        <td>{{$ss_row->ss_twitter}}</td>
                                        <td>{{$ss_row->ss_linkedin}}</td>
                                    @endif
                                    <td>
                                        <a href="{{route($ss_type_val.'.edit',[base64_encode($ss_row->ss_id),base64_encode($ss_type_val)])}}" class="btn btn-success"> <i class="bi bi-card-text "></i> </a>
                                        <a href="{{route($ss_type_val.'.delete',[base64_encode($ss_row->ss_id),base64_encode($ss_type_val)])}}" class="btn btn-danger"> <i class="bi bi-trash "></i> </a>

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
@extends('layouts.master')
@section('content')
<div class="page-header card">
<div class="row align-items-end">
<div class="col-lg-6">
<div class="page-header-title">
<i class="feather icon-clipboard bg-c-blue"></i>
<div class="d-inline">
<h2> Course Completed List </h2>

</div>
</div>
</div>
<div class="col-lg-6">
<div class="page-header-breadcrumb">
<ul class=" breadcrumb breadcrumb-title">
<li class="breadcrumb-item">
<a href="{{route('dashborad')}}"><i class="feather icon-home"></i></a>
</li>
<li class="breadcrumb-item"><a href="#!">Sutdent</a></li>
<li class="breadcrumb-item"><a href="#!"> Course Completed List</a></li>
<!-- <li class="" style="margin-left: 13px;" ><a href="{{route('user.create')}}" class="btn btn-info btn-sm waves-effect waves-light btnspace">Add Sutdent</a></li> -->
</ul>
</div>
</div>
</div>
</div>
<div class="pcoded-inner-content">
@if (session('create'))
  <div class="alert alert-success alert-dismissable custom-success-box" style="margin: 15px;">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
     <strong> {{ session('create') }} </strong>
  </div>
@endif
<div class="main-body">
<div class="page-wrapper">

<div class="page-body">
<div class="row">






<div class="col-md-12">
<div class="card table-card">
   
<div class="card-header flthd">
   
<div class="form-group row">

<div class="col boxspace">
<a href="{{ route('user.index')}}" title="Clear filter"><i class="fa fa-filter flt"></i></a>
</div>
<!-- <div class="col-sm-1 boxspace">

<input type="text" class="form-control hgt" placeholder="TIN No">

</div>
<div class="col-sm-1 boxspace">

<input type="text" class="form-control hgt" placeholder="VRN No">

</div> -->
<div class="col boxspace">
<select name="status" id="status" class="form-control boxbrd hgt">
<option value="">Select Payment Type</option>
<option value="1">Half Payment</option>
<option value="2">Full Payment</option>
</select>

</div>

<div class="col boxspace">
<input type="date" id="date" onkeydown="return false" class="form-control hgt" placeholder="Date">

</div>
<div class="col-sm-1 boxspace">
<button id="filter" class="btn btn-info waves-effect waves-light btnspace">Filter</button>

</div>
</div>

</div>
<div class="card-block">
<div class="table-responsive">
<table id="agent_datatable" class="table table-hover m-b-0">
<thead>
<tr>
<th class="hd">Id </th>
<th class="hd">Photo</th>
<th class="hd">First Name</th>
<th class="hd">Middle Name</th>
<th class="hd">Last Name</th>
<th class="hd">DOB</th>
<th class="hd"> Email</th>
<th class="hd"> Admission Fees</th>
<th class="hd">  Advance Payment</th>
<th class="hd">  Pending Fees</th>
<th class="hd">  Payment Type</th>
<th class="hd">  Adhar Card</th>
<th class="hd">  Pan</th>



<th class="hd">Admission Date</th>
<th class="hd">Status</th>
<th class="hd">Actions</th>
</tr>
</thead>

<tbody>

</tbody>




 </table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript">


        $(document).ready( function () {
         var tbl  = $('#agent_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('user.completed') }}",
                    type: 'GET',
                    data: function (d) {
                        d.status = $('#status').val();
                        d.user_type = $('#user_type').val();
                        d.date_created = $('#date').val();
                        
                        
                    }
                },
                columns: [
                    {
                    "data": "id",
                    render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                    }
                    },
                    {data: 'photo', name: 'photo'},
                    {data: 'fname', name: 'fname'},
                    {data: 'mname', name: 'mname'},
                    {data: 'lname', name: 'lname'},
                    {data: 'dob', name: 'dob'},
                    {data: 'email', name: 'email'},
                    {data: 'admission_fees', name: 'admission_fees'},
                    {data: 'advance_fees', name: 'advance_fees'},
                    {data: 'pending_balance', name: 'pending_balance'},
                     {data: 'payment_type', name: 'payment_type'},
                     {data: 'adhar_card', name: 'adhar_card'},
                      {data: 'pan', name: 'pan'},
                     

                    {data: 'admission_date', name: 'admission_date'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action'}
                ],
                'columnDefs': [{
                    'targets': [], /* column index */
                    'orderable':false, /* true or false */
                }],
        });
            $('#filter').on('click', function(e) {
            tbl.draw();
            e.preventDefault();
            });
        });

    </script>
 
@endsection
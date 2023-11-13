@extends('layouts.master')
@section('content')
<div class="container-fluid">
<div class="inner-contents">
<div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
	<div class="left-part">
		<h2 class="text-dark">Admin Dashboard</h2>
		<!-- <p class="text-gray mb-0">Lorem ipsum dolor sit amet </p> -->
	</div>
</div>
<div class="row">
	<div class="col-xxl-6 col-lg-12">
		<div class="row">
			<!-- <div class="col col-12">
				<div class="card border-0 shadow-sm py-3">
				    <div class="card-body py-0">
				        <div class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
				            <div class="d-flex align-items-center gap-0 flex-wrap">
				                <div id="chart-45"></div> 
				                <div> 
				                    <h4 class="mb-3">Total Balance</h4>
				                    <h2 class="fs-38 mb-0">$21,560.57</h2> 
				                </div>
				            </div>
				
				            <div>
				                <h5 class="fw-semibold mb-1">Average from last month</h5>
				                <p class="text-gray mb-0"><span class="text-success fw-bold"><i class="bi bi-graph-up-arrow"></i> +0.5%</span> invoices sent</p>
				            </div>
				        </div>
				    </div>
				</div>
				</div> -->
			<div class="col col-lg-6">
				<div class="card border-0 shadow-sm pd-top-40 pd-bottom-40">
					<div class="card-body py-0">
						<h4 class="mb-3">Products</h4>
						<h2 class="fs-38 d-flex align-items-center gap-4">
							421 
							<div class="badge bg-success fs-16"><i class="bi bi-graph-up-arrow me-2"></i> 0.5%</div>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
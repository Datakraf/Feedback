@extends('layouts.member.master')

@section('content')
<!-- Rating form -->
<!-- <div class="row">
	<div class="col-xl-8">
		<div class="card">
			<div class="card-header bg-dark text-white d-flex justify-content-between">
				<span class="font-size-sm text-uppercase font-weight-semibold">Rating</span>
				<span class="font-size-sm text-uppercase font-weight-semibold"><i class="icon-stars mr-2"></i></span>
			</div>

			<div class="card-body">
				<form action="#">
					<div class="form-group">
						<label>Rating</label>
						<input type="text" class="form-control" placeholder="Attractive & responsive user interface">
					</div>

					<div class="form-group">
						<label>Comment</label>
						<textarea rows="5" cols="5" class="form-control" placeholder="Enter your comment here"></textarea>
					</div>
				</form>
			</div>

			<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
				<span class="text-muted">Feedback is the breakfast of champions !</span>
				<button type="submit" class="btn btn-primary">Submit rating <i class="icon-paperplane ml-2"></i></button>
			</div>
		</div>
	</div>

	<div class="col-xl-4">

		<div class="card card-body text-center">
			<div class="svg-center position-relative" id="progress_icon_one"><svg width="84" height="84"><g transform="translate(42,42)"><path class="d3-progress-background" d="M0,42A42,42 0 1,1 0,-42A42,42 0 1,1 0,42M0,39.5A39.5,39.5 0 1,0 0,-39.5A39.5,39.5 0 1,0 0,39.5Z" style="fill: rgb(238, 238, 238);"></path><path class="d3-progress-foreground" filter="url(#blur)" d="M6.661338147750939e-16,-40.7308237088326A1.25,1.25 0 0,1 1.2883435582822094,-41.98023547904219A42,42 0 1,1 -37.43630272279338,19.040043026405503A1.25,1.25 0 0,1 -36.85435116097611,17.342341263608528L-36.85435116097611,17.342341263608528A1.25,1.25 0 0,1 -35.20795137024616,17.906707131976606A39.5,39.5 0 1,0 1.2116564417177922,-39.48141193862301A1.25,1.25 0 0,1 6.661338147750939e-16,-40.7308237088326Z" style="fill: rgb(239, 83, 80); stroke: rgb(239, 83, 80);"></path><path class="d3-progress-front" d="M6.661338147750939e-16,-40.7308237088326A1.25,1.25 0 0,1 1.2883435582822094,-41.98023547904219A42,42 0 1,1 -37.43630272279338,19.040043026405503A1.25,1.25 0 0,1 -36.85435116097611,17.342341263608528L-36.85435116097611,17.342341263608528A1.25,1.25 0 0,1 -35.20795137024616,17.906707131976606A39.5,39.5 0 1,0 1.2116564417177922,-39.48141193862301A1.25,1.25 0 0,1 6.661338147750939e-16,-40.7308237088326Z" style="fill: rgb(239, 83, 80); fill-opacity: 1;"></path></g></svg><i class="icon-heart6 counter-icon" style="color: rgb(239, 83, 80); top: 26px;"></i></div>
			<h2 class="pt-1 mt-2 mb-1">68%</h2>

			Satisfaction rate
			<div class="font-size-sm text-muted">54% average</div>
		</div>
	</div>
</div> -->
<!-- /rating form --->

<!-- Feddback form -->
<div class="row">
	<div class="col-xl-8">
		<div class="card">
			<form action="#">
			<div class="card-header bg-dark text-white d-flex justify-content-between">
				<span class="font-size-sm text-uppercase font-weight-semibold">Feedback</span>
				<span class="font-size-sm text-uppercase font-weight-semibold"><i class="icon-comments mr-2"></i></span>
			</div>

			<div class="card-body">
					<div class="form-group">
						<label>Subject</label>
						<input type="text" class="form-control" placeholder="Attractive & responsive user interface">
					</div>

					<div class="form-group">
						<label>Your feedback</label>
						<textarea rows="5" cols="5" class="form-control" placeholder="Enter your feedback here"></textarea>
					</div>
			</div>

			<div class="card-footer bg-transparent d-flex justify-content-between border-top-0 pt-0">
				<span class="text-muted">Feedback is the breakfast of champions !</span>
				<button type="submit" class="btn btn-primary">Submit feedback <i class="icon-paperplane ml-2"></i></button>
			</div>
		</form>
		</div>
	</div>

	<div class="col-xl-4">

		<div class="d-flex flex-column justify-content">


			<div class="card card-body bg-blue-400 has-bg-image">
				<div class="media">
					<div class="media-body">
						<h3 class="mb-3">54,390</h3>
						<span class="text-uppercase font-size-xs">total feedback from members</span>
					</div>

					<div class="ml-3 align-self-center">
						<i class="icon-bubbles4 icon-3x opacity-75"></i>
					</div>
				</div>
			</div>

			<div class="card card-body bg-danger-400 has-bg-image">
				<div class="media">
					<div class="media-body">
						<h3 class="mb-3">54,390</h3>
						<span class="text-uppercase font-size-xs">total response from admins</span>
					</div>

					<div class="ml-3 align-self-center">
						<i class="icon-reply-all icon-3x opacity-75"></i>
					</div>
				</div>
			</div>

			<div class="card card-body bg-success-400 has-bg-image">
				<div class="media">
					<div class="media-body">
						<h3 class="mb-3">97%</h3>
						<span class="text-uppercase font-size-xs">response rate</span>
					</div>

					<div class="ml-3 align-self-center">
						<i class="icon-percent icon-3x opacity-75"></i>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- /feedback form --->

<!-- Feedback table -->
<div class="row">
	<div class="col-xl-12">
		<div class="card">
			<div class="card-header header-elements-inline">
				<h5 class="card-title">Feedback List</h5>
				<div class="header-elements">
					<div class="list-icons">
						<a class="list-icons-item" data-action="collapse"></a>
						<a class="list-icons-item" data-action="reload"></a>
						<a class="list-icons-item" data-action="remove"></a>
					</div>
				</div>
			</div>

			<div class="card-body">
				The <code>DataTables</code> is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table. DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function. Searching, ordering, paging etc goodness will be immediately added to the table, as shown in this example. <strong>Datatables support all available table styling.</strong>
			</div>

			<table class="table datatable-basic table-hover">
				<thead>
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Job Title</th>
						<th>DOB</th>
						<th>Status</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Marth</td>
						<td><a href="#">Enright</a></td>
						<td>Traffic Court Referee</td>
						<td>22 Jun 1972</td>
						<td><span class="badge badge-success">Active</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Jackelyn</td>
						<td>Weible</td>
						<td><a href="#">Airline Transport Pilot</a></td>
						<td>3 Oct 1981</td>
						<td><span class="badge badge-secondary">Inactive</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Aura</td>
						<td>Hard</td>
						<td>Business Services Sales Representative</td>
						<td>19 Apr 1969</td>
						<td><span class="badge badge-danger">Suspended</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Nathalie</td>
						<td><a href="#">Pretty</a></td>
						<td>Drywall Stripper</td>
						<td>13 Dec 1977</td>
						<td><span class="badge badge-info">Pending</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Sharan</td>
						<td>Leland</td>
						<td>Aviation Tactical Readiness Officer</td>
						<td>30 Dec 1991</td>
						<td><span class="badge badge-secondary">Inactive</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Maxine</td>
						<td><a href="#">Woldt</a></td>
						<td><a href="#">Business Services Sales Representative</a></td>
						<td>17 Oct 1987</td>
						<td><span class="badge badge-info">Pending</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Sylvia</td>
						<td><a href="#">Mcgaughy</a></td>
						<td>Hemodialysis Technician</td>
						<td>11 Nov 1983</td>
						<td><span class="badge badge-danger">Suspended</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Lizzee</td>
						<td><a href="#">Goodlow</a></td>
						<td>Technical Services Librarian</td>
						<td>1 Nov 1961</td>
						<td><span class="badge badge-danger">Suspended</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Kennedy</td>
						<td>Haley</td>
						<td>Senior Marketing Designer</td>
						<td>18 Dec 1960</td>
						<td><span class="badge badge-success">Active</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Chantal</td>
						<td><a href="#">Nailor</a></td>
						<td>Technical Services Librarian</td>
						<td>10 Jan 1980</td>
						<td><span class="badge badge-secondary">Inactive</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Delma</td>
						<td>Bonds</td>
						<td>Lead Brand Manager</td>
						<td>21 Dec 1968</td>
						<td><span class="badge badge-info">Pending</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Roland</td>
						<td>Salmos</td>
						<td><a href="#">Senior Program Developer</a></td>
						<td>5 Jun 1986</td>
						<td><span class="badge badge-secondary">Inactive</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Coy</td>
						<td>Wollard</td>
						<td>Customer Service Operator</td>
						<td>12 Oct 1982</td>
						<td><span class="badge badge-success">Active</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Maxwell</td>
						<td>Maben</td>
						<td>Regional Representative</td>
						<td>25 Feb 1988</td>
						<td><span class="badge badge-danger">Suspended</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>Cicely</td>
						<td>Sigler</td>
						<td><a href="#">Senior Research Officer</a></td>
						<td>15 Mar 1960</td>
						<td><span class="badge badge-info">Pending</span></td>
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<div class="dropdown-menu dropdown-menu-right">
										<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
										<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
										<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- /feedback table -->



@endsection

@section('vendor-js')
<script src="{{ asset('assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
@endsection

@section('component-js')
<script src="{{ asset('assets/js/components/feedback.js') }}"></script>
@endsection

@section('page-js')
<script>
</script>
@endsection

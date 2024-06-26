@include('layout.header')
    <div class="container">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Employees</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="{{url('/reg/create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
							{{-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>						 --}}
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								<span class="custom-checkbox">
									<input type="checkbox" id="selectAll">
									<label for="selectAll"></label>
								</span>
							</th>
							<th>Name</th>
							<th>Email</th>
							<th>Gender</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>D.O.B</th>
							<th>Phone</th>
							<th colspan="2" style="text-align: center">Action</th>
						</tr>
					</thead>
					<tbody>
						@foreach ( $registration as $user )
							
						
						<tr>
							<td>
								<span class="custom-checkbox">
									<input type="checkbox" id="checkbox1" name="options[]" value="1">
									<label for="checkbox1"></label>
								</span>
							</td>
							<td>{{$user->uname}}</td>
							<td>{{$user->email}}</td>
							<td>{{$user->gender}}</td>
							<td>{{$user->address}}</td>
							<td>{{$user->city}}</td>
							<td>{{$user->state}}</td>
							<td>{{$user->dob}}</td>
							<td>{{$user->phone}}</td>
							<td style="text-align: right">
							<a href="{{url('trash')}}/{{$user->id}}" class="edit" data-toggle="modal">
								<button  style="border: none; background: red;border-radius: 10px;float: right; color: WHITE; " class="delete" data-toggle="modal" type="submit">Restore</button></a>
							</td>
							<td style="text-align: left">	
								<a href="{{url('fdelete')}}/{{$user->id}}" class="edit" data-toggle="modal">
									<button  style="border: none; background: red;border-radius: 10px;float: right; color: WHITE; " class="delete" data-toggle="modal" type="submit">Delete</button></a>
						{{-- <form action="{{url('fdelete')}}/{{$user->id}}" method="POST">
							@csrf
			   @method('Delete')<button style="border: none; background: red;border-radius: 10px;float: right; color: WHITE; " class="delete" data-toggle="modal" type="submit">Delete</button>
			</form> --}}
							
						</tr>
						@endforeach
					</tbody>
				</table>
				<div class="clearfix">
					<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
					<ul class="pagination">
						<li class="page-item disabled"><a href="#">Previous</a></li>
						<li class="page-item"><a href="#" class="page-link">1</a></li>
						<li class="page-item"><a href="#" class="page-link">2</a></li>
						<li class="page-item active"><a href="#" class="page-link">3</a></li>
						<li class="page-item"><a href="#" class="page-link">4</a></li>
						<li class="page-item"><a href="#" class="page-link">5</a></li>
						<li class="page-item"><a href="#" class="page-link">Next</a></li>
					</ul>
				</div>
			</div>
		</div>        
    </div>
	@include('layout.footer')
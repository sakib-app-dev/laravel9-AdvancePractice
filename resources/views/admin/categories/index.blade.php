<x-master>
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Tables</h2>
					<div class="panel-body widget-shadow">
						<h4>Basic Table:</h4>
						<table class="table table-border">
							<thead>
								<tr>
								  <th>#</th>
								  <th>Category Name</th>
								  <th>Active</th>
								  <th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($category as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->is_active }}</td> 
                                    
                                    <td>
										<a href="{{ route('admin.product.show',$data->id) }}" class="btn btn-primary">Show</a>
										<a href="{{ route('admin.product.edit_form',$data->id) }}" class="btn btn-success">Edit</a>
										
                                        <form action="{{ route('admin.category.destroy',$data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Delete</button>

                                        </form>
									</td>
                                </tr>
                            @endforeach
								
							</tbody>
						</table>
					</div>


				</div>
			</div>
		</div>
	</x-master>
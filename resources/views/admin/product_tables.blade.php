<x-master>
    <!-- main content start-->
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Tables</h2>
                <div class="panel-body widget-shadow">
                   @if(session ('message'))
                       
                   <p class="text-success">{{session('message')  }}</p>
                   @endif 
                    <div class="col-md-4">
                        <h4>Basic Table:</h4>
                        
                    </div>
                    
                    <div class="col-md-8  text-right">
                        <a href="{{ url('/pruducts-trash') }}" class="btn btn-danger">Trash</a>
                        <a href="{{ url('/pruducts-pdf') }}" class="btn btn-success">Pdf</a>
                    </div>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Is Active?</th>
                                <th>Description</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $data)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->category }}</td>
                                    <td>{{ $data->is_active }}</td> 
                                    <td>{{ $data->description }}</td>
                                    
                                    <td>
										<a href="{{ route('admin.product.show',$data->id) }}" class="btn btn-primary">Show</a>
										<a href="{{ route('admin.product.edit_form',$data->id) }}" class="btn btn-success">Edit</a>
										
                                        <form action="{{ route('admin.product.destroy',$data->id) }}" method="post">
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

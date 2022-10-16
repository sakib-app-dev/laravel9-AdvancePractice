<table class="table table-bordered">
    <thead>
        <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Is Active?</th>
            <th>Description</th>
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
  
            </tr>
        @endforeach

    </tbody>
</table>
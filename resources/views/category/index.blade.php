@extends('layouts.admin')

@section('content')
<h1>Categories</h1>

<table id="category" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->status }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
            </tr>
            
        @endforeach
        
    </tbody>
    <tfoot>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </tfoot>
</table>
<script>
    $(document).ready( function () {
        $('#category').DataTable();
    } );
</script>
@endsection
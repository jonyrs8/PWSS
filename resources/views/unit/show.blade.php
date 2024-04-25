@extends('layouts.admin')

@section('content')
<h1>Categories</h1>
<br>
<a class="btn btn-primary" href="{{route('category.create')}}"> Adicionar</a>
<p>

<table id="category" class="display" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td>{{ $category->id}}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->status }}</td>
                <td>{{ $category->created_at }}</td>
                <td>{{ $category->updated_at }}</td>
            </tr>
    </tbody>
</table>
<script>
    $(document).ready( function () {
        $('#category').DataTable();
    } );
</script>
@endsection
@extends('layouts.admin')

@section('content')
<h1>Categories</h1>
<br>
<a class="btn btn-primary" href="{{route('product.create')}}"> Adicionar</a>
<p>

<table id="product" class="display" style="width:100%">
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
                <td>{{ $product->id}}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->created_at }}</td>
                <td>{{ $product->updated_at }}</td>
            </tr>
    </tbody>
</table>
<script>
    $(document).ready( function () {
        $('#product').DataTable();
    } );
</script>
@endsection
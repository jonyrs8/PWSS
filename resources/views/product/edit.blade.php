@extends('layouts.admin')

@section('content')
<h1>Edit product</h1>

<form name="product" method="POST" action="{{route('product.update', $product->id)}}">
@csrf
@method('PUT')
<div class="mb-3 col-md-4">
    <label for="product" class="form-label">ID: {{ $product->id}}</label>
</div>
<div class="mb-3 col-md-4">
    <label for="product" class="form-label">product</label>
    <input type="text" name="name" id="product" class="form-control" aria-describedby="product" requerid>
</div>
<div class="mb-3 col-md-4">
    <select name="status"  aria-label="Status" class="form-select" required>
        <option value= "" selected>Select Status</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
</div>
<button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection

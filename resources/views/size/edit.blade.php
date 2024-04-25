@extends('layouts.admin')

@section('content')
<h1>Edit Category</h1>

<form name="category" method="POST" action="{{route('category.update', $category->id)}}">
@csrf
@method('PUT')
<div class="mb-3 col-md-4">
    <label for="category" class="form-label">ID: {{ $category->id}}</label>
</div>
<div class="mb-3 col-md-4">
    <label for="category" class="form-label">Category</label>
    <input type="text" name="name" id="category" class="form-control" aria-describedby="category" requerid>
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

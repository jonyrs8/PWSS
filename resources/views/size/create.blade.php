@extends('layouts.admin')

@section('content')
<h1>Create size</h1>
<div class="mb-3 col-md-4">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<form name="size" method="POST" action="{{route('size.store')}}">
@csrf

<div class="mb-3 col-md-4">
    <label for="size" class="form-label">Name</label>
    <input type="text" name="name" id="size" class="form-control" aria-describedby="size" requerid>
</div>

<div class="mb-3 col-md-4 margin_top">
    <select name="status"  aria-label="Status" class="form-select" required>
        <option value= "" selected>Select Status</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
</div>
<button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection
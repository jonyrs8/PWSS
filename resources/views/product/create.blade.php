@extends('layouts.admin')

@section('content')
<h1>Create Product</h1>
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

<form name="product" method="POST" action="{{route('product.store')}}">
@csrf

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">SKU</label>
    <input type="text" name="sku" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Barcode</label>
    <input type="text" name="barcode" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Slug</label>
    <input type="text" name="slug" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Name</label>
    <input type="text" name="name" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Description</label>
    <input type="text" name="description" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Category</label>
    <select name="category"  aria-label="Category" class="form-select" required>
        <option value= "" selected>Select Category</option>
        @foreach ($categories as $category)
            <option value="{{ $category-> id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Brand</label>
    <select name="brand"  aria-label="Brand" class="form-select" required>
        <option value= "" selected>Select Brand</option>
        @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Price</label>
    <input type="text" name="price" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Sale Price</label>
    <input type="text" name="sale_price" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Vat</label>
    <input type="text" name="vat" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Weight</label>
    <input type="text" name="weight" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Height</label>
    <input type="text" name="height" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Length</label>
    <input type="text" name="length" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Width</label>
    <input type="text" name="width" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Color</label>
   <select name="color"  aria-label="Color" class="form-select" required>
        <option value= "" selected>Select Color</option>
        @foreach ($colors as $color)
            <option value="{{ $color->id }}">{{ $color->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Size</label>
    <select name="size_id"  aria-label="Size" class="form-select" required>
        <option value= "" selected>Select Size</option>
        @foreach ($sizes as $size)
            <option value="{{ $size->id }}">{{ $size->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Stock</label>
    <input type="text" name="stock" id="product" class="form-control" aria-describedby="product" requerid>
</div>

<div class="mb-3 col-md-4">
    <label for="product" class="form-label">Unit</label>
    <select name="unit_id"  aria-label="Unit" class="form-select" required>
        <option value= "" selected>Select Unit</option>
        @foreach ($units as $unit)
            <option value="{{ $unit->id }}">{{ $unit->name }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3 col-md-4 margin_top">
    <label for="product" class="form-label">Status</label>
    <select name="status"  aria-label="Status" class="form-select" required>
        <option value= "" selected>Select Status</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
</div>

<div class="mb-3 col-md-4 margin_top">
    <label for="product" class="form-label">Sale</label>
    <select name="sale"  aria-label="Sale" class="form-select" required>
        <option value= "" selected>Select</option>
        <option value="1">Yes</option>
        <option value="0">No</option>
    </select>
</div>

<button class="btn btn-primary" type="submit">Submit</button>
</form>

@endsection
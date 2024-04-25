@extends('layouts.admin')

@section('content')
<h1>Product</h1>
<br>
<a class="btn btn-primary" href="{{route('product.create')}}"> Adicionar</a>
<p>

<table id="product" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>SKU</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->sku }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price}}</td>
                <td style="width: 20%; text-align: right;">
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Options</button>
                        <ul dropdown-menu aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('product.show', $product->id)}}">
                                <i class="fa-solid fa-eye"></i> View</a></li>
                            <li><a class="dropdown-item" href="{{route('product.edit', $product->id)}}">
                                <i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
                            <li>
                                <form class="dropdown-item" action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bt-destroy"
                                            onclick="return confirm('Are you sure you whant to delete?')"
                                            type="submit"><i class="far fa-trash-alt"></i> Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            
        @endforeach
    </tbody>
</table>
<script>
    $(document).ready( function () {
        $('#product').DataTable();
    } );
</script>
@endsection
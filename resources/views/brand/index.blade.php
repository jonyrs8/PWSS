@extends('layouts.admin')

@section('content')
<h1>Brands</h1>
<br>
<a class="btn btn-primary" href="{{route('brand.create')}}"> Adicionar</a>
<p>

<table id="brand" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
            <th>Status</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        @foreach ($brands as $brand)
            <tr>
                <td>{{ $brand->name }}</td>
                <td>{{ $brand->status }}</td>
                <td>{{ $brand->created_at }}</td>
                <td>{{ $brand->updated_at }}</td>
                <td style="width: 20%; text-align: right;">
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Options</button>
                        <ul dropdown-menu aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('brand.show', $brand->id)}}">
                                <i class="fa-solid fa-eye"></i> View</a></li>
                            <li><a class="dropdown-item" href="{{route('brand.edit', $brand->id)}}">
                                <i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
                            <li>
                                <form class="dropdown-item" action="{{ route('brand.destroy', $brand->id) }}" method="POST">
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
        $('#brand').DataTable();
    } );
</script>
@endsection
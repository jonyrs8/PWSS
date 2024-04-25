@extends('layouts.admin')

@section('content')
<h1>Colors</h1>
<br>
<a class="btn btn-primary" href="{{route('color.create')}}"> Adicionar</a>
<p>

<table id="color" class="display" style="width:100%">
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

        @foreach ($colors as $color)
            <tr>
                <td>{{ $color->name }}</td>
                <td>{{ $color->status }}</td>
                <td>{{ $color->created_at }}</td>
                <td>{{ $color->updated_at }}</td>
                <td style="width: 20%; text-align: right;">
                    <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Options</button>
                        <ul dropdown-menu aria-labelledby="dropdownMenuButton1" class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('color.show', $color->id)}}">
                                <i class="fa-solid fa-eye"></i> View</a></li>
                            <li><a class="dropdown-item" href="{{route('color.edit', $color->id)}}">
                                <i class="fa-solid fa-pen-to-square"></i> Edit</a></li>
                            <li>
                                <form class="dropdown-item" action="{{ route('color.destroy', $color->id) }}" method="POST">
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
        $('#color').DataTable();
    } );
</script>
@endsection
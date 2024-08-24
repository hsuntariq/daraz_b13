<x-admin-layout>
    <x-flash />
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>category</th>
                    <th>actual price</th>
                    <th>discount price</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prod as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category->name }}</td>
                        <td>{{ $item->actual_price }}</td>
                        <td>{{ $item->discount_price }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img width="70px" height="70px" src="{{ asset('/storage/' . $item->image) }}" alt="">
                        </td>
                        <td>
                            <button class="btn btn-info">
                                Update
                            </button>
                        </td>
                        <td>
                            <form method="POST" action="/delete/{{ $item->id }}">
                                @csrf
                                <button class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $prod->links('pagination::bootstrap-4') }}
    </div>
</x-admin-layout>

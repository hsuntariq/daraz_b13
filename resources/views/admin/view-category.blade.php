<x-admin-layout>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>category</th>
                    <th>sub category</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->sub_category }}</td>
                        <td>
                            <img width="70px" height="70px" src="{{ asset('/storage/' . $item->image) }}" alt="">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links('pagination::bootstrap-4') }}
    </div>
</x-admin-layout>

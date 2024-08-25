<x-layout>
    <x-flash />
    <x-navbar />
    <div class="container " style="margin-top:10rem">
        <div class="table-responsive table-bordered">
            <table class="table table-striped text-capitalize">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>actual_price</th>
                        <th>discount_price</th>
                        <th>quantity</th>
                        <th>image</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($myCart as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->actual_price }}</td>
                            <td>{{ $item->discount_price }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>
                                <img width="50px" src="{{ asset('/storage/' . $item->image) }}" alt="">
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Update
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Quatity</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="/update-quantity/{{ $item->id }}">
                                                    @csrf
                                                    <input placeholder="e.g 5" type="number" name="quantity"
                                                        class="form-control">
                                                    <button class="btn btn-success w-100 my-1">
                                                        Add Quantity
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <form method="POST" action="/delete-cart/{{ $item->id }}">
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
            <button class="btn d-block ms-auto btn-primary">
                Checkout
            </button>
        </div>
    </div>
</x-layout>

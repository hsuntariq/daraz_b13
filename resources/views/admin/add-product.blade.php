<x-admin-layout>
    <div class="container shadow p-5 rounded-3 col-xl-6 col-lg-7 col-md-9 mx-auto">
        <h1 class="display-4 text-center fw-medium" style="color: orangered">
            <i class="bi bi-plus"></i> Add Products
        </h1>
        <form action="/add-product" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}">
            </div>
            @error('name')
                <p class="text-danger fw-medium m-0">
                    {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="">Actual Price</label>
                <input type="number" class="form-control" name="actual_price" id=""
                    value="{{ old('actual_price') }}">
            </div>
            @error('actual_price')
                <p class="text-danger fw-medium m-0">
                    {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="">Discount Price</label>
                <input type="number" class="form-control" name="discount_price" id=""
                    value="{{ old('discount_price') }}">
            </div>
            @error('discount_price')
                <p class="text-danger fw-medium m-0">
                    {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" id="" cols="30" rows="4" class="form-control"
                    value="{{ old('description') }}"></textarea>
            </div>
            @error('description')
                <p class="text-danger fw-medium m-0">
                    {{ $message }}
                </p>
            @enderror
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" class="form-control preview_input" name="image" id=""
                    value="{{ old('file') }}">
            </div>
            @error('image')
                <p class="text-danger fw-medium m-0">
                    {{ $message }}
                </p>
            @enderror
            <img src="" style="width:100px;height: 100px;" class="my-3 preview-image" alt="preview image">
            <button class="btn w-100 my-2 border-0 text-white fw-medium" style="background: orangered">
                <i class="bi bi-plus"></i> Add Product
            </button>

        </form>
    </div>

    <script>
        let preview_image = document.querySelector('.preview-image')
        let preview_input = document.querySelector('.preview_input')
        preview_image.style.display = 'none'


        preview_input.addEventListener('input', (e) => {
            let file = e.target.files[0]
            let image_url = URL.createObjectURL(file)
            preview_image.style.display = 'block'
            preview_image.src = image_url
        })
    </script>

</x-admin-layout>

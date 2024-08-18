<style>
    body {
        overflow-x: hidden;
    }
</style>
<x-layout>
    <div class="row">
        <div class="col-xl-2 col-lg-3">
            <x-admin-sidebar />
        </div>
        <div class="col-xl-10 col-lg-9 d-flex justify-content-center align-items-center">
            {{ $slot }}
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</x-layout>

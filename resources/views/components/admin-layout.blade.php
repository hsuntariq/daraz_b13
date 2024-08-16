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
</x-layout>

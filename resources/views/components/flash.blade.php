<x-layout>
    @if (session()->has('message'))
        <p style="z-index: 33333;left:50%;transform:translateX(-50%)"
            class="position-fixed  flash p-3 top-0 bg-warning text-dark fw-bold">
            {{ session('message') }}
        </p>
    @endif


    <script>
        let flash = document.querySelector('.flash')
        flash.style.transition = 'all 0.8s'
        setTimeout(() => {
            flash.style.transform = 'translate(-50%,-140%)'
        }, 3000);
    </script>


</x-layout>

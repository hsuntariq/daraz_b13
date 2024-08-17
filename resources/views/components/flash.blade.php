<x-layout>
    @if (session()->has('message'))
        <p class="position-fixed flash p-3 top-0 bg-warning text-dark fw-bold">
            {{ session('message') }}
        </p>
    @endif


    <script>
        let flash = document.querySelector('.flash')
        flash.style.transition = 'all 0.8s'
        setTimeout(() => {
            flash.style.transform = 'translateY(-140%)'
        }, 3000);
    </script>


</x-layout>

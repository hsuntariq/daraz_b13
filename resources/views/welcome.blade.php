<style>
    body {
        background: #F5F5F5 !important;

    }

    .my-card:last-child {
        border-right: 0 !important
    }

    .my-card:nth-child(6) {
        border-right: 0 !important
    }

    .my-card:hover {
        box-shadow: 2px 2px 2px 2px lightgray
    }

    .text-sm {
        font-size: 0.7rem
    }


    .text-orange {
        color: #F85606
    }

    .text-md {
        font-size: 0.9rem;
    }

    .carousel {
        margin-top: 4rem
    }

    @media (max-width:1000px) {
        .app-card {
            display: none
        }
    }

    @media (max-width:900px) {
        .header-ul li {
            display: none
        }
    }
</style>
<x-layout>
    <x-flash />
    <x-navbar />
    <x-slider />

    <div class="container">
        <h2 class="fw-light">Categories</h2>
        <div class="row flex-wrap">
            @foreach ($categories as $item)
                <div
                    class="col-xl-2 text-center bg-white col-lg-3 col-md-4 col-sm-4 col-6 border border-top-0 border-start-0 my-card text-center p-4 rounded-0">

                    <img width="100px" style="object-fit: cover" height="100px" class="d-block mx-auto"
                        src={{ asset('/storage/' . $item->image) }} alt="">
                    <p style="width:max-content" class="text-center mx-auto">
                        {{ $item->name }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>


    <div class="container my-3">
        <h2 class="fw-light">Flash Sale</h2>
        <div class="bg-white">
            <div class="d-flex p-3 justify-content-between align-items-center">
                <p class="fw-medium text-capitalize p-0 m-0" style="color:#F85606 ">
                    on sale now
                </p>
                <button class="btn text-uppercase fw-medium rounded-0" style="border: 1px solid #F85606;color:#F85606">
                    shop all products
                </button>
            </div>
            <hr class="m-0 p-0">
        </div>
        <div class="row">
            @foreach ($sales as $item)
                <div class="col-lg-3 my-2">
                    <div class="card border-0 shadow p-4">
                        <img width="100%" height="200px" style="object-fit: cover"
                            src="{{ asset('/storage/' . $item->image) }}" alt="">
                        <p class="m-0 text-capitalize">
                            Washing machine GM-720 for medium sized...
                        </p>
                        <p class="fs-4" style="color: #F85606">

                            Rs. <span class="discount_price">
                                {{ $item->discount_price }}
                            </span>

                        </p>
                        <div class="d-flex">

                            <p class="text-secondary m-0 text-sm text-decoration-line-through ">
                                Rs. <span class="actual_price"> {{ $item->actual_price }}</span>
                            </p>
                            <p class="m-0 text-sm percentage ms-2 border px-2">

                            </p>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end">
            {{ $sales->links('pagination::bootstrap-4') }}
        </div>
    </div>


    <div class="container">
        <h2 class="fw-light text-capitalize">just for you</h2>
        <div class="row">


            @foreach ($prod as $item)
                <div class="col-lg-3 my-2">
                    <div class="card border-0 shadow p-4">
                        <img width="100%" height="200px" style="object-fit: cover"
                            src="{{ asset('/storage/' . $item->image) }}" alt="">
                        <p class="m-0 text-capitalize">
                            {{ $item->name }}
                        </p>
                        <p class="fs-4" style="color: #F85606">

                            Rs. <span class="discount_price">
                                {{ $item->discount_price }}
                            </span>

                        </p>
                        <div class="d-flex">

                            <p class="text-secondary m-0 text-sm text-decoration-line-through ">
                                Rs. <span class="actual_price"> {{ $item->actual_price }}</span>
                            </p>
                            <p class="m-0 text-sm percentage ms-2 border px-2">

                            </p>
                        </div>
                        <div class="d-flex w-100 align-items-center justify-content-between">

                            <div class="text-sm">
                                ⭐⭐⭐⭐⭐
                            </div>
                            <form action="/add-to-cart" class="form-data" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $item->name }}" name="name">
                                <input type="hidden" value="{{ $item->description }}" name="description">
                                <input type="hidden" value="{{ $item->actual_price }}" name="actual_price">
                                <input type="hidden" value="{{ $item->discount_price }}" name="discount_price">
                                <input type="hidden" value="{{ $item->image }}" name="image">
                                <button type="button" style="cursor:pointer"
                                    class="border cart bg-transparent px-3 py-2  rounded-pill">
                                    <div class="bi bi-cart-plus"></div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <button class="btn w-25 my-3 d-block mx-auto rounded-0 border border-info text-info">
            Load More
        </button>
    </div>


    <footer class="container my-5">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <ul class="list-unstyled text-md">
                    <p class="m-0 fs-3">
                        Customer care
                    </p>
                    <li>composeddetail</li>
                    <li>cowboyanyone</li>
                    <li>couldprogram</li>
                    <li>fatchance</li>
                    <li>arrowlake</li>
                    <li>studyinggone</li>
                    <li>writespirit</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <ul class="list-unstyled text-md">
                    <p class="m-0 fs-3">
                        Daraz
                    </p>
                    <li>especiallybecome</li>
                    <li>startiron</li>
                    <li>reportseldom</li>
                    <li>carriedrather</li>
                    <li>youngerprobably</li>
                    <li>forceexist</li>
                    <li>degreehour</li>
                    <li>hotslave</li>
                    <li>ironneeded</li>
                    <li>gunpilot</li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="d-flex align-items-center">
                    <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp"
                        width="40px" alt="">
                    <div class="">

                        <p class="text-orange m-0 text-capitalize">
                            happy shopping
                        </p>
                        <p class="text-capitalize m-0">Download the app</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">

                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp"
                    width="40px" alt="">
                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp"
                    width="40px" alt=""><br>
                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp"
                    width="40px" alt="">


            </div>

        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        let discount_price = document.querySelectorAll('.discount_price')
        let actual_price = document.querySelectorAll('.actual_price')
        let percentage = document.querySelectorAll('.percentage')

        actual_price.forEach((item, index) => {
            // console.log(index)
            let convertedActualPrice = parseInt(item.innerText)
            let convertedDiscountPrice = discount_price[index].innerText
            let per = (((convertedActualPrice - convertedDiscountPrice) / convertedActualPrice) * -100).toFixed(0)
            percentage[index].innerText = ` ${per}%`
        })



        $(document).ready(function() {
            $.ajax({
                url: '/get-cart-data',
                type: 'GET',
                success: function(data) {
                    $('.cart-count').html(data)
                }
            })
        })



        $(document).on('click', '.cart', function() {
            $.ajax({
                url: '/add-to-cart',
                type: 'POST',
                data: $(this).closest('.form-data').serialize(),
                success: function(data) {
                    alert('Added to cart');
                    $.ajax({
                        url: '/get-cart-data',
                        type: 'GET',
                        success: function(data) {
                            $('.cart-count').html(data)
                        }
                    })
                }
            })
        })
    </script>


</x-layout>

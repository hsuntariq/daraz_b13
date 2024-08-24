<nav style="background: #F85606" class="position-fixed w-100 z-3  top-0">
    <ul
        class="d-flex header-ul justify-content-end p-0 m-0 list-unstyled gap-3 text-white fw-medium me-4 text-uppercase">
        <li>save more on app</li>
        <li>sell on daraz</li>
        <li>help & support</li>
        @auth

            @can('admin')
                <li>
                    <a href="/admin-dashboard" class="text-decoration-none text-white">
                        Admin dashboard
                    </a>
                </li>
            @endcan
        @endauth

        @guest
            <li>
                <a href="/login" class="text-decoration-none text-white">
                    login
                </a>
            </li>
            <li>
                <a href="/sign-up" class="text-decoration-none text-white">
                    sign up</a>
            </li>
        @endguest



        @auth
            <li>
                Salam <span class="fw-bold text-dark">
                    {{ auth()->user()->name }}
                </span>
            </li>


            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="bg-transparent border-0 fs-3 text-white ">
                        <div class="bi bi-power"></div>
                    </button>
                </form>
            </li>
        @endauth

    </ul>
    <div class="d-flex p-4 container justify-content-around">
        <img width="120px" src="https://lzd-img-global.slatic.net/us/domino/3b870cb043c7f8a9741cbf66329e294e.png"
            alt="">
        <div class="d-flex w-75 bg-white rounded-1 border-0">
            <input type="text" placeholder="Search in Daraz"
                class="bg-transparent form-control rounded-0 border-0 p-2 ">
            <i class="bi bi-search   fs-5 d-flex justify-content-center align-items-center border-0 px-3"
                style="background: #FFE1D2;color:#F85606;border-radius: 0 2px 2px 0"></i>
        </div>
        <i class="bi bi-cart fs-4 text-white"></i>
    </div>
</nav>

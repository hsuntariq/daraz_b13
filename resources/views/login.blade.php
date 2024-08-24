<style>
    body {
        background: #EFF0F5 !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .ball1,
    .ball2 {
        width: 1200px;
        height: 1000px;
        background: red;
        border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    }

    .ball1 {
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: blob 5s infinite ease-in-out alternate-reverse;
        z-index: -1
    }

    @keyframes blob {
        0% {
            border-radius: 58% 53% 24% 75% / 61% 76% 24% 47%;
        }

        25% {
            border-radius: 57% 43% 20% 80% / 57% 83% 17% 43%;
            background: orange;
        }

        50% {
            border-radius: 79% 21% 44% 56% / 37% 23% 77% 63%;
            background: orangered;
        }

        75% {
            border-radius: 35% 65% 75% 25% / 76% 55% 45% 24%;
            background: yellow;
        }

        100% {
            border-radius: 58% 53% 24% 75% / 61% 76% 24% 47%;
            background: yellowgreen;
        }
    }
</style>
<x-layout>
    <x-flash />
    <x-navbar />

    <div class="col-lg-6 mx-auto shadow position-relative bg-white p-5 rounded-3">
        <div class="ball1 position-absolute"></div>
        <div class="d-flex justify-content-between align-items-center">
            <h4>Create your Daraz Account</h4>
            <p style="font-size: 0.8rem" class="text-secondary m-0">
                New to the app? <a href="/sign-up" class="text-primary text-decoration-none">Sign Up</a> here
            </p>
        </div>
        <form action="/login" method="POST" class="bg-white p-5">
            @csrf
            <div class="row">
                <div class="">
                    <div class="form-group">
                        <label for="">Phone number</label>
                        <input type="text" name="phone" class="form-control rounded-0">
                    </div>
                    @error('phone')
                        <p class="text-danger fw-medium m-0">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" name="password" class="form-control rounded-0">
                    </div>
                    @error('password')
                        <p class="text-danger fw-medium m-0">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <button style="background:#F85606" class="btn w-100 text-white fw-medium my-2 rounded-0 p-2">
                    LOG IN
                </button>
            </div>
        </form>
    </div>
</x-layout>

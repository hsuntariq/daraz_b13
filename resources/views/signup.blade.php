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
    <x-navbar />
    <div class="col-lg-6 mx-auto shadow position-relative bg-white p-5 rounded-3">
        <div class="ball1 position-absolute"></div>
        <div class="d-flex justify-content-between align-items-center">
            <h4>Create your Daraz Account</h4>
            <p style="font-size: 0.8rem" class="text-secondary m-0">
                Already a member? <a href="/login" class="text-primary text-decoration-none">Login</a> here
            </p>
        </div>
        <form action="/signup" method="POST" class="bg-white p-5">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Phone number *</label>
                        <input type="text" name="phone" class="form-control rounded-0">
                    </div>
                    @error('phone')
                        <p class="text-danger fw-medium m-0">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="form-group">
                        <label for="">Password *</label>
                        <input type="text" name="password" class="form-control rounded-0">
                    </div>
                    @error('password')
                        <p class="text-danger fw-medium m-0">
                            {{ $message }}
                        </p>
                    @enderror
                    <div class="d-flex gap-2 align-items-center">
                        <div class="left w-100">
                            <label for="">Birthday</label>
                            <div class="d-flex gap-2">
                                <select class="form-control rounded-0 rounded-0" name="month" id="">
                                    <option value="jan">jan</option>
                                    <option value="feb">feb</option>
                                    <option value="mar">mar</option>
                                </select>
                                @error('month')
                                    <p class="text-danger fw-medium m-0">
                                        {{ $message }}
                                    </p>
                                @enderror
                                <select class="form-control rounded-0 rounded-0" name="day" id="">
                                    @for ($i = 1; $i < 32; $i++)
                                        <option value="{{ $i }}">
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                @error('day')
                                    <p class="text-danger fw-medium m-0">
                                        {{ $message }}
                                    </p>
                                @enderror
                                <select class="form-control rounded-0 rounded-0" name="year" id="">
                                    @for ($i = 2024; $i >= 1900; $i--)
                                        <option value="{{ $i }}">
                                            {{ $i }}
                                        </option>
                                    @endfor
                                </select>
                                @error('year')
                                    <p class="text-danger fw-medium m-0">
                                        {{ $message }}
                                    </p>
                                @enderror

                            </div>
                        </div>
                        <div class="right">

                            <label for="">Gender</label>
                            <select name="gender" id="" class="form-control rounded-0">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            @error('gender')
                                <p class="text-danger fw-medium m-0">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Full name*</label>
                        <input type="text" name="name" class="form-control rounded-0">
                    </div>
                    @error('name')
                        <p class="text-danger fw-medium m-0">
                            {{ $message }}
                        </p>
                    @enderror
                    <button style="background:#F85606" class="btn w-100 text-white fw-medium my-2 rounded-0 p-2">
                        SIGN UP
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>

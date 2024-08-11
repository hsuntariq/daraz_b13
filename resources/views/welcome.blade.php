<style>
    body{
        background: #F5F5F5 !important;
    }
    .my-card:last-child{
        border-right: 0 !important
    }
    .my-card:nth-child(6){
        border-right: 0 !important
    }

    .my-card:hover{
        box-shadow: 2px 2px 2px 2px lightgray
    }

    .text-sm{
        font-size: 0.7rem
    }


    .text-orange{
        color: #F85606
    }

    .text-md{
        font-size: 0.9rem;
    }

</style>
<x-layout>
    <x-navbar/>
    <x-slider/>

    <div class="container">
        <h2 class="fw-light">Categories</h2>
        <div class="row flex-wrap">
            @for ($i = 0; $i < 12; $i++)
            <div class="col-xl-2 bg-white col-lg-3 col-md-4 col-sm-4 col-6 border border-top-0 border-start-0 my-card text-center p-4 rounded-0">

                    <img width="70%" class="d-block mx-auto" src="https://img.drz.lazcdn.com/static/pk/p/0bb9c6c92099c81dbe1aa42910a8ac5f.jpg_80x80q80.jpg_.webp" alt="">
                    <p style="width:max-content">Messenger bags</p>
            </div>
            @endfor
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
            @for ($i = 0; $i < 6; $i++)
                <div class="col-lg-2 my-2">
                    <div class="card border-0">
                        <img width="100%" src="https://img.drz.lazcdn.com/g/kf/S4c20e80c36274e208a7920b5fff8fe5a9.jpg_200x200q80.jpg_.webp" alt="">    
                        <p class="m-0 text-capitalize">
                            Washing machine GM-720 for medium sized...
                        </p>
                        <p class="fs-4" style="color: #F85606">
                            Rs.12,099

                        </p>
                        <div class="d-flex">

                            <p class="text-secondary m-0 text-sm text-decoration-line-through">
                                Rs.14,800
                            </p>
                            <p class="m-0 text-sm">
                                -18%
                            </p>
                        </div>
                    </div>    
                </div>   
            @endfor
        </div>
    </div>


    <div class="container">
        <h2 class="fw-light text-capitalize">just for you</h2>
        <div class="row">

            @for ($i = 0; $i < 23; $i++)
                <div class="col-lg-2 my-2">
                    <div class="card border-0">
                        <img width="100%" src="https://img.drz.lazcdn.com/static/pk/p/a00e72d5a5366249be39be262745d3cf.jpg_200x200q80.jpg_.webp" alt="">    
                        <p class="m-0 text-capitalize">
                            Washing machine GM-720 for medium sized...
                        </p>
                        <p class="fs-4" style="color: #F85606">
                            Rs.12,099

                        </p>
                        <div class="d-flex">

                            <p class="text-secondary m-0 text-sm text-decoration-line-through">
                                Rs.14,800
                            </p>
                            <p class="m-0 text-sm">
                                -18%
                            </p>
                        </div>
                        <div class="text-sm">
                            ⭐⭐⭐⭐⭐
                        </div>
                    </div>    
                </div>
            @endfor
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
                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px" alt="">
                <div class="">

                    <p class="text-orange m-0 text-capitalize">
                        happy shopping
                    </p>
                    <p class="text-capitalize m-0">Download the app</p>
                </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
               
                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px" alt="">
                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px" alt=""><br>
                <img src="https://img.lazcdn.com/us/domino/1ee015d6a5c62fd0339c88c657c1c183.jpg_2200x2200q80.jpg_.webp" width="40px" alt="">
                
                
            </div>
            
        </div>
    </footer>
    



</x-layout>
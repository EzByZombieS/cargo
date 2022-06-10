<x-web-layout title="Dashboard">

    <div class="row g-5 g-xl-8">
        <div class="col-xl-12">
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header align-items-center border-0 mt-4">
                    
                    <h3 class="card-title align-items-start flex-column">
                        <span class="fw-bolder text-dark">Welcome Message !!</span>
                    </h3>
                </div>
                <div class="card-body pt-3">
                    <div class="d-flex align-items-sm-center mb-7">
                        <div class="d-flex flex-row-fluid flex-wrap align-items-center">
                            <div class="flex-grow-1 me-2">
                                <span class="text-gray-800 fw-bolder text-hover-primary fs-6">Selamat Datang {{Auth::user()->username}},</span><br><br>
                                <span class="text-gray-800 text-hover-primary fs-6">Sistem Cargo List Manifest</span><br>
                                <span class="text-gray-800 text-hover-primary fs-6">Jangan Berikan Username dan Password Anda pada Siapapun</span> <br>
                            </div>
                            <span class="fw-bolder text-info py-1"><img alt="Logo" src="{{ asset('img/logo.png') }}" class="h-200px" /><br></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body p-lg-17">
            <div class="row g-5 mb-5 mb-lg-15">
                <div class="col-sm-6 pe-lg-10">
                    <div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-100">
                        <h1 class="text-dark fw-bolder my-5">Calender</h1>
                        <div class="text-gray-700 fw-bold fs-2">{{ date('Y-m-d') }}</div>
                    
                        

                    </div>
                </div>
                <div class="col-sm-6 ps-lg-10">
                    <div class="text-center bg-light card-rounded d-flex flex-column justify-content-center p-10 h-100">
                        <span class="svg-icon svg-icon-3tx svg-icon-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
                                <path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
                            </svg>
                        </span>
                        <h1 class="text-dark fw-bolder my-5">Our Head Office</h1>
                        <div class="text-gray-700 fs-3 fw-bold">Churchill-laan 16 II, 1052 CD, Amsterdam</div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</x-web-layout>
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

</x-web-layout>
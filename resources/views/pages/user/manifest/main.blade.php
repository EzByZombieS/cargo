<x-web-layout title="Inbound">
    {{-- <div id="content_list">
        <div class="card card-flush">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                            </svg>
                        </span>
                        <input type="text" id="content_filter"  class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" name="keywords" onkeyup="load_list(1);" />
                    </div>
                </div>
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <a href="javascript:;" onclick="load_input('{{ route('schedule.create') }}');" class="btn btn-primary">Add Inbound</a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div id="list_result"></div>
            </div>
        </div>
    </div>
    <div id="content_input"></div>

    @section('custom_js')
    <script>
        load_list(1);
    </script>
    @endsection --}}

    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Manifest Inbound</span>
            </h3>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th class="ps-4 min-w-160px rounded-start">ID Vissel</th>
                            <th class="min-w-125px">Vessel Name</th>
                            <th class="min-w-125px">ETA</th>
                            <th class="min-w-125px">ETD</th>
                            <th class="min-w-150px">Continer Number</th>
                            <th class="min-w-120px">PO</th>
                            <th class="min-w-150px">Description</th>
                            <th class="min-w-120px">Remaks</th>
                            <th class="min-w-195px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <span href="#" class="text-dark fw-bolder  mb-1 fs-6">Brad Simmons</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">$8,000,000</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">$5,400</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">Cetak</a>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="card mb-5 mb-xl-8">
        <div class="card-header border-0 pt-5">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder fs-3 mb-1">Manifest OutBound</span>
            </h3>
        </div>
        <div class="card-body py-3">
            <div class="table-responsive">
                <table class="table align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bolder text-muted bg-light">
                            <th class="ps-4 min-w-160px rounded-start">ID Vissel</th>
                            <th class="min-w-125px">Vessel Name</th>
                            <th class="min-w-125px">ETA</th>
                            <th class="min-w-125px">ETD</th>
                            <th class="min-w-150px">Continer Number</th>
                            <th class="min-w-120px">PO</th>
                            <th class="min-w-150px">Description</th>
                            <th class="min-w-195px text-end rounded-end"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex justify-content-start flex-column">
                                        <span href="#" class="text-dark fw-bolder  mb-1 fs-6">Brad Simmons</span>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">$8,000,000</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">$5,400</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>
                            <td>
                                <span class="text-dark fw-bolder  d-block mb-1 fs-6">Intertico</span>
                            </td>>
                            <td class="text-end">
                                <a href="#" class="btn btn-bg-light btn-color-muted btn-active-color-primary btn-sm px-4 me-2">Cetak</a>
                            </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-web-layout>
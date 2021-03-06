<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10"> 
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>ETA</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <input class="form-control form-control-solid" placeholder="Pick date & time" name="eta" value="{{$outbound->eta}}" id="kt_datepicker_1"/>
                            <div class="text-muted fs-7">Atur jadwal keberangkatan.</div>
                        </div>
                        <div class="card-header">
                            <div class="card-title">
                                <h2>ETD</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                                <input class="form-control form-control-solid" placeholder="Pick date & time" value="{{$outbound->etd}}" name="etd" id="kt_datepicker_2"/>
                            <div class="text-muted fs-7">Atur jadwal kepulangan.</div>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Container Number</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <input type="text" name="containernumber" id="container" class="form-control mb-2" placeholder="0123456" value="{{$outbound->container_number}}" />
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Detail</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">ID Vessel</label>
                                            <input type="text" name="idvessel" id="idvessel" class="form-control mb-2" placeholder="" value="{{$outbound->id_vessel}}" />
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Vassel Name</label>
                                            <input type="text" name="vasselname" class="form-control mb-2" placeholder="" value="{{$outbound->vessel_name}}" />
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">PO</label>
                                            <input type="text" name="po" class="form-control mb-2" placeholder="" value="{{$outbound->po}}" />
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Description</label>
                                            <input type="text" name="description" class="form-control mb-2" placeholder="" value="{{$outbound->description}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="load_list(1);" class="btn btn-light me-5">Kembali</button>
                        @if ($outbound->id)
                        <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('outbound.update',$outbound->id)}}','PATCH');" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        @else
                            <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('outbound.store')}}','POST');" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $("#kt_datepicker_1").flatpickr({
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
    $("#kt_datepicker_2").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    });
    number_only('container');
    number_only('idvessel');
</script>

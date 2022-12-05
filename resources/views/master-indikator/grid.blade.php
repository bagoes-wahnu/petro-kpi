@extends('layout.main')
@section('content')
<style>
    .btn-dttb-type{width: 150px; padding:10px !important;}
</style>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card card-flush mb-5 mb-xl-10" id="kt_profile_details_view">
                <div class="card-header">
                    <div class="d-flex flex-column card-title m-0 py-5">
                        <h3 class="fw-bolder m-0">Master Indikator</h3>
                        <div class="text-gray-400 fw-bold fs-5 py-5">
                            Master Indikator pada aplikasi Key Performance Indicator
                        </div>
                    </div>
                    <div class="d-flex flex-row m-0">
                        <a href="javascript:;" class="btn btn-success align-self-center" onclick="create()">Tambah</a>
                    </div>
                </div>
                <div class="card-body px-9 pb-9 pt-0">
                    <div class="my-0">
                        {{-- <div class="row mx-0">
                            <button class="btn btn-sm btn-outline btn-outline-solid btn-outline-warning btn-active-light-warning btn-dttb-type me-3" id="btn-dttb-1" onclick="dttbType('1')">Prespektif</button>
                            <button class="btn btn-sm btn-outline btn-outline-solid btn-outline-warning btn-active-light-warning btn-dttb-type me-3" id="btn-dttb-2" onclick="dttbType('2')">Sasaran Strategis</button>
                            <button class="btn btn-sm btn-outline btn-outline-solid btn-outline-warning btn-active-light-warning btn-dttb-type me-3" id="btn-dttb-3" onclick="dttbType('3')">Parameter</button>
                        </div>
                        <div id="table-1" class="d-none dttb"></div>
                        <div id="table-2" class="d-none dttb"></div>
                        <div id="table-3" class="d-none dttb"></div> --}}
                        <table id="kt_datatable_example_5" class="table gy-5 gs-7 table-row-bordered border rounded" id="dttb-master-data">
                            <thead>
                                <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                    <th>No</th>
                                    <th>Indikator</th>
                                    <th>Nilai 1</th>
                                    <th>Nilai 2</th>
                                    <th>Nilai 3</th>
                                    <th>Nilai 4</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Gap ROIC to WACC</td>
                                    <td>< 70%</td>
                                    <td>70% - < 80%</td>
                                    <td>80% - < 90%</td>
                                    <td>90% - >= 100%</td>
                                    <td>
                                        <div class="form-check form-switch form-check-custom form-check-solid">
                                            <input class="form-check-input w-45px h-30px" type="checkbox" value="" id="flexSwitchDefault"/>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-icon me-1" onclick="create()">
                                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black" />
                                                    <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black" />
                                                    <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Working Capital to Current Asset</td>
                                    <td>x >= 1,0</td>
                                    <td>0,9 <= x <= 1,0</td>
                                    <td>0,8 <= x <= 0,9</td>
                                    <td>0,2 <= x <= 0,8</td>
                                    <td>
                                        <div class="form-check form-check-solid form-switch fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                            <label class="form-check-label" for="allowmarketing"></label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-icon me-1" onclick="create()">
                                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black" />
                                                    <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black" />
                                                    <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Indeks Bearing Debt to EBITDA</td>
                                    <td>Indeks <= 4%</td>
                                    <td>Indeks 4% - < 8%</td>
                                    <td>Indeks 8% - < 10%</td>
                                    <td>Indeks >= 10%</td>
                                    <td>
                                        <div class="form-check form-check-solid form-switch fv-row">
                                            <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked" />
                                            <label class="form-check-label" for="allowmarketing"></label>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-icon me-1" onclick="create()">
                                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M2 4.63158C2 3.1782 3.1782 2 4.63158 2H13.47C14.0155 2 14.278 2.66919 13.8778 3.04006L12.4556 4.35821C11.9009 4.87228 11.1726 5.15789 10.4163 5.15789H7.1579C6.05333 5.15789 5.15789 6.05333 5.15789 7.1579V16.8421C5.15789 17.9467 6.05333 18.8421 7.1579 18.8421H16.8421C17.9467 18.8421 18.8421 17.9467 18.8421 16.8421V13.7518C18.8421 12.927 19.1817 12.1387 19.7809 11.572L20.9878 10.4308C21.3703 10.0691 22 10.3403 22 10.8668V19.3684C22 20.8218 20.8218 22 19.3684 22H4.63158C3.1782 22 2 20.8218 2 19.3684V4.63158Z" fill="black" />
                                                    <path d="M10.9256 11.1882C10.5351 10.7977 10.5351 10.1645 10.9256 9.77397L18.0669 2.6327C18.8479 1.85165 20.1143 1.85165 20.8953 2.6327L21.3665 3.10391C22.1476 3.88496 22.1476 5.15129 21.3665 5.93234L14.2252 13.0736C13.8347 13.4641 13.2016 13.4641 12.811 13.0736L10.9256 11.1882Z" fill="black" />
                                                    <path d="M8.82343 12.0064L8.08852 14.3348C7.8655 15.0414 8.46151 15.7366 9.19388 15.6242L11.8974 15.2092C12.4642 15.1222 12.6916 14.4278 12.2861 14.0223L9.98595 11.7221C9.61452 11.3507 8.98154 11.5055 8.82343 12.0064Z" fill="black" />
                                                </svg>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-add" data-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <div class="modal-content">
                <div class="modal-header" id="kt_modal_new_header">
                    <h2 id="modal-title">Tambah Master Parameter</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body py-0">
                    <div class="card card-xxl-stretch mb-5 mb-xl-8">
                        <div class="card-header border-0 pt-5">
                            <div class="card-toolbar">
                                <ul class="nav">
                                    <div class="row" data-kt-buttons="true" data-kt-buttons-target="[data1-kt-button='true']">
                                        <div class="col-4 w-325px">
                                            <label class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 ms-0 me-2 menu-form menu-1" data-bs-toggle="tab" href="#kt_widget_tab_1" data1-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                                    <input class="form-check-input menu-1" type="radio" name="finance_usage" value="1"/>
                                                </span>
                                                <span class="ms-5 mt-2">
                                                    <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Perspektif</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-4 w-325px">
                                            <label class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-2 menu-form menu-3" data-bs-toggle="tab" href="#kt_widget_tab_2" data1-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                                    <input class="form-check-input menu-3" type="radio" name="finance_usage" value="2"/>
                                                </span>
                                                <span class="ms-5 mt-2">
                                                    <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Indikator</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="tab-content">
                                <div class="tab-pane fade menu-form" id="kt_widget_tab_1">
                                    <input type="hidden" id="id" value="">
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mt-5 mb-3">Perspektif</label>
                                        <input id="nama-1" type="text" class="form-control" name="row-name" placeholder="Masukkan Perspektif" value="" />
                                    </div>
                                </div>
                                <div class="tab-pane fade active menu-form" id="kt_widget_tab_2">
                                    <input type="hidden" id="id" value="">
                                    <label class="d-flex text-start ms-0 me-2 w-175px">
                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                            <input class="form-check-input checkbox-1" type="checkbox" name="pic" value="1"/>
                                        </span>
                                        <span class="ms-5 mt-2">
                                            <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Perlu PIC</span>
                                        </span>
                                    </label>
                                    <div class="d-flex flex-column fv-row">
                                        <div id="departemen-pic" class="col-10 d-none">
                                            <label class="fs-5 fw-bold mt-3">Departemen</label>
                                            {{-- <select class="form-select form-select-sm select-perspektif ms-15" data-control="select2" id="select-departemen" name="param" style="width:100%">
                                            </select> --}}
                                            <select class="form-select form-select-sm col-8 ms-15" data-control="select2" id="select-departemen" data-placeholder="Pilih departemen" name="departemen" style="width:100%">
                                                <option value="">Pilih departemen...</option>
                                                <option value="1">Keuangan</option>
                                                <option value="2">Teknologi</option>
                                                <option value="3">Design</option>
                                                <option value="4">SDM</option>
                                                <option value="5">Alat Berat</option>
                                            </select>
                                        </div>
                                        <div id="departemen-pic" class="col-10 d-none">
                                            <label id="departemen-pic1" class="fs-5 fw-bold ms-15 mt-3 d-none">Pilih PIC untuk departemen <span class="fw-bolder">Keuangan</span></label>
                                            <select class="form-select form-select-sm select-perspektif ms-15 d-none" id="select-pic" name="param" style="width:100%">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column fv-row">
                                        <label class="fs-5 fw-bold mt-3 mb-3">Perspektif</label>
                                        <select class="form-select select-perspektif" data-control="select2" id="select-perspektif-parameter" name="param" style="width:100%">
                                        </select>
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mt-3 mb-3">Indikator</label>
                                        <input type="text" class="form-control" id="indikator" name="sasaran-name" placeholder="Masukkan indikator" value="" />
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mt-3 mb-3">Definisi KPI</label>
                                        <input type="text" class="form-control" id="definisi-kpi" name="sasaran-name" placeholder="Masukkan definisi KPI" value="" />
                                    </div>
                                    <div class="col-md-12 fv-row">
                                        <label class="fs-5 fw-bold mt-3 mb-3">Target</label>
                                        <input type="text" class="form-control" id="target" name="sasaran-name" placeholder="Masukkan target" value="" />
                                    </div>
                                    <div class="col-md-12 mb-2 fv-row">
                                        <label class="fs-5 fw-bold mt-3 mb-3">Formula</label>
                                        <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target">
                                            <h3>Quick and Simple TinyMCE 5 Integration</h3>
                                            <p>.</p>
                                        </textarea>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 fv-row">
                                            <label class="fs-5 fw-bold mt-3 mb-3">Satuan</label>
                                            <input type="text" class="form-control" placeholder="Tulis Satuan" id="satuan" name="satuan" />
                                        </div>
                                        <div class="col-md-4 d-flex flex-column mb-5 fv-row">
                                            <label class="fs-5 fw-bold mt-3 mb-3">Sumber Data</label>
                                            <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Pilih sumber data" id="sumber-data" name="kondisi">
                                            </select>
                                        </div>
                                        <div class="col-md-4 d-flex flex-column mb-5 fv-row">
                                            <label class="fs-5 fw-bold mt-3 mb-3">Frekuensi</label>
                                            <input type="text" class="form-control" placeholder="Masukkan frekuensi" id="frekuensi" name="satuan" />
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mb-2 fv-row">
                                        <label class="fs-5 fw-bold mt-3 mb-3">Polaritas</label>
                                        {{-- <select class="form-select select-polaritas" data-control="select2" id="select-polaritas" name="param" style="width:100%">
                                        </select> --}}
                                        <select class="form-select" data-control="select2" data-hide-search="true" data-placeholder="Pilih Perspektif" name="perspektif">
                                            <option value="">Pilih polaritas...</option>
                                            <option value="1">Maximize</option>
                                            <option value="2">Minimize</option>
                                            <option value="3">Stabiize</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 fv-row">
                                            <label class="fs-5 fw-bold mt-3 mb-3">Unit Pengelola KPI</label>
                                            <input type="text" class="form-control" placeholder="Masukkan Pengelola KPI" id="satuan" name="satuan" />
                                        </div>
                                        <div class="col-md-4 d-flex flex-column mb-5 fv-row">
                                            <label class="fs-5 fw-bold mt-3 mb-3">Unit Pemilik KPI</label>
                                            <input type="text" class="form-control" placeholder="Masukkan unit pemilik KPI" id="frekuensi" name="satuan" />
                                        </div>
                                        <div class="col-md-4 d-flex flex-column mb-5 fv-row">
                                            <label class="fs-5 fw-bold mt-3 mb-3">Jenis Pengukuran</label>
                                            <input type="text" class="form-control" placeholder="Jenis Pengukuran" id="frekuensi" name="satuan" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10 fv-row">
                                            <label class="fs-5 fw-bold mb-2">Nilai</label>
                                        </div>
                                        <div class="col-md-2 d-flex mb-5 fv-row">
                                            <label class="fs-5 fw-bold me-2">Otomatis</label>
                                            <div class="form-check form-check-success form-check-solid form-switch fv-row mt-1">
                                                <input class="form-check-input w-35px h-20px" type="checkbox" id="allowmarketing" checked="checked" />
                                                <label class="form-check-label" for="allowmarketing"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <table id="kt_datatable_example_9" class="table gy-5 gs-7 px-10 table-row-bordered border rounded" id="dttb-master-">
                                        <thead>
                                            <tr class="fw-bolder fs-6 text-gray-800 px-7">
                                                <th>Nilai Ke</th>
                                                <th>Jenis</th>
                                                <th>Value</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Nilai 1</td>
                                                <td>
                                                    <select class="form-select form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Pilih jenis" name="jenis">
                                                        <option value="">Pilih jenis...</option>
                                                        <option value="1"><=</option>
                                                        <option value="2">>=</option>
                                                        <option value="3">>= x <=</option>
                                                        <option value="4">></option>
                                                        <option value="5"><</option>
                                                        <option value="6">=</option>
                                                    </select>
                                                </td>
                                                <td><input type="text" class="form-control form-control-sm" placeholder="Masukkan nilai" id="nilai" name="nilai" /></td>
                                            </tr>
                                            <tr>
                                                <td>Nilai 2</td>
                                                <td>
                                                    <select class="form-select form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Pilih jenis" name="jenis">
                                                        <option value="">Pilih jenis...</option>
                                                        <option value="1"><=</option>
                                                        <option value="2">>=</option>
                                                        <option value="3">>= x <=</option>
                                                        <option value="4">></option>
                                                        <option value="5"><</option>
                                                        <option value="6">=</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control form-control-sm achievment_min" placeholder="Mulai"/> &nbsp;<span class="fw-bolder mt-4">-</span>&nbsp; <input type="text" class="form-control form-control-sm achievment_max" placeholder="Akhir"/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nilai 3</td>
                                                <td>
                                                    <select class="form-select form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Pilih jenis" name="jenis">
                                                        <option value="">Pilih jenis...</option>
                                                        <option value="1"><=</option>
                                                        <option value="2">>=</option>
                                                        <option value="3">>= x <=</option>
                                                        <option value="4">></option>
                                                        <option value="5"><</option>
                                                        <option value="6">=</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control form-control-sm achievment_min" placeholder="Mulai"/> &nbsp;<span class="fw-bolder mt-4">-</span>&nbsp; <input type="text" class="form-control form-control-sm achievment_max" placeholder="Akhir"/>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nilai 4</td>
                                                <td>
                                                    <select class="form-select form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Pilih jenis" name="jenis">
                                                        <option value="">Pilih jenis...</option>
                                                        <option value="1"><=</option>
                                                        <option value="2">>=</option>
                                                        <option value="3">>= x <=</option>
                                                        <option value="4">></option>
                                                        <option value="5"><</option>
                                                        <option value="6">=</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="d-flex">
                                                        <input type="text" class="form-control form-control-sm achievment_min" placeholder="Mulai"/> &nbsp;<span class="fw-bolder mt-4">-</span>&nbsp; <input type="text" class="form-control form-control-sm achievment_max" placeholder="Akhir"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer flex-right">
                    <button data-bs-dismiss="modal" class="btn btn-light me-3">Batal</button>
                    <button type="button" id="btn-tambah" onclick="simpan()" class="btn btn-success">
                        <span class="indicator-label">Simpan</span>
                        <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('assets/extends/js/page/master-indikator.js')}}"></script>
    <script src="{{asset('assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
    <script>
        var options = {selector: "#kt_docs_tinymce_basic"};

        if (KTApp.isDarkMode()) {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>
@endsection
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
                        <h3 class="fw-bolder m-0">Notifikasi</h3>
                        <div class="text-gray-400 fw-bold fs-5 py-1">
                            Semua notifikasi pada aplikasi Key Performance Indicator
                        </div>
                    </div>
                </div>
                <div class="card-body px-15 pb-9 pt-9">
                    <div class="my-0">
                        <div class="d-flex align-items-center mb-8">
                            <div class="symbol symbol-35px me-4">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-0 me-2 fs-5 col-12">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                <div class="d-flex">
                                    <div class="text-gray-400 col-11">
                                        Permintaan perubahan data sudah disetujui
                                    </div>
                                    <div class="fw-bolder col-1">
                                        <span class="badge bg-secondary text-dark">12.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-8">
                            <div class="symbol symbol-35px me-4">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                <span class="svg-icon svg-icon-danger svg-icon-2hx">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                        <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-0 me-2 fs-5 col-12">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder mb-2">Ditolak</a>
                                <div class="d-flex">
                                    <div class="text-gray-400 col-11">
                                        Permintaan perubahan data ditolak
                                    </div>
                                    <div class="fw-bolder col-1">
                                        <span class="badge bg-secondary text-dark">12.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-8">
                            <div class="symbol symbol-35px me-4">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-0 me-2 fs-5 col-12">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                <div class="d-flex">
                                    <div class="text-gray-400 col-11">
                                        Permintaan perubahan data sudah disetujui
                                    </div>
                                    <div class="fw-bolder col-1">
                                        <span class="badge bg-secondary text-dark">12.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-8">
                            <div class="symbol symbol-35px me-4">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-0 me-2 fs-5 col-12">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                <div class="d-flex">
                                    <div class="text-gray-400 col-11">
                                        Permintaan perubahan data sudah disetujui
                                    </div>
                                    <div class="fw-bolder col-1">
                                        <span class="badge bg-secondary text-dark">12.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-8">
                            <div class="symbol symbol-35px me-4">
                                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="mb-0 me-2 fs-5 col-12">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                <div class="d-flex">
                                    <div class="text-gray-400 col-11">
                                        Permintaan perubahan data sudah disetujui
                                    </div>
                                    <div class="fw-bolder col-1">
                                        <span class="badge bg-secondary text-dark">12.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" id="btn-tambah" onclick="simpan()" class="btn btn-light-success">
                            <span class="indicator-label text-success">Muat Lainya</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
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
    <script src="assets/plugins/custom/tinymce/tinymce.bundle.js"></script>
    <script>
        var options = {selector: "#kt_docs_tinymce_basic"};

        if (KTApp.isDarkMode()) {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>
@endsection
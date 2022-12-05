@extends('layout.main')
@section('content')
<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="row mb-8">
            <div class="col-sm-2">
                {{-- <input type="text" class="form-control" id="tahun" placeholder="Pilih tahun"> --}}
                <input type="text" class="form-select" id="tahun" placeholder="Pilih tahun">
            </div>
            <div class="col-sm-2">
                {{-- <input type="text" class="form-control" id="bulan" placeholder="Pilih bulan"> --}}
                <input type="text" class="form-select" id="bulan" placeholder="Pilih bulan">
            </div>
            <div class="col-sm-2">
                <a href="{{asset('realisasi-kpi')}}" class="btn btn-success">Tampilkan</a>
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-warning"><i class="fas fa-print fs-4 me-2"></i> Export PDF</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="card card-flush h-lg-100">
                    <div class="card-header">
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">Objectives</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="position-relative d-flex flex-center h-100px w-100px me-2 mb-0">
                                <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                    <span class="fs-2qx fw-bolder">26</span>
                                </div>
                                <canvas id="project_overview_chart"></canvas>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-4 mb-0">
                                <div class="fw-bold fs-8 text-gray-400">No Update</div>
                                <div>
                                    <div class="fs-2 fw-bolder">1</div>
                                    <span class="badge badge-secondary mt-6">4%</span>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-4 mb-0">
                                <div class="fw-bold fs-8 text-gray-400">Off Track</div>
                                <div>
                                    <div class="fs-2 fw-bolder text-danger">5</div>
                                    <span class="badge badge-secondary mt-6">20%</span>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-4 mb-0">
                                <div class="fw-bold fs-8 text-gray-400">Progress</div>
                                <div>
                                    <div class="fs-2 fw-bolder text-warning">6</div>
                                    <span class="badge badge-secondary mt-6">23%</span>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-2 mb-0">
                                <div class="fw-bold fs-8 text-gray-400">On Track</div>
                                <div>
                                    <div class="fs-2 fw-bolder text-success">14</div>
                                    <span class="badge badge-secondary mt-6">54%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-header">
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">Key Result</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="position-relative d-flex flex-center h-100px w-100px me-2 mb-0">
                                <div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
                                    <span class="fs-2qx fw-bolder">189</span>
                                </div>
                                <canvas id="chart"></canvas>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-4 mb-3">
                                <div class="fw-bold fs-8 text-gray-400">No Update</div>
                                <div>
                                    <div class="fs-2 fw-bolder">7</div>
                                    <span class="badge badge-secondary mt-6">4%</span>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-4 mb-3">
                                <div class="fw-bold fs-8 text-gray-400">Off Track</div>
                                <div>
                                    <div class="fs-2 fw-bolder text-danger">36</div>
                                    <span class="badge badge-secondary mt-6">20%</span>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-4 mb-3">
                                <div class="fw-bold fs-8 text-gray-400">Progress</div>
                                <div>
                                    <div class="fs-2 fw-bolder text-warning">44</div>
                                    <span class="badge badge-secondary mt-6">23%</span>
                                </div>
                            </div>
                            <div class="col-sm-2 text-center border border-gray-300 border-dashed rounded py-3 px-4 me-2 mb-3">
                                <div class="fw-bold fs-8 text-gray-400">On Track</div>
                                <div>
                                    <div class="fs-2 fw-bolder text-success">102</div>
                                    <span class="badge badge-secondary mt-6">54%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-flush h-lg-100">
                <div class="card-header">
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">Monitoring KPI</h3>
                            <span class="fw-bold text-gray-600 fs-8">Status ditahun 2021 pada semua unit/divisi</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="position-relative d-flex flex-center h-200px w-200px me-5 mb-0">
                                <canvas id="pie"></canvas>
                            </div>
                            <div class="col mt-20">
                                <div class="col-12 d-flex fs-7 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-success h-10px w-10px me-3"></div>
                                    <div class="text-gray-400">Target Sudah Tercapai</div>
                                </div>
                                <div class="col-12 d-flex fs-7 fw-bold align-items-center mb-3">
                                    <div class="bullet bg-warning h-10px w-10px me-3"></div>
                                    <div class="text-gray-400">Target Belum Tercapai</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="post d-flex flex-column" id="kt_post">
                <div id="kt_content_container">
                    <form class="form">
                        <div class="card">
                            <div class="card-header mt-5">
                                <div class="row">
                                    <label for="" class="col-md-2 col-form-label">Tipe</label>
                                    <div class="col-md-4">
                                        <select id="" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">Semua</option>
                                            <option value="">Objectives</option>
                                            <option value="">Key Result</option>
                                        </select>
                                    </div>
                                    <label for="" class="col-md-2 col-form-label text-right">Status</label>
                                    <div class="col-md-4">
                                        <select id="" name="year" data-control="select2" data-hide-search="true" class="w-125px form-select form-select-solid form-select-sm">
                                            <option value="All" selected="selected">Semua</option>
                                            <option value="">No Update</option>
                                            <option value="">Off Track</option>
                                            <option value="">Progress</option>
                                            <option value="">On Track</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="" class="col-md-3 col-form-label">Sorting</label>
                                    <div class="col-md-5">
                                        <a onclick="bsp()" class="btn btn-outline btn-outline btn-outline-success btn-active-light-success">Terendah</a>
                                    </div>
                                    <div class="col-md-4">
                                        <a onclick="bsp()" class="btn btn-success">Tertinggi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="text-center rounded p-4 mb-6" style="border:2px dashed #e6e6e6">
                                    <div class="row">
                                        <div class="d-flex justify-content-between w-100 fs-4 fw-bolder mb-3">
                                            <span>Pengendalian Biaya Non Bahan Baku</span>
                                            <span class="badge badge-light-info fs-6">Objectives</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <div class="d-flex flex-column justify-content-between">
                                                <div class="d-flex justify-content-between w-100 fw-bolder mb-0">
                                                    <span class="fw-bold text-gray-600">Progress Pencapaian</span>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="col-11">
                                                        <div class="h-8px bg-light-success rounded mt-2 mb-3">
                                                            <div class="bg-success rounded h-10px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="col-1 fw-bolder fs-4 justify-content-between text-right">50%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <span class="fw-bold text-gray-600">Support</span><br>
                                                    <span class="fw-bold text-primary">5 Key Result</span>
                                                </div>
                                                <div class="col-sm-7 text-right">
                                                    <a class="btn btn-sm btn-icon btn-secondary me-5 "><i class="fas fa-chevron-down fs-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center rounded p-4" style="border:2px dashed #e6e6e6">
                                    <div class="row">
                                        <div class="d-flex justify-content-between w-100 fs-4 fw-bolder mb-3">
                                            <span>Collect more accurate sales lead data</span>
                                            <span class="badge badge-light-info fs-6">Objectives</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-9">
                                            {{-- <div class="d-flex flex-column justify-content-between">
                                                <div class="d-flex justify-content-between w-100 fw-bolder mb-3">
                                                    <span class="fw-bold text-gray-600">Progress Pencapaian</span>
                                                    <span class="d-flex flex-column fs-4 justify-content-between text-right">50%</span>
                                                </div>
                                                <div class="h-8px bg-light-success rounded mb-3">
                                                    <div class="bg-success rounded h-10px" role="progressbar" style="width: 30%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div> --}}
                                            <div class="d-flex flex-column justify-content-between">
                                                <div class="d-flex justify-content-between w-100 fw-bolder mb-0">
                                                    <span class="fw-bold text-gray-600">Progress Pencapaian</span>
                                                </div>
                                                <div class="d-flex">
                                                    <div class="col-11">
                                                        <div class="h-8px bg-light-success rounded mt-2 mb-3">
                                                            <div class="bg-success rounded h-10px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <span class="col-1 fw-bolder fs-4 justify-content-between text-right">50%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <span class="fw-bold text-gray-600">Support</span><br>
                                                    <span class="fw-bold text-primary">5 Key Result</span>
                                                </div>
                                                <div class="col-sm-7 text-right">
                                                    <a type="button" class="btn btn-sm btn-icon btn-secondary me-5" id="btnhide"><i class="fas fa-chevron-down fs-4"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="content">
                                        <div class="text-center rounded p-8 m-8 mt-6" style="border:2px dashed #e6e6e6">
                                            <div class="row">
                                                <div class="d-flex justify-content-between w-100 fs-4 fw-bolder mb-3">
                                                    <span>Release lead routing enhancements</span>
                                                    <span class="badge badge-light-primary fs-6">Key Result</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="d-flex flex-column justify-content-between">
                                                        <div class="d-flex justify-content-between w-100 fw-bolder mb-0">
                                                            <span class="fw-bold text-gray-600">Progress Pencapaian</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="col-10">
                                                                <div class="h-8px bg-light-success rounded mt-2 mb-3">
                                                                    <div class="bg-success rounded h-10px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <span class="col-2 fw-bolder fs-4 justify-content-between text-right">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="row">
                                                        <div class="col-sm-3 text-start">
                                                            <span class="fw-bold text-gray-600">Due</span><br>
                                                            <span class="fw-bold text-danger">31 Juni 2021</span>
                                                        </div>
                                                        <div class="col-sm-3 text-start">
                                                            <span class="fw-bold text-gray-600">Kontribusi</span><br>
                                                            <span class="fw-bold">25 %</span>
                                                        </div>
                                                        <div class="col-sm-6 text-start">
                                                            <span class="fw-bold text-gray-600">Unit</span><br>
                                                            <span class="fw-bold">Biro Sekretariat Perusahaan</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center rounded p-8 m-8 mt-6" style="border:2px dashed #e6e6e6">
                                            <div class="row">
                                                <div class="d-flex justify-content-between w-100 fs-4 fw-bolder mb-3">
                                                    <span>Create the list of lead metrics and scripted questions to collect in CRM</span>
                                                    <span class="badge badge-light-primary fs-6">Key Result</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-4">
                                                    <div class="d-flex flex-column justify-content-between">
                                                        <div class="d-flex justify-content-between w-100 fw-bolder mb-0">
                                                            <span class="fw-bold text-gray-600">Progress Pencapaian</span>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="col-10">
                                                                <div class="h-8px bg-light-success rounded mt-2 mb-3">
                                                                    <div class="bg-success rounded h-10px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <span class="col-2 fw-bolder fs-4 justify-content-between text-right">50%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8">
                                                    <div class="row">
                                                        <div class="col-sm-3 text-start">
                                                            <span class="fw-bold text-gray-600">Due</span><br>
                                                            <span class="fw-bold text-danger">31 Juni 2021</span>
                                                        </div>
                                                        <div class="col-sm-3 text-start">
                                                            <span class="fw-bold text-gray-600">Kontribusi</span><br>
                                                            <span class="fw-bold">25 %</span>
                                                        </div>
                                                        <div class="col-sm-6 text-start">
                                                            <span class="fw-bold text-gray-600">Unit</span><br>
                                                            <span class="fw-bold">Biro Sekretariat Perusahaan</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-bsp" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-950px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
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
            <div class="modal-body scroll-y mx-0 mx-xl-0 pt-0 pb-10">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-13">
                    <h1 class="mb-3">Biro Sekertariat Perusahaan</h1>
                    <div class="text-muted fw-bold fs-5">Terapkan bobot KPI</div>
                </div>
                <div class="d-flex ps-lg-15 px-2 py-0 m-0 mb-10">
                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                    <div class="col-6 mb-2 ps-0">
                        <h5 id="perspective-`+uuid+`">Laba Operasional (standalone)</h5>
                        <label class="text-gray-600">Indikator</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">Financial</h5>
                        <label class="text-gray-600">Aspek</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">%</h5>
                        <label class="text-gray-600">Satuan</label>
                    </div>
                </div>
                <div class="d-flex ps-lg-15 px-2 py-0 m-0 mb-15">
                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                    <div class="col-3 mb-2 ps-0">
                        <h5 id="perspective-`+uuid+`">< 70%</h5>
                        <label class="text-gray-600">Nilai 1</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">70% - 80%</h5>
                        <label class="text-gray-600">Nilai 2</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">80% - < 90%</h5>
                        <label class="text-gray-600">Nilai 3</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">90% - >= 100%</h5>
                        <label class="text-gray-600">Nilai 4</label>
                    </div>
                </div>
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_modal_create_app_stepper">
                    <div class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                        <div class="stepper-nav ps-lg-0">
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span>Silahkan pilih metode distribusi</span>
                                        </label>
                                        <div class="row">
                                            <div class="col-4 w-275px">
                                                <label onclick="fully()" id="fully" class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 ms-0 me-2 menu-form menu-1">
                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M12.4409 22C13.5455 22 14.4409 21.1046 14.4409 20C14.4409 18.8954 13.5455 18 12.4409 18C11.3364 18 10.4409 18.8954 10.4409 20C10.4409 21.1046 11.3364 22 12.4409 22Z" fill="black"/>
                                                        <path opacity="0.3" d="M9.04095 14.8L9.94095 16.1C10.6409 15.6 11.5409 15.3 12.4409 15.3C13.3409 15.3 14.2409 15.6 14.9409 16.1L15.8409 14.8C16.1409 14.3 16.0409 13.6 15.4409 13.4C14.5409 13 13.5409 12.7 12.4409 12.7C11.3409 12.7 10.3409 12.9 9.44095 13.4C8.84095 13.6 8.74095 14.3 9.04095 14.8Z" fill="black"/>
                                                        <path opacity="0.3" d="M3.14096 5.80005L4.04095 7.19995C6.44095 5.59995 9.34094 4.69995 12.4409 4.69995C15.5409 4.69995 18.4409 5.59995 20.8409 7.19995L21.7409 5.80005C22.0409 5.30005 21.8409 4.70002 21.3409 4.40002C18.7409 2.90002 15.6409 2 12.4409 2C9.24094 2 6.14095 2.90002 3.54095 4.40002C3.04095 4.70002 2.84096 5.30005 3.14096 5.80005Z" fill="black"/>
                                                        <path opacity="0.3" d="M6.14097 10.3L7.04096 11.7C8.64096 10.7 10.441 10.1 12.541 10.1C14.641 10.1 16.441 10.7 18.041 11.7L18.941 10.3C19.241 9.80005 19.141 9.10002 18.541 8.90002C16.741 7.90002 14.741 7.40002 12.541 7.40002C10.341 7.40002 8.34096 7.90002 6.54096 8.90002C5.94096 9.10002 5.74097 9.80005 6.14097 10.3Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-5 mt-2">
                                                        <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Fully Cascade</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-4 w-275px">
                                                <label onclick="partial()" id="partial" class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-2 menu-form menu-2">
                                                    <span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black"/>
                                                        <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-5 mt-2">
                                                        <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Partial Cascade</span>
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-4 w-275px">
                                                <label onclick="contributing()" id="contributing" class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-2 menu-form menu-3">
                                                    <span class="mt-5 svg-icon svg-icon-muted svg-icon-2hx">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6 7C7.10457 7 8 6.10457 8 5C8 3.89543 7.10457 3 6 3C4.89543 3 4 3.89543 4 5C4 6.10457 4.89543 7 6 7ZM6 9C3.79086 9 2 7.20914 2 5C2 2.79086 3.79086 1 6 1C8.20914 1 10 2.79086 10 5C10 7.20914 8.20914 9 6 9Z" fill="#B5B5C3"/>
                                                            <path opacity="0.3" d="M7 11.4649V17C7 18.1046 7.89543 19 9 19H15V21H9C6.79086 21 5 19.2091 5 17V8V7H7V8C7 9.10457 7.89543 10 9 10H15V12H9C8.27143 12 7.58835 11.8052 7 11.4649Z" fill="#B5B5C3"/>
                                                            <path d="M18 22C19.1046 22 20 21.1046 20 20C20 18.8954 19.1046 18 18 18C16.8954 18 16 18.8954 16 20C16 21.1046 16.8954 22 18 22ZM18 24C15.7909 24 14 22.2091 14 20C14 17.7909 15.7909 16 18 16C20.2091 16 22 17.7909 22 20C22 22.2091 20.2091 24 18 24Z" fill="#B5B5C3"/>
                                                            <path d="M18 13C19.1046 13 20 12.1046 20 11C20 9.89543 19.1046 9 18 9C16.8954 9 16 9.89543 16 11C16 12.1046 16.8954 13 18 13ZM18 15C15.7909 15 14 13.2091 14 11C14 8.79086 15.7909 7 18 7C20.2091 7 22 8.79086 22 11C22 13.2091 20.2091 15 18 15Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span>
                                                    <span class="ms-5 mt-2">
                                                        <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Contributing Cascade</span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-row-fluid py-lg-0 px-lg-0">
                        <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                            <div id="pilih-menu" class="text-center py-5 px-5">
                                <img src="{{asset('assets/media/illustrations/search.png')}}" alt="" class="mw-100 h-200px h-sm-200px" />
                                <p class="text-gray-400 fs-6 fw-bold py-7">Silahkan pilih menu untuk
                                <br />menampilkan data</p>
                            </div>
                            <div id="divisi" class="current d-none" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <div class="fv-row">
                                        <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                            <span>Silahkan pilih salah satu divisi berikut ini.</span>
                                        </label>
                                        <div class="mh-375px scroll-y me-n7 pe-7" id="list-unit">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input chk-bobot" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="1" />
                                                    </label>
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-warning fw-bold">BS</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Biro Sekertariat Perusahaan</a>
                                                    </div>
                                                </div>
                                                <div class="text-end col">
                                                    <label class="text-gray-600 fw-bolder">Target</label>
                                                    <h2 class="text-success">1000</h2>
                                                </div>
                                            </div>
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        </div>
                                        <div class="mh-375px scroll-y me-n7 pe-7" id="list-unit">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input chk-bobot" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="1" />
                                                    </label>
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-primary fw-bold">BS</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Biro SPI</a>
                                                    </div>
                                                </div>
                                                <div class="text-end col">
                                                    <label class="text-gray-600 fw-bolder">Target</label>
                                                    <h2 class="text-success">1000</h2>
                                                </div>
                                            </div>
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        </div>
                                        <div class="mh-375px scroll-y me-n7 pe-7" id="list-unit">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <label class="form-check form-check-custom form-check-solid me-5">
                                                        <input class="form-check-input chk-bobot" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="1" />
                                                    </label>
                                                    <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-warning fw-bold">DO</span>
                                                    </div>
                                                    <div class="ms-5">
                                                        <a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Direktorat Operasi</a>
                                                    </div>
                                                </div>
                                                <div class="text-end col">
                                                    <label class="text-gray-600 fw-bolder">Target</label>
                                                    <h2 class="text-success">1000</h2>
                                                </div>
                                            </div>
                                            <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="col mt-5">
                        <label class="text-gray-600">Sisa Target</label>
                        <h2>1000</h2>
                    </div>
                    <div class="justify-content-end pt-7">
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
    </div>
</div>

<script src="{{asset('assets/js/custom/apps/projects/project/project.js')}}"></script>
<script src="{{asset('assets/js/custom/apps/projects/list/chart.js')}}"></script>
<script>
    $( function() {
        $( "#tahun" ).datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years"
        });

        $( "#bulan" ).datepicker({
            format: "mm",
            viewMode: "months",
            minViewMode: "months"
        });

        $('#content').hide();
        $('#btnhide').click(function(){
            $('#content').slideToggle();
        });
    });
    $("#nav-dashboard").addClass("active");
    function bsp() {
        $("#modal-bsp").modal("show");
    }
</script>
@endsection
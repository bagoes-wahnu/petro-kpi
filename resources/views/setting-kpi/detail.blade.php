@extends('layout.main')
@section('content')

<style>
    ::-webkit-input-placeholder { /* Edge */
    font-weight: 400 !important;
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
      font-weight: 400 !important;
    }

    ::placeholder {
      font-weight: 400 !important;
    }

    .btn-darkblue{
        background-color:#2664A2;
        color:#fff;
    }

    .text-darkblue{
        color:#2664A2;
    }

    .props-warning.active{
        border:1px dashed #D9214E;
        background-color: #fff5f8;
    }

    .props-warning.active p{
        color:#D9214E !important;
    }
</style>

<div class="post d-flex flex-column-fluid" id="kt_post" style="flex-direction: column;">
    <div class="col-12 px-10 mb-6" style="margin-top: -2rem;" id="div-title">
        <p><span class="font-weight-bolder">Setting KPI</span> <span class="text-muted">| <a class="text-muted" style="cursor:pointer;" href="{{url('setting/kpi')}}">Tahun</a> - Setting</span> </p>
        <h1 class="title">TAHUN 2022</h1>
    </div>
    <div class="row mx-0 container-xxl">
        <div class="col-6 mb-5">
            <input type="button" style="width: 100%" class="active fs-3 fw-bolder text-dark btn btn-sm btn-secondary btn-active-warning btn-dttb-type me-3" id="btn-dttb-1" onclick="setting('1')" value="Setting Perspektif">
        </div>
        <div class="col-6 mb-5">
            <input type="button" style="width: 100%" class="fs-3 fw-bolder text-dark btn btn-sm btn-secondary btn-active-warning btn-dttb-type me-3" id="btn-dttb-2" onclick="setting('2')" value="Setting KPI">
        </div>
        {{-- <button class="btn btn-sm btn-outline btn-outline-solid btn-outline-warning btn-active-light-warning btn-dttb-type me-3" id="btn-dttb-3" onclick="dttbType('3')">Parameter</button> --}}
    </div>
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-flush mb-5 mb-xl-10" id="kt_profile_details_view">
            <div class="card-header">
                <div class="d-flex flex-column card-title m-0 py-5">
                    <h3 class="fw-bolder m-0">Setting KPI Korporat</h3>
                    <div class="text-gray-400 fw-bold fs-5 py-2 text-xs">
                        Pengaturan RAKP Korporat aplikasi Key Performance Indicator
                    </div>
                    {{-- <input type="hidden" id="id" value="{{$id}}"> --}}
                </div>
                <div class="div-filter mt-5">
                    <button type="button" class="btn btn-light-success me-5" onclick="simpan()">Simpan Draft</button>
                    <button type="button" class="btn btn-success" onclick="simpan()">Simpan</button>
                </div>
                <div id="setting-perspektif">
                    <div class="d-flex col-12 px-0 py-0 m-0" id="empty-handler">
                        <h3 class="fw-bolder m-0">Setting KPI Korporat</h3>
                    </div>
                    <div class="row col-12 mx-0" id="list-perspektif">
                        <div class="`+div_disabled+` row mx-0 p-4 my-5 border-dashed rounded div-parameter" id="parent-`+res[i]?.id+`">
                            <input type="hidden" name="targets[]" value="`+res[i]?.id+`"/>
                            <div class="col-4 mb-10 ps-0">
                                <label class="text-gray-600">Perspektif</label>
                                <select class="form-select select_parameter `+is_muted+`" data-control="select2" name="lbl-parameter" id="parameter-`+res[i]?.id+`" data-placeholder="Pilih perspektif" `+is_disabled+`>
                                    {{-- <option select="selected" value="`+res[i]?.parameter?.id+`">`+res[i]?.parameter?.parameter+`</option> --}}
                                </select>
                            </div>
                            <div class="col-2 mb-10 ps-0">
                                <label class="text-gray-600">Minimal Indikator</label>
                                <input id="nama-1" type="text" class="form-control" name="row-name" placeholder="Minimal" value="" />
                            </div>
                            <div class="col-2 mb-10 ps-0">
                                <label class="text-gray-600">Maksimal Indikator</label>
                                <input id="nama-1" type="text" class="form-control" name="row-name" placeholder="Maksimal" value="" />
                            </div>
                            <div class="col-2 mb-10 ps-0">
                                <label class="text-gray-600">Bobot Minimal</label>
                                <input id="nama-1" type="text" class="form-control" name="row-name" placeholder="Bobot minimal" value="" />
                            </div>
                            <div class="col-2 mb-10 ps-0">
                                <label class="text-gray-600">Bobot Maksimal</label>
                                <input id="nama-1" type="text" class="form-control" name="row-name" placeholder="Bobot maksimal" value="" />
                            </div>
                            {{-- <div class="col-1 mb-0 py-6">
                                <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+res[i]?.id+`')"><i class="bi bi-dash-lg"></i></button>
                            </div> --}}
                        </div>
                    </div>
                    <div class="d-flex col-12 px-0 py-0 m-0">
                        <button id="btn-empty" class="mb-5 btn btn-active-light-success btn-light-success" onclick="tambahPerspektif()"> <i class="bi bi-plus-lg me-3"></i>Tambah Perspektif</button>
                    </div>
                </div>
                <div id="setting-kpi" class="d-none">
                    <div id="list-indikator">
                        <div class="d-flex col-11 px-0 py-0 m-0">
                            <h1 class="fw-bold me-5 mt-20">#1</h1>
                            <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                <div class="col-7 mb-10 ps-0">
                                    <label class="text-gray-600">Indikator</label>
                                    <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                    </select>
                                </div>
                                <div class="col-2 mb-10">
                                    <label class="text-gray-600">Target</label>
                                    <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                </div>
                                <div class="col-2 mb-10">
                                    <label class="text-gray-600">Bobot</label>
                                    <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                </div>
                                <div class="col-1 mb-0 py-6">
                                    <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button>
                                </div>
                                
                                <div class="col-2 mb-2 ps-0">
                                    <label class="text-gray-600">Perspective</label>
                                    <h5 id="perspective-`+uuid+`">Financial</h5>
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-gray-600">Satuan</label>
                                    <h5 id="formula-`+uuid+`">%</h5>
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-gray-600">Nilai 1</label>
                                    <h5 id="st-`+uuid+`">< 70%</h5>
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-gray-600">Nilai 2</label>
                                    <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-gray-600">Nilai 3</label>
                                    <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                </div>
                                <div class="col-2 mb-2">
                                    <label class="text-gray-600">Nilai 4</label>
                                    <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                </div>
                        
                                <div class="col-12 row mx-0 px-0 mt-6">
                                    <div class="col-3 ps-0 py-3">
                                        <p class="text-muted">Unit dengan indikator sama</p>
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class=" col-8 px-0 py-0 m-0">
                            <button id="btn-empty" class="mb-5 btn btn-active-light-success btn-light-success" onclick="tambahIndikator()"> <i class="bi bi-plus-lg me-3"></i>Tambah Indikator</button>
                        </div>
                        <div class="row col-4">
                            <label class="text-gray-600 fw-bold fs-5">Total Bobot</label>
                            <span class="text-success fw-boldest fs-1">50</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="post d-flex flex-column-fluid d-none" id="kt_post_unit-create" style="flex-direction: column;">
    <div class="col-12 px-10 mb-6" style="margin-top: -2rem;" id="div-title">
        <p><span class="font-weight-bolder">Setting 2022</span> <span class="text-muted">| <a class="text-muted" style="cursor:pointer;" href="{{url('setting/kpi')}}">Tahun</a> - Setting</span> </p>
        <h1 class="title">Departemen Legal</h1>
    </div>
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-flush mb-5 mb-xl-10" id="kt_profile_details_view">
            <div class="card-header">
                <div class="d-flex flex-column card-title m-0 py-5">
                    <h3 class="fw-bolder m-0">Setting KPI</h3>
                    <div class="text-gray-400 fw-bold fs-5 py-2 text-xs">
                        Pengaturan KPI pada aplikasi Key Performance Indicator
                    </div>
                    {{-- <input type="hidden" id="id" value="{{$id}}"> --}}
                </div>
                <div class="d-flex flex-stack div-filter mt-5">
                    <div class="row text-center">
                        <label class="text-gray-600 fw-bold fs-6">Total Bobot</label>
                        <span class="text-success fw-boldest fs-2">100%</span>
                    </div>
                    <button type="button" class="btn btn-light-success me-5" onclick="simpan()">Simpan Draft</button>
                    <button type="button" class="btn btn-success" onclick="simpan()">Simpan</button>
                </div>
                <div id="setting-kpi">
                    <div id="list-indikator">
                        <div class="border-dashed rounded border-success p-5 mb-10">
                            <h3 class="fw-bol m-0">Turunan dari Pusat</h3>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#1</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="row mb-3">
                                        <div class="me-n7 pe-7 bg-light-success col-10">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-2" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Pengendalian Biaya Non Bahan Baku</a>
                                                </div>
                                                <div class="text-end">
                                                    <label class="text-gray-600 fw-bolder me-5">Target </label> <span class="fs-3 text-dark fw-boldest">1000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 ms-7">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600 mb-3">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600 mb-3">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600 mb-3">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        {{-- <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button> --}}
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#2</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="row mb-3">
                                        <div class="me-n7 pe-7 bg-light-success col-10">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-2" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Gap ROIC to WACC</a>
                                                </div>
                                                <div class="text-end">
                                                    <label class="text-gray-600 fw-bolder me-5">Target </label> <span class="fs-3 text-dark fw-boldest">700</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 ms-7">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600 mb-3">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600 mb-3">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600 mb-3">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        {{-- <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button> --}}
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#3</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="row mb-3">
                                        <div class="me-n7 pe-7 bg-light-success col-10">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-2" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Peningkatan AKHLAK Value Internalization Index</a>
                                                </div>
                                                <div class="text-end">
                                                    <label class="text-gray-600 fw-bolder me-5">Target </label> <span class="fs-3 text-dark fw-boldest">500</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 ms-7">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600 mb-3">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600 mb-3">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600 mb-3">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        {{-- <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button> --}}
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-dashed rounded border-warning p-5">
                            <h3 class="fw-bol m-0">Indikator Unit</h3>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#4</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button>
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                            
                                    <div class="col-12 row mx-0 px-0 mt-6">
                                        <div class="col-3 ps-0 py-3">
                                            <p class="text-muted">Unit dengan indikator sama</p>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <button id="btn-empty" class="mb-5 btn btn-active-light-success btn-light-success" onclick="tambahIndikator()">
                                    <span class="svg-icon svg-icon-suucess svg-icon-2qx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="black"/>
                                        <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="black"/>
                                        </svg>
                                    </span>
                                    Tambah Indikator
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="post d-flex flex-column-fluid d-none" id="kt_post_unit-returned" style="flex-direction: column;">
    <div class="col-12 px-10 mb-6" style="margin-top: -2rem;" id="div-title">
        <p><span class="font-weight-bolder">Setting 2022</span> <span class="text-muted">| <a class="text-muted" style="cursor:pointer;" href="{{url('setting/kpi')}}">Tahun</a> - Setting</span> </p>
        <h1 class="title">Departemen Legal</h1>
    </div>
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-flush mb-5 mb-xl-10" id="kt_profile_details_view">
            <div class="card-header">
                <div class="d-flex flex-column card-title m-0 py-5">
                    <h3 class="fw-bolder m-0">Setting KPI</h3>
                    <div class="text-gray-400 fw-bold fs-5 py-2 text-xs">
                        Pengaturan KPI pada aplikasi Key Performance Indicator
                    </div>
                    {{-- <input type="hidden" id="id" value="{{$id}}"> --}}
                </div>
                <div class="d-flex flex-stack div-filter mt-5">
                    <div class="row text-center">
                        <label class="text-gray-600 fw-bold fs-6">Total Bobot</label>
                        <span class="text-success fw-boldest fs-2">100%</span>
                    </div>
                    <button type="button" class="btn btn-light-success me-5" onclick="simpan()">Simpan Draft</button>
                    <button type="button" class="btn btn-success" onclick="simpan()">Simpan</button>
                </div>
                <div id="setting-kpi">
                    <div id="list-indikator">
                        <div class="border-dashed rounded border-success p-5 mb-10">
                            <h3 class="fw-bol m-0">Turunan dari Pusat</h3>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#1</h1>
                                <div class="col-12 bg-light-danger row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="row">
                                        <div class="me-n7 pe-7 bg-light-success col-10">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-2" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Pengendalian Biaya Non Bahan Baku</a>
                                                </div>
                                                <div class="text-end">
                                                    <label class="text-gray-600 fw-bolder me-5">Target </label> <span class="fs-3 text-dark fw-boldest">1000</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 ms-7">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        {{-- <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button> --}}
                                        <button class="btn btn-icon" onclick="rollback()">
                                            <span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black"/>
                                                <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black"/>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#2</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="row">
                                        <div class="me-n7 pe-7 bg-light-success col-10">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-2" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Gap ROIC to WACC</a>
                                                </div>
                                                <div class="text-end">
                                                    <label class="text-gray-600 fw-bolder me-5">Target </label> <span class="fs-3 text-dark fw-boldest">700</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 ms-7">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        {{-- <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button> --}}
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#3</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="row">
                                        <div class="me-n7 pe-7 bg-light-success col-10">
                                            <div class="rounded d-flex flex-stack bg-active-lighten p-2" data-user-id="0">
                                                <div class="d-flex align-items-center">
                                                    <a class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Peningkatan AKHLAK Value Internalization Index</a>
                                                </div>
                                                <div class="text-end">
                                                    <label class="text-gray-600 fw-bolder me-5">Target </label> <span class="fs-3 text-dark fw-boldest">500</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-2 ms-7">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        {{-- <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button> --}}
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-dashed rounded border-warning p-5">
                            <h3 class="fw-bol m-0">Indikator Unit</h3>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <h1 class="fw-bold me-5 mt-20">#4</h1>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>

                                    <div class="col-7 mb-10 ps-0">
                                        <label class="text-gray-600">Indikator</label>
                                        <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-`+uuid+`" data-placeholder="Pilih parameter">
                                        </select>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Target</label>
                                        <input type="text" class="form-control lbl-target" name="lbl-target" id="target-`+uuid+`" placeholder="Masukan target"/>
                                    </div>
                                    <div class="col-2 mb-10">
                                        <label class="text-gray-600">Bobot</label>
                                        <input type="text" class="form-control lbl-bobot" name="lbl-bobot" id="bobot-`+uuid+`" placeholder="Bobot"/>
                                    </div>
                                    <div class="col-1 mb-0 py-6">
                                        <button class="btn btn-danger btn-icon" onclick="deleteParameter('`+uuid+`')"><i class="bi bi-dash-lg"></i></button>
                                    </div>
                                    
                                    <div class="col-2 mb-2 ps-0">
                                        <label class="text-success">Perspective</label>
                                        <h5 id="perspective-`+uuid+`">Financial</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Satuan</label>
                                        <h5 id="formula-`+uuid+`">%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 1</label>
                                        <h5 id="st-`+uuid+`">< 70%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 2</label>
                                        <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 3</label>
                                        <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                    </div>
                                    <div class="col-2 mb-2">
                                        <label class="text-gray-600">Nilai 4</label>
                                        <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                    </div>
                            
                                    <div class="col-12 row mx-0 px-0 mt-6">
                                        <div class="col-3 ps-0 py-3">
                                            <p class="text-muted">Unit dengan indikator sama</p>
                                        </div>
                                        <div class="col-2">
                                            <button class="btn btn-light-warning btn-sm" onclick="modalUnitOpen('`+uuid+`')">Lihat Unit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <button id="btn-empty" class="mb-5 btn btn-active-light-success btn-light-success" onclick="tambahIndikator()">
                                    <span class="svg-icon svg-icon-suucess svg-icon-2qx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path opacity="0.3" d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="black"/>
                                        <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="black"/>
                                        </svg>
                                    </span>
                                    Tambah Indikator
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="post d-flex flex-column-fluid d-none" id="kt_post_direksi" style="flex-direction: column;">
    <div class="col-12 px-10 mb-6" style="margin-top: -2rem;" id="div-title">
        <p><span class="font-weight-bolder">Setting 2022</span> <span class="text-muted">| <a class="text-muted" style="cursor:pointer;" href="{{url('setting/kpi')}}">Tahun</a> - Setting</span> </p>
        <h1 class="title">Departemen Legal</h1>
        <div class="col-4 mt-5">
            <select class="form-select select_parameter" data-control="select2" name="lbl-parameter" id="parameter-1" data-placeholder="Pilih parameter">
            </select>
        </div>
    </div>
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-flush mb-5 mb-xl-10" id="kt_profile_details_view">
            <div class="card-header">
                <div class="d-flex flex-column card-title m-0 py-5">
                    <h3 class="fw-bolder m-0">Setting KPI</h3>
                    <div class="text-gray-400 fw-bold fs-5 py-2 text-xs">
                        Pengaturan KPI pada aplikasi Key Performance Indicator
                    </div>
                    {{-- <input type="hidden" id="id" value="{{$id}}"> --}}
                </div>
                <div id="setting-kpi">
                    <div id="list-indikator">
                        <label class="d-flex text-start ms-0 me-2 mb-10 w-275px">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input checkbox-setting" id="checkbox-kpi" type="checkbox" name="pic" value="1" onclick="selectAll()"/>
                            </span>
                            <span class="ms-5 mt-2">
                                <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Pilih Semua Indikator</span>
                            </span>
                        </label>
                        <div class="border-dashed rounded border-success p-5 mb-10 row">
                            <h3 class="fw-bol m-0">Turunan dari Pusat</h3>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <div class="flex-column">
                                    <label class="me-5 mt-20">
                                        <span class="fw-bolder fs-2">#1</span> 
                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                            <input class="form-check-input checkbox-setting" type="checkbox" name="pic" value="1"/>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-6 mb-10 ps-0">
                                                <label class="text-gray-600 mb-3">Parameter</label>
                                                <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                            </div>
                                            <div class="col-3 mb-10">
                                                <label class="text-gray-600 mb-3">Perspektif</label>
                                                <h5 id="perspective-`+uuid+`">Financial</h5>
                                            </div>
                                            <div class="col-3 mb-10">
                                                <label class="text-gray-600 mb-3">Satuan</label>
                                                <h5 id="formula-`+uuid+`">%</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 1</label>
                                                <h5 id="st-`+uuid+`">< 70%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 2</label>
                                                <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 3</label>
                                                <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 4</label>
                                                <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-0">
                                        <label style="cursor: pointer" onclick="modalHistory()" class="col-11 text-success text-end fw-bold fw-bolder fs-5 mb-5">Histori Indikator</label>
                                        <div class="d-flex">
                                            <div class="border-dashed rounded me-10 text-center row p-2">
                                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                                <span class="text-success fw-boldest fs-3">1000</span>
                                            </div>
                                            <div class="border-dashed rounded me-10 text-center row p-2">
                                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                                <span class="text-success fw-boldest fs-3">30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <div class="flex-column">
                                    <label class="me-5 mt-20">
                                        <span class="fw-bolder fs-2">#2</span> 
                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                            <input class="form-check-input checkbox-setting" type="checkbox" name="pic" value="1"/>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-6 mb-10 ps-0">
                                                <label class="text-gray-600 mb-3">Parameter</label>
                                                <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                            </div>
                                            <div class="col-3 mb-10">
                                                <label class="text-gray-600 mb-3">Perspektif</label>
                                                <h5 id="perspective-`+uuid+`">Financial</h5>
                                            </div>
                                            <div class="col-3 mb-10">
                                                <label class="text-gray-600 mb-3">Satuan</label>
                                                <h5 id="formula-`+uuid+`">%</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 1</label>
                                                <h5 id="st-`+uuid+`">< 70%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 2</label>
                                                <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 3</label>
                                                <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 4</label>
                                                <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-0">
                                        <label style="cursor: pointer" onclick="modalHistory()" class="col-11 text-success text-end fw-bold fw-bolder fs-5 mb-5">Histori Indikator</label>
                                        <div class="d-flex">
                                            <div class="border-dashed rounded me-10 text-center row p-2">
                                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                                <span class="text-success fw-boldest fs-3">1000</span>
                                            </div>
                                            <div class="border-dashed rounded me-10 text-center row p-2">
                                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                                <span class="text-success fw-boldest fs-3">30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-dashed rounded border-warning p-5 row">
                            <h3 class="fw-bol m-0">Indikator Unit</h3>
                            <div class="d-flex col-11 px-0 py-0 m-0">
                                <div class="flex-column">
                                    <label class="me-5 mt-20">
                                        <span class="fw-bolder fs-2">#3</span> 
                                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                            <input class="form-check-input checkbox-setting" type="checkbox" name="pic" value="1"/>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-12 row mx-0 p-4 my-8 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="col-6 mb-10 ps-0">
                                                <label class="text-gray-600 mb-3">Parameter</label>
                                                <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                            </div>
                                            <div class="col-3 mb-10">
                                                <label class="text-gray-600 mb-3">Perspektif</label>
                                                <h5 id="perspective-`+uuid+`">Financial</h5>
                                            </div>
                                            <div class="col-3 mb-10">
                                                <label class="text-gray-600 mb-3">Satuan</label>
                                                <h5 id="formula-`+uuid+`">%</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 1</label>
                                                <h5 id="st-`+uuid+`">< 70%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 2</label>
                                                <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 3</label>
                                                <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                            </div>
                                            <div class="col-3 mb-2">
                                                <label class="text-gray-600">Nilai 4</label>
                                                <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 mt-12">
                                        <div class="d-flex">
                                            <div class="border-dashed rounded me-10 text-center row p-2">
                                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                                <span class="text-success fw-boldest fs-3">1000</span>
                                            </div>
                                            <div class="border-dashed rounded me-10 text-center row p-2">
                                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                                <span class="text-success fw-boldest fs-3">30</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mt-5">
                            <div class="text-start col-10 px-0 py-0 m-0">
                                <div class="d-none" id="button-footer">
                                    <button type="button" id="btn-tambah" onclick="simpan()" class="btn btn-success">
                                        <span class="indicator-label">Approve</span>
                                        <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <button class="btn btn-light-warning ms-5" onclick="modalReturned()">
                                        Dikembalikan
                                    </button>
                                </div>
                            </div>
                            <div class="row col-2 text-start">
                                <label class="text-gray-600 fw-bold fs-5">Total Bobot</label>
                                <span class="text-success fw-boldest fs-1">100</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="list-modal">
    
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-hidden="true">
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

<div class="modal fade" id="modal-rollback" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-550px">
        <div class="modal-content">
            <div class="modal-header pb-0 border-0 justify-content-end">
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-10">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-13">
                    <h1 class="mb-3">Alasan Rollback</h1>
                    {{-- <div class="text-muted fw-bold fs-5">Silahkan ketik alasan mengapa pengajuan dirollback</div> --}}
                </div>
                {{-- <div>
                    <label for="note-rollback">Keterangan Rollback</label>
                    <textarea class="form-control" id="note-rollback" rows="3"></textarea>
                </div> --}}
                <div class="mx-0 p-2 my-0 mb-5 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                    {{-- <div class="col-12 mb-10 ps-0"> --}}
                        <h3 class="text-muted fw-bolder mb-5">Keterangan</h3>
                    {{-- </div> --}}
                    
                    {{-- <div class="col-2 mb-2 ps-0"> --}}
                        <span class="text-dark fs-5 fw-bold">Mohon koreksi ulang terkait pengisian realisasi, karena ada kesalahan saat pengisian</span>
                        {{-- <h5 id="perspective-`+uuid+`">Financial</h5> --}}
                    {{-- </div> --}}
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Tanggal</h3>
                            <span class="text-success fs-5 fw-bold">12 September 2022</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Oleh</h3>
                            <span class="text-success fs-5 fw-bold">Direksi</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                {{-- <button type="button" id="btn-simpan" class="btn btn-sm btn-darkblue" onclick="ajaxRollback()">
                    <span class="indicator-label">Simpan</span>
                    <span class="indicator-progress">Proses menyimpan...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button> --}}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-returned" tabindex="-1" aria-hidden="true">
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
                    <h1 class="mb-3">Pengembalian KPI</h1>
                    <div class="text-muted fw-bold fs-5">Silahkan ketik alasan mengapa pengajuan dikembalikan</div>
                </div>
                <h3 class="fw-bol m-0 mb-10">Indikator</h3>
                <div class="d-flex col-11 px-0 py-0 m-0">
                    <div class="flex-column">
                        <label class="me-5 mt-20">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input checkbox-setting" type="checkbox" name="pic" value="1"/>
                            </span>
                        </label>
                    </div>
                    <div class="col-12 row mx-0 p-4 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                        <input type="hidden" name="targets[]" value="`+uuid+`"/>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-6 mb-10 ps-0">
                                    <label class="text-gray-600 mb-3">Parameter</label>
                                    <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Perspektif</label>
                                    <h5 id="perspective-`+uuid+`">Financial</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Satuan</label>
                                    <h5 id="formula-`+uuid+`">%</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 1</label>
                                    <h5 id="st-`+uuid+`">< 70%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 2</label>
                                    <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 3</label>
                                    <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 4</label>
                                    <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-0">
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                <span class="text-success fw-boldest fs-3">1000</span>
                            </div>
                            <div class="border-dashed rounded me-0 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                <span class="text-success fw-boldest fs-3">30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 ms-10">
                    <label class="fs-5 fw-bold mt-3 mb-3">Keterangan Dikembalikan</label>
                    <textarea class="form-control" rows="3" name="target_details" placeholder="Contoh : data bobot kurang tepat"></textarea>
                </div>
                <div class="d-flex col-11 px-0 py-0 m-0">
                    <div class="flex-column">
                        <label class="me-5 mt-20">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input checkbox-setting" type="checkbox" name="pic" value="1"/>
                            </span>
                        </label>
                    </div>
                    <div class="col-12 row mx-0 p-4 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                        <input type="hidden" name="targets[]" value="`+uuid+`"/>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-6 mb-10 ps-0">
                                    <label class="text-gray-600 mb-3">Parameter</label>
                                    <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Perspektif</label>
                                    <h5 id="perspective-`+uuid+`">Financial</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Satuan</label>
                                    <h5 id="formula-`+uuid+`">%</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 1</label>
                                    <h5 id="st-`+uuid+`">< 70%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 2</label>
                                    <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 3</label>
                                    <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 4</label>
                                    <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-0">
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                <span class="text-success fw-boldest fs-3">1000</span>
                            </div>
                            <div class="border-dashed rounded me-0 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                <span class="text-success fw-boldest fs-3">30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 ms-10">
                    <label class="fs-5 fw-bold mt-3 mb-3">Keterangan Dikembalikan</label>
                    <textarea class="form-control" rows="3" name="target_details" placeholder="Contoh : data bobot kurang tepat"></textarea>
                </div>
                <div class="d-flex col-11 px-0 py-0 m-0">
                    <div class="flex-column">
                        <label class="me-5 mt-20">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input checkbox-setting" type="checkbox" name="pic" value="1"/>
                            </span>
                        </label>
                    </div>
                    <div class="col-12 row mx-0 p-4 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                        <input type="hidden" name="targets[]" value="`+uuid+`"/>
                        <div class="col-10">
                            <div class="row">
                                <div class="col-6 mb-10 ps-0">
                                    <label class="text-gray-600 mb-3">Parameter</label>
                                    <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Perspektif</label>
                                    <h5 id="perspective-`+uuid+`">Financial</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Satuan</label>
                                    <h5 id="formula-`+uuid+`">%</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 1</label>
                                    <h5 id="st-`+uuid+`">< 70%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 2</label>
                                    <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 3</label>
                                    <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 4</label>
                                    <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-0">
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                <span class="text-success fw-boldest fs-3">1000</span>
                            </div>
                            <div class="border-dashed rounded me-0 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                <span class="text-success fw-boldest fs-3">30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-11 ms-10">
                    <label class="fs-5 fw-bold mt-3 mb-3">Keterangan Dikembalikan</label>
                    <textarea class="form-control" rows="3" name="target_details" placeholder="Contoh : data bobot kurang tepat"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-end pt-7">
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

<div class="modal fade" id="modal-history" tabindex="-1" aria-hidden="true">
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
                    <h1 class="mb-3">Histori KPI</h1>
                    <div class="text-muted fw-bold fs-5">Perubahan indikator KPI dari pusat ke unit</div>
                </div>
                <div class="d-flex mb-10 px-0 py-0 m-0">
                    <div class="col-12 row mx-0 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                        <input type="hidden" name="targets[]" value="`+uuid+`"/>
                        <div class="col-10">
                            <div class="row p-4">
                                <div class="col-6 mb-10 ps-0">
                                    <label class="text-gray-600 mb-3">Parameter</label>
                                    <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Perspektif</label>
                                    <h5 id="perspective-`+uuid+`">Financial</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Satuan</label>
                                    <h5 id="formula-`+uuid+`">%</h5>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 1</label>
                                    <h5 id="st-`+uuid+`">< 70%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 2</label>
                                    <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 3</label>
                                    <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 4</label>
                                    <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-0">
                            <span id="btn-status" class="rounded-bottom btn btn-sm btn-warning position-relative ms-9 mb-2">
                                <span class="indicator-label fw-bolder fs-7">Unit</span>
                            </span>
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                <span class="text-success fw-boldest fs-3">1000</span>
                            </div>
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                <span class="text-success fw-boldest fs-3">30</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex ms-10 mb-10">
                    <hr class="col-5">
                    <span class="fw-bolder fs-5 me-1">
                        <span class="svg-icon svg-icon-success svg-icon-2hx">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black"/>
                                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black"/>
                            </svg>
                        </span>
                        Menjadi
                    </span>
                    <hr class="col-5">
                </div>
                <div class="d-flex mb-0 px-0 py-0 m-0">
                    <div class="col-12 row mx-0 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                        <input type="hidden" name="targets[]" value="`+uuid+`"/>
                        <div class="col-10">
                            <div class="row p-4">
                                <div class="col-6 mb-10 ps-0">
                                    <label class="text-gray-600 mb-3">Parameter</label>
                                    <h5 class="text-success" id="perspective-`+uuid+`">Cashflow From Operation (CFO)</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Perspektif</label>
                                    <h5 id="perspective-`+uuid+`">Financial</h5>
                                </div>
                                <div class="col-3 mb-10">
                                    <label class="text-gray-600 mb-3">Satuan</label>
                                    <h5 id="formula-`+uuid+`">%</h5>
                                </div>
                            </div>
                            <div class="row p-4">
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 1</label>
                                    <h5 id="st-`+uuid+`">< 70%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 2</label>
                                    <h5 id="st-`+uuid+`">70% - < 80%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 3</label>
                                    <h5 id="st-`+uuid+`">80% - < 90%</h5>
                                </div>
                                <div class="col-3 mb-2">
                                    <label class="text-gray-600">Nilai 4</label>
                                    <h5 id="st-`+uuid+`">90% - >= 100%</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-2 mt-0">
                            <span id="btn-status" class="rounded-bottom btn btn-sm btn-warning position-relative ms-9 mb-2">
                                <span class="indicator-label fw-bolder fs-7">Pusat</span>
                            </span>
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Target</label>
                                <span class="text-success fw-boldest fs-3">1000</span>
                            </div>
                            <div class="border-dashed rounded me-0 mb-2 text-center row p-2">
                                <label class="text-gray-600 fw-bold fs-3">Bobot</label>
                                <span class="text-success fw-boldest fs-3">30</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-end pt-7">
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

<script src="{{asset('assets/extends/js/page/setting-kpi-detail.js')}}"></script>

@endsection

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
        </div>
        <div class="row mx-0 container-xxl">
            <div class="col-6 mb-5">
                <input type="button" style="width: 100%" class="active fs-3 fw-bolder text-dark btn btn-sm btn-secondary btn-active-warning btn-dttb-type me-3" id="btn-dttb-1" onclick="dashboard('1')" value="Detail KPI">
            </div>
            <div class="col-6 mb-5">
                <input type="button" style="width: 100%" class="fs-3 fw-bolder text-dark btn btn-sm btn-secondary btn-active-warning btn-dttb-type me-3" id="btn-dttb-2" onclick="dashboard('2')" value="Monitoring KPI">
            </div>
        </div>
        <div id="detail-kpi" class="row">
            <div class="col-lg-3 mb-10">
                <div class="card card-flush h-lg-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="fw-bolder mb-0">Total KPI Anda</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mb-10">
                            <span class="fw-bolder fs-1">Direksi</span>
                        </div>
                        <h4 class="fw-bolder mb-3">Total KPI</h4>
                        <div class="row text-center">
                            <div class="col-12 mb-3 border border-gray-300 border-dashed rounded py-3 px-1 me-2 mb-0">
                                <div class="fs-2 fw-bolder">119</div>
                                <div class="fw-bold fs-8 text-gray-400">KPI</div>
                            </div>
                        </div>
                        <h4 class="fw-bolder mb-3">Status Approval</h4>
                        <div class="row">
                            <div class="col-12 mb-3 border border-gray-300 border-dashed rounded py-3 px-2 me-2 mb-0">
                                <div class="fs-2 fw-bolder text-success">119</div>
                                <div class="fw-bold fs-8 text-gray-400">Sudah</div>
                            </div>
                            <div class="col-5 border border-gray-300 border-dashed rounded py-3 px-2 me-2 mb-0">
                                <div class="fs-2 fw-bolder text-danger">12</div>
                                <div class="fw-bold fs-8 text-gray-400">Belum</div>
                            </div>
                            <div class="col-5 border border-gray-300 border-dashed rounded py-3 px-2 me-2 mb-0">
                                <div class="fs-2 fw-bolder text-warning">4</div>
                                <div class="fw-bold fs-8 text-gray-400">Draft</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mb-10">
                <div class="card card-flush h-lg-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="fw-bolder mb-1">Total KPI Anda</h3>
                        </div>
                    </div>
                    <div class="card-body ms-0 p-3">
                        <table class="p-1 table table-rounded border table-row-bordered table-row-gray-300 align-middle gy-2 " id="" style="width:100%">
                            <thead>
                                <tr class="text-center fs-7" style="font-weight: bolder;text-transform:uppercase;">
                                    <th rowspan="2" colspan="2" style="width:33%">RINGKASAN KPI</th>
                                    <th colspan="4" style="width:34%">ATURAN</th>
                                    <th rowspan="2" colspan="6" style="width:33%">DETAIL KPI</th>
                                </tr>
                                <tr class="text-center fs-8" style="font-weight: bolder;text-transform:uppercase;">
                                    <th colspan="2" style="width:17%">JUMLAH</th>
                                    <th colspan="2" style="width:17%">BOBOT</th>
                                </tr>
                                <tr class="text-center fs-8" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:8%">PERSPEKTIF</th>
                                    <th style="width:8%">PROGRESS</th>
                                    <th style="width:8%">MIN</th>
                                    <th style="width:8%">MAX</th>
                                    <th style="width:8%">MIN</th>
                                    <th style="width:8%">MAX</th>
                                    <th style="width:8%">Submitted</th>
                                    <th style="width:8%">Draft</th>
                                    <th style="width:8%">Waiting</th>
                                    <th style="width:8%">Approval</th>
                                    <th style="width:8%">Jumlah</th>
                                    <th style="width:8%">Total Bobot</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td>Financial</td>
                                    <td class="text-end">20%</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">6</td>
                                    <td class="text-end">6</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Customer</td>
                                    <td class="text-end">30%</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Internal</td>
                                    <td class="text-end">100%</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">5</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">10</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Learning <br> Growth</td>
                                    <td class="text-end">10%</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">4</td>
                                    <td class="text-end">25</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr class="text-center fs-8" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:8.30%">TOTAL</th>
                                    <th class="text-end" style="width:8.30%">40%</th>
                                    <th style="width:8.30%">9</th>
                                    <th style="width:8.30%">20</th>
                                    <th colspan="2" style="width:8.30%">100,00</th>
                                    <th class="text-end" style="width:8.30%">10</th>
                                    <th class="text-end" style="width:8.30%">2</th>
                                    <th class="text-end" style="width:8.30%">2</th>
                                    <th class="text-end" style="width:8.30%">7</th>
                                    <th class="text-end" style="width:8.30%">22</th>
                                    <th class="text-end" style="width:8.30%">100</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-10">
                <div class="card card-flush">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="fw-bolder mb-0">Total KPI Team</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center row">
                            <div class="mb-10 col-2">
                                <span class="fw-bolder fs-1">Team</span>
                            </div>
                            <div class=" col-2 text-center">
                                <h5 class="fw-bolder mb-3">Total KPI Team</h5>
                                <div class="mb-3 border border-gray-300 border-dashed rounded py-3 px-1 me-2 mb-0">
                                    <div class="fs-2 fw-bolder">120</div>
                                    <div class="fw-bold fs-8 text-gray-400">KPI</div>
                                </div>
                            </div>
                            <div class=" col-2">
                                <h5 class="fw-bolder mb-3">Tugas Approval</h5>
                                <div class="mb-3 border border-gray-300 border-dashed rounded py-3 px-3 me-2 mb-0">
                                    <div class="fs-2 fw-bolder">120</div>
                                    <div class="fw-bold fs-8 text-gray-400">Submitted</div>
                                </div>
                            </div>
                            <div class=" col-2">
                                <div class="mt-5 border border-gray-300 border-dashed rounded py-3 px-3 me-2 mb-0">
                                    <div class="fs-2 fw-bolder text-warning">4</div>
                                    <div class="fw-bold fs-8 text-gray-400">Draft</div>
                                </div>
                            </div>
                            <div class=" col-2">
                                <div class="mt-5 border border-gray-300 border-dashed rounded py-3 px-3 me-2 mb-0">
                                    <div class="fs-2 fw-bolder text-info">16</div>
                                    <div class="fw-bold fs-8 text-gray-400">Waiting</div>
                                </div>
                            </div>
                            <div class=" col-2">
                                <div class="mt-5 border border-gray-300 border-dashed rounded py-3 px-3 me-2 mb-0">
                                    <div class="fs-2 fw-bolder text-success">100</div>
                                    <div class="fw-bold fs-8 text-gray-400">Approval</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-8">
                <h3 class="fw-bolder mb-0">Filter Unit</h3>
                <div class="col-sm-6">
                    <input class="form-control" value="APV admin, APV Remunerasi" id="kt_tagify_7"/>
                </div>
                <div class="col-sm-2">
                    <a href="{{asset('realisasi-kpi')}}" class="btn btn-warning">Tampilkan</a>
                </div>
            </div>
            <div class="col-lg-12 mb-10">
                <div class="card card-flush h-lg-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="fw-bolder mb-1">KPI AVP Admin</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="p-3 table table-rounded border table-row-bordered table-row-gray-300 align-middle gy-2 " id="" style="width:100%">
                            <thead>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th rowspan="2" colspan="2" style="width:33%">RINGKASAN KPI</th>
                                    <th colspan="4" style="width:34%">ATURAN</th>
                                    <th rowspan="2" colspan="6" style="width:33%">DETAIL KPI</th>
                                </tr>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th colspan="2" style="width:17%">JUMLAH</th>
                                    <th colspan="2" style="width:17%">BOBOT</th>
                                </tr>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:8%">PERSPEKTIF</th>
                                    <th style="width:8%">PROGRESS</th>
                                    <th style="width:8%">MIN</th>
                                    <th style="width:8%">MAX</th>
                                    <th style="width:8%">MIN</th>
                                    <th style="width:8%">MAX</th>
                                    <th style="width:8%">Submitted</th>
                                    <th style="width:8%">Draft</th>
                                    <th style="width:8%">Waiting</th>
                                    <th style="width:8%">Approval</th>
                                    <th style="width:8%">Jumlah</th>
                                    <th style="width:8%">Total Bobot</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td>Financial</td>
                                    <td class="text-end">20%</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">6</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Customer</td>
                                    <td class="text-end">30%</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">6</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Internal</td>
                                    <td class="text-end">100%</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">8</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">8</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">4</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">18</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Learning <br> Growth</td>
                                    <td class="text-end">10%</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">4</td>
                                    <td class="text-end">25</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:8.30%">TOTAL</th>
                                    <th class="text-end" style="width:8.30%">40%</th>
                                    <th style="width:8.30%">9</th>
                                    <th style="width:8.30%">20</th>
                                    <th colspan="2" style="width:8.30%">100,00</th>
                                    <th class="text-end" style="width:8.30%">16</th>
                                    <th class="text-end" style="width:8.30%">7</th>
                                    <th class="text-end" style="width:8.30%">6</th>
                                    <th class="text-end" style="width:8.30%">4</th>
                                    <th class="text-end" style="width:8.30%">34</th>
                                    <th class="text-end" style="width:8.30%">100</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mb-10">
                <div class="card card-flush h-lg-100">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="fw-bolder mb-1">KPI AVP Remunerasi</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="p-3 table table-rounded border table-row-bordered table-row-gray-300 align-middle gy-2 " id="" style="width:100%">
                            <thead>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th rowspan="2" colspan="2" style="width:33%">RINGKASAN KPI</th>
                                    <th colspan="4" style="width:34%">ATURAN</th>
                                    <th rowspan="2" colspan="6" style="width:33%">DETAIL KPI</th>
                                </tr>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th colspan="2" style="width:17%">JUMLAH</th>
                                    <th colspan="2" style="width:17%">BOBOT</th>
                                </tr>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:8%">PERSPEKTIF</th>
                                    <th style="width:8%">PROGRESS</th>
                                    <th style="width:8%">MIN</th>
                                    <th style="width:8%">MAX</th>
                                    <th style="width:8%">MIN</th>
                                    <th style="width:8%">MAX</th>
                                    <th style="width:8%">Submitted</th>
                                    <th style="width:8%">Draft</th>
                                    <th style="width:8%">Waiting</th>
                                    <th style="width:8%">Approval</th>
                                    <th style="width:8%">Jumlah</th>
                                    <th style="width:8%">Total Bobot</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td>Financial</td>
                                    <td class="text-end">20%</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">6</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Customer</td>
                                    <td class="text-end">30%</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">3</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">6</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Internal</td>
                                    <td class="text-end">100%</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">8</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">8</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">4</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">18</td>
                                    <td class="text-end">25</td>
                                </tr>

                                <tr>
                                    <td>Learning <br> Growth</td>
                                    <td class="text-end">10%</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">5,00</td>
                                    <td class="text-center">50,00</td>
                                    <td class="text-end">2</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">1</td>
                                    <td class="text-end">0</td>
                                    <td class="text-end">4</td>
                                    <td class="text-end">25</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr class="text-center fs-6" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:8.30%">TOTAL</th>
                                    <th class="text-end" style="width:8.30%">40%</th>
                                    <th style="width:8.30%">9</th>
                                    <th style="width:8.30%">20</th>
                                    <th colspan="2" style="width:8.30%">100,00</th>
                                    <th class="text-end" style="width:8.30%">16</th>
                                    <th class="text-end" style="width:8.30%">7</th>
                                    <th class="text-end" style="width:8.30%">6</th>
                                    <th class="text-end" style="width:8.30%">4</th>
                                    <th class="text-end" style="width:8.30%">34</th>
                                    <th class="text-end" style="width:8.30%">100</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div id="monitoring-kpi" class="row d-none">
            <div class="col-lg-12">
                <div class="card card-flush h-lg-100">
                <div class="card-header">
                        <div class="card-title flex-column">
                            <h3 class="fw-bolder mb-1">Monitoring KPI</h3>
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
    </div>
</div>

<script src="{{asset('assets/js/custom/apps/projects/project/project.js')}}"></script>
{{-- <script src="{{asset('assets/js/custom/apps/projects/list/chart.js')}}"></script> --}}
<script>
    var input7 = document.querySelector("#kt_tagify_7");
    new Tagify(input7, {
        whitelist: ["APV admin", "APV Remunerasi"],
        maxTags: 10,
        dropdown: {
            maxItems: 20,           // <- mixumum allowed rendered suggestions
            classname: "", // <- custom classname for this dropdown, so it could be targeted
            enabled: 0,             // <- show suggestions on focus
            closeOnSelect: false    // <- do not hide the suggestions dropdown once an item has been selected
        }
    });

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
    function dashboard(param){
    if (param == 1) {
        $('#detail-kpi').removeClass('d-none')
        $('#monitoring-kpi').addClass('d-none')
        $('#btn-dttb-1').addClass('active')
        $('#btn-dttb-2').removeClass('active')
    } else if (param == 2){
        $('#monitoring-kpi').removeClass('d-none')
        $('#detail-kpi').addClass('d-none')
        $('#btn-dttb-1').removeClass('active')
        $('#btn-dttb-2').addClass('active')
    }
}
</script>
@endsection
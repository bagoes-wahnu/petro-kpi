@extends('layout.main')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card card-flush mx-5">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label mt-5">Report Progress Ketercapaian KPI</span>
                            <span class="text-muted mt-2 fw-bold fs-7">Menu Cetak Progress Ketercapaian KPI pada aplikasi Key Performance Indicator</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container col-md-6">
                            <div class="card-toolbar">
                                <ul class="nav row mb-8">
                                    <div class="row" data-kt-buttons="true" data-kt-buttons-target="[data1-kt-button='true']">
                                        <label for="" class="col-2 col-form-label">Tipe</label>
                                        <div class="col-4">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex menu-form menu-1" data-bs-toggle="tab" href="#kt_widget_tab_1" data1-kt-button="true">
                                                <span class="me-2 form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input menu-1" type="radio" name="finance_usage" value="1" checked="checked"/>
                                                </span>
                                                <span class="me-2">
                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">Posisi</span>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="col-6">
                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex menu-form menu-3" data-bs-toggle="tab" href="#kt_widget_tab_2" data1-kt-button="true">
                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                    <input class="form-check-input menu-3" type="radio" name="finance_usage" value="2"/>
                                                </span>
                                                <span class="ms-2">
                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">Karyawan</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active menu-form" id="kt_widget_tab_1">
                                    <input type="hidden" id="id" value="">
                                    <div class="row mb-8">
                                        <label for="" class="col-sm-4 col-form-label">Periode</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun" placeholder="Pilih periode">
                                        </div>
                                    </div>
                                    <div class="row mb-8">
                                        <label for="" class="col-sm-4 col-form-label">Posisi</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="" placeholder="Pilih posisi">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <label for="" class="col-sm-4 col-form-label">Format Export</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" data-control="select2" data-placeholder="Select an option" data-hide-search="true" >
                                                <option value="PDF" selected>PDF</option>
                                                <option value="EXCELL">EXCELL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 text-right">
                                            <a href="{{ asset('report/ketercapain-kpi/preview') }}" class="btn btn-light-success">Preview</a>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="" class="btn btn-success"><i class="fas fa-print"></i>Export Hasil</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade menu-form" id="kt_widget_tab_2">
                                    <input type="hidden" id="id" value="">
                                    <div class="form-group row mb-8">
                                        <label for="" class="col-sm-4 col-form-label">Periode</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="tahun2" placeholder="Pilih periode">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-8">
                                        <label for="" class="col-sm-4 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="" placeholder="Pilih NIK">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="" class="col-sm-4 col-form-label">Format Export</label>
                                        <div class="col-sm-8">
                                            <select class="form-select" data-control="select2" data-placeholder="Select an option" data-hide-search="true" >
                                                <option value="PDF" selected>PDF</option>
                                                <option value="EXCELL">EXCELL</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 text-right">
                                            <a href="{{ asset('report/ketercapain-kpi/preview') }}" class="btn btn-light-success">Preview</a>
                                        </div>
                                        <div class="col-sm-6 text-right">
                                            <a href="" class="btn btn-success"><i class="fas fa-print"></i>Export Hasil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
       $(document).ready(function(){
            $( "#tahun" ).datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years"
            });
            $( "#tahun2" ).datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years"
            });
        });
    </script>
@endsection
@extends('layout.main')
@section('content')
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="card card-flush mb-5 mb-xl-10" id="">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label mt-5">Report VAM KPI</span>
                            <span class="text-muted mt-2 fw-bold fs-7">Menu Cetak VAM KPI pada aplikasi Key Performance Indicator</span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container col-md-5">
                            <form>
                                <div class="form-group row mb-8">
                                    <label for="" class="col-sm-4 col-form-label">Periode</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="tahun" placeholder="Pilih periode">
                                    </div>
                                </div>
                                <div class="form-group row mb-8">
                                    <label for="" class="col-sm-4 col-form-label">Posisi</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" data-control="select2" data-placeholder="Pilih posisi">
                                            <option></option>
                                            <option value="1">Semua</option>
                                            <option value="2">Manager</option>
                                            <option value="3">Direksi</option>
                                            <option value="4">Staff</option>
                                            <option value="5">Intership</option>
                                            <option value="6">Volunteer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-4 col-form-label">Format Export</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" data-control="select2" data-hide-search="true" >
                                            <option value="PDF" selected>PDF</option>
                                            <option value="EXCELL">EXCELL</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 text-right">
                                        <a href="{{ asset('report/vam-kpi/preview') }}" class="btn btn-light-success">Preview</a>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <a href="" class="btn btn-success"><i class="fas fa-print"></i>Export Hasil</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $( function() {
            $( "#tahun" ).datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years"
            });
        });
    </script>
@endsection
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

</style>

<div class="post d-flex flex-column-fluid" id="kt_post">
    <div id="kt_content_container" class="container-xxl">
        <div class="card card-flush mb-5 mb-xl-10" id="kt_profile_details_view">
            <div class="card-header">
                <div class="d-flex flex-column card-title m-0 py-5">
                    <h3 class="fw-bolder m-0">Realisasi KPI</h3>
                    <div class="text-gray-400 fw-bold fs-5 py-2 text-xs">
                        Silahkan mengisi form berikut untuk 
                    </div>
                </div>
                <div class="d-flex flex-row m-0"></div>
            </div>
            <div class="card-body pt-9">
                <div class="kt-portlet__body pb-10">
                    <div class="col-md-12 row m-0">
                        <div class="col-md-4 px-2" id="div-filter-divisi">
                            <select class="form-select form-filter" id="divisi" data-control="select2" data-placeholder="Pilih divisi"></select>
                        </div>
                        <div class="col-md-2 px-2" id="div-filter-tahun">
                            <select class="form-select form-filter" id="tahun" data-control="select2" data-placeholder="Pilih tahun"> </select>
                        </div>
                        <div class="col-md-3 px-2">
                            <button style="cursor: pointer" type="button" id="btn-filter" class="btn btn-warning" onclick="show()">
                                <span class="indicator-label">Tampilkan</span>
                                <span class="indicator-progress">Proses...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <div class="col-md-1 ps-0"></div>
                        <div class="col-md-2 ps-0">
                            {{-- <input type="text" class="form-control" id="bulan" placeholder="Pilih Bulan" readonly/> --}}
                            <select class="form-select form-filter" id="bulan" data-control="select2" data-placeholder="Pilih bulan"> </select>
                        </div>
                    </div>

                    <div class="col-md-12 mt-10 d-none" id="div-isi">
                        <table class="table table-row-bordered  table-row-gray-300 align-middle gy-4" id="admin" style="width:100%">
                            <thead>
                                <tr class="text-center" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:5%">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input" type="checkbox" id="chk-select-all" onclick="selectAll()"/>
                                        </div>
                                    </th>
                                    <th style="width:20%">PERSPEKTIF / INDIKATOR</th>
                                    <th style="width:10%">SATUAN</th>
                                    <th style="width:10%">POLARITAS / SUMBER DATA</th>
                                    <th style="width:10%">Kategori Nilai</th>
                                    <th style="width:8.33%">TARGET</th>
                                    <th style="width:8.33%">BOBOT</th>
                                    <th style="width:8.33%">REAL</th>
                                    <th style="width:8.33%">STATUS</th>
                                    <th style="width:8.33%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> <span class="badge badge-light-danger" >Ditolak</span> </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="penolakan()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96143 16.5533V10.45C6.79143 10.45 5.02393 8.68245 5.02393 6.51245C5.02393 4.34245 6.79143 2.57495 8.96143 2.57495H13.5989V16.5533H12.2339V3.93995H10.3439V16.5533H8.96143Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Alasan Penolakan</span></a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> <span class="badge badge-secondary" >Perlu approval</span> </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="simpan()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.7817 5.29361C15.0798 4.94294 15.6057 4.9003 15.9564 5.19837C16.307 5.49644 16.3497 6.02235 16.0516 6.37303L8.96827 14.7064C8.66551 15.0625 8.12907 15.1001 7.77968 14.7895L4.02968 11.4562C3.68569 11.1504 3.65471 10.6237 3.96047 10.2797C4.26624 9.9357 4.79297 9.90472 5.13695 10.2105L8.25016 12.9778L14.7817 5.29361Z" fill="#7E8299"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Approve Permintaan</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="reject()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.5356 5.28592L5.28603 13.5355C4.9606 13.8609 4.9606 14.3886 5.28603 14.714C5.61147 15.0394 6.13911 15.0394 6.46454 14.714L14.7141 6.46443C15.0396 6.13899 15.0396 5.61136 14.7141 5.28592C14.3887 4.96048 13.861 4.96048 13.5356 5.28592Z" fill="#7E8299"/>
                                                        <path opacity="0.3" d="M14.7138 13.5356L6.46426 5.28603C6.13882 4.9606 5.61118 4.9606 5.28574 5.28603C4.96031 5.61147 4.96031 6.13911 5.28574 6.46454L13.5353 14.7141C13.8608 15.0396 14.3884 15.0396 14.7138 14.7141C15.0393 14.3887 15.0393 13.861 14.7138 13.5356Z" fill="#7E8299"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Tolak Permintaan</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="setNilai()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 2.5H14.1667C16.0076 2.5 17.5 3.99238 17.5 5.83333C17.5 7.67428 16.0076 9.16667 14.1667 9.16667H5.83333C3.99238 9.16667 2.5 7.67428 2.5 5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5ZM5.83333 7.5C6.75381 7.5 7.5 6.75381 7.5 5.83333C7.5 4.91286 6.75381 4.16667 5.83333 4.16667C4.91286 4.16667 4.16667 4.91286 4.16667 5.83333C4.16667 6.75381 4.91286 7.5 5.83333 7.5Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 10.8333H14.1667C16.0076 10.8333 17.5 12.3256 17.5 14.1666C17.5 16.0075 16.0076 17.4999 14.1667 17.4999H5.83333C3.99238 17.4999 2.5 16.0075 2.5 14.1666C2.5 12.3256 3.99238 10.8333 5.83333 10.8333ZM14.1667 15.8333C15.0871 15.8333 15.8333 15.0871 15.8333 14.1666C15.8333 13.2461 15.0871 12.4999 14.1667 12.4999C13.2462 12.4999 12.5 13.2461 12.5 14.1666C12.5 15.0871 13.2462 15.8333 14.1667 15.8333Z" fill="#B5B5C3"/>
                                                        </svg>

                                                    </span> 
                                                    <span> Setting Nilai</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="realisasi()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 4.16675H16.25C16.9404 4.16675 17.5 4.72639 17.5 5.41675C17.5 6.1071 16.9404 6.66675 16.25 6.66675H8.75C8.05964 6.66675 7.5 6.1071 7.5 5.41675C7.5 4.72639 8.05964 4.16675 8.75 4.16675ZM8.75 8.33342H16.25C16.9404 8.33342 17.5 8.89306 17.5 9.58342C17.5 10.2738 16.9404 10.8334 16.25 10.8334H8.75C8.05964 10.8334 7.5 10.2738 7.5 9.58342C7.5 8.89306 8.05964 8.33342 8.75 8.33342ZM8.75 12.5001H16.25C16.9404 12.5001 17.5 13.0597 17.5 13.7501C17.5 14.4404 16.9404 15.0001 16.25 15.0001H8.75C8.05964 15.0001 7.5 14.4404 7.5 13.7501C7.5 13.0597 8.05964 12.5001 8.75 12.5001Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.5835 6.66675C3.89314 6.66675 3.3335 6.1071 3.3335 5.41675C3.3335 4.72639 3.89314 4.16675 4.5835 4.16675C5.27385 4.16675 5.8335 4.72639 5.8335 5.41675C5.8335 6.1071 5.27385 6.66675 4.5835 6.66675ZM4.5835 10.8334C3.89314 10.8334 3.3335 10.2738 3.3335 9.58342C3.3335 8.89306 3.89314 8.33342 4.5835 8.33342C5.27385 8.33342 5.8335 8.89306 5.8335 9.58342C5.8335 10.2738 5.27385 10.8334 4.5835 10.8334ZM4.5835 15.0001C3.89314 15.0001 3.3335 14.4404 3.3335 13.7501C3.3335 13.0597 3.89314 12.5001 4.5835 12.5001C5.27385 12.5001 5.8335 13.0597 5.8335 13.7501C5.8335 14.4404 5.27385 15.0001 4.5835 15.0001Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Realisasi Unit</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="evidence()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M4.88112 1.66675H11.4472C11.7427 1.66675 12.0288 1.77149 12.2544 1.96236L16.2241 5.32003C16.5049 5.55754 16.6668 5.90665 16.6668 6.27442V16.7362C16.6668 18.2283 16.6498 18.3334 15.1192 18.3334H4.88112C3.35054 18.3334 3.3335 18.2283 3.3335 16.7362V3.26397C3.3335 1.77185 3.35054 1.66675 4.88112 1.66675Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" d="M7.04477 8.69595L6.07671 9.66402C5.83263 9.90809 5.83263 10.3038 6.07671 10.5479L7.04477 11.516C7.28885 11.76 7.68458 11.76 7.92865 11.516L8.89672 10.5479C9.14079 10.3038 9.14079 9.90809 8.89672 9.66402L7.92865 8.69595C7.68458 8.45187 7.28885 8.45188 7.04477 8.69595Z" fill="black"/>
                                                        <path opacity="0.3" d="M12.2831 8.69595L11.315 9.66402C11.0709 9.90809 11.0709 10.3038 11.315 10.5479L12.2831 11.516C12.5271 11.76 12.9229 11.76 13.1669 11.516L14.135 10.5479C14.3791 10.3038 14.3791 9.90809 14.135 9.66402L13.1669 8.69595C12.9229 8.45188 12.5271 8.45188 12.2831 8.69595Z" fill="black"/>
                                                        <path d="M9.66391 11.3148L8.69585 12.2829C8.45177 12.527 8.45177 12.9227 8.69585 13.1668L9.66391 14.1349C9.90799 14.3789 10.3037 14.3789 10.5478 14.1349L11.5159 13.1668C11.7599 12.9227 11.7599 12.527 11.5159 12.2829L10.5478 11.3148C10.3037 11.0708 9.90799 11.0708 9.66391 11.3148Z" fill="#B5B5C3"/>
                                                        <path d="M9.66391 6.07681L8.69585 7.04487C8.45177 7.28895 8.45177 7.68468 8.69585 7.92876L9.66391 8.89682C9.90799 9.1409 10.3037 9.1409 10.5478 8.89682L11.5159 7.92876C11.7599 7.68468 11.7599 7.28895 11.5159 7.04487L10.5478 6.07681C10.3037 5.83273 9.90799 5.83273 9.66391 6.07681Z" fill="#B5B5C3"/>
                                                        </svg>

                                                    </span> 
                                                    <span> Lihat Evidence</span>
                                                </a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> <span class="badge badge-light-success" >Approved</span> </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="approval()" class="menu-link px-3"> 
                                                    <span class="svg-icon svg-icon-muted svg-icon-2" style="padding-right:6px !important;" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Detail Approval</span>
                                                </a>
                                            </div>
                                          
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="evidence()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M4.88112 1.66675H11.4472C11.7427 1.66675 12.0288 1.77149 12.2544 1.96236L16.2241 5.32003C16.5049 5.55754 16.6668 5.90665 16.6668 6.27442V16.7362C16.6668 18.2283 16.6498 18.3334 15.1192 18.3334H4.88112C3.35054 18.3334 3.3335 18.2283 3.3335 16.7362V3.26397C3.3335 1.77185 3.35054 1.66675 4.88112 1.66675Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" d="M7.04477 8.69595L6.07671 9.66402C5.83263 9.90809 5.83263 10.3038 6.07671 10.5479L7.04477 11.516C7.28885 11.76 7.68458 11.76 7.92865 11.516L8.89672 10.5479C9.14079 10.3038 9.14079 9.90809 8.89672 9.66402L7.92865 8.69595C7.68458 8.45187 7.28885 8.45188 7.04477 8.69595Z" fill="black"/>
                                                        <path opacity="0.3" d="M12.2831 8.69595L11.315 9.66402C11.0709 9.90809 11.0709 10.3038 11.315 10.5479L12.2831 11.516C12.5271 11.76 12.9229 11.76 13.1669 11.516L14.135 10.5479C14.3791 10.3038 14.3791 9.90809 14.135 9.66402L13.1669 8.69595C12.9229 8.45188 12.5271 8.45188 12.2831 8.69595Z" fill="black"/>
                                                        <path d="M9.66391 11.3148L8.69585 12.2829C8.45177 12.527 8.45177 12.9227 8.69585 13.1668L9.66391 14.1349C9.90799 14.3789 10.3037 14.3789 10.5478 14.1349L11.5159 13.1668C11.7599 12.9227 11.7599 12.527 11.5159 12.2829L10.5478 11.3148C10.3037 11.0708 9.90799 11.0708 9.66391 11.3148Z" fill="#B5B5C3"/>
                                                        <path d="M9.66391 6.07681L8.69585 7.04487C8.45177 7.28895 8.45177 7.68468 8.69585 7.92876L9.66391 8.89682C9.90799 9.1409 10.3037 9.1409 10.5478 8.89682L11.5159 7.92876C11.7599 7.68468 11.7599 7.28895 11.5159 7.04487L10.5478 6.07681C10.3037 5.83273 9.90799 5.83273 9.66391 6.07681Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Lihat Evidence</span>
                                                </a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-row-bordered  table-row-gray-300 align-middle gy-4 d-none" id="unit" style="width:100%">
                            <thead>
                                <tr class="text-center" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:5%">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input" type="checkbox" id="chk-select-all" onclick="selectAll()"/>
                                        </div>
                                    </th>
                                    <th style="width:20%">PERSPEKTIF / INDIKATOR</th>
                                    <th style="width:10%">SATUAN</th>
                                    <th style="width:10%">POLARITAS / SUMBER DATA</th>
                                    <th style="width:10%">Kategori Nilai</th>
                                    <th style="width:10%">TARGET</th>
                                    <th style="width:8%">BOBOT</th>
                                    <th style="width:12%">REAL</th>
                                    <th style="width:10%">STATUS</th>
                                    <th style="width:10%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td class="text-end">10</td>
                                    <td class="text-center">
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control form-control-sm me-1" placeholder="Cth: 10"/>
                                            <span class="svg-icon svg-icon-muted svg-icon-1" style="cursor: pointer" data-kt-menu-trigger="click" data-kt-menu-placement="top-end" data-kt-menu-flip="top-end">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                                                <rect x="11" y="17" width="7" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
                                                <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)" fill="black"/>
                                                </svg>
                                            </span>
                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">
                                                <div class="menu-item px-3 mt-1 mb-1 text-start col-12 card-title">
                                                    <span>Info Kendala Realisasi &nbsp;&nbsp;&nbsp;</span>
                                                    <span class="svg-icon svg-icon-muted svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3" d="M6 19.7C5.7 19.7 5.5 19.6 5.3 19.4C4.9 19 4.9 18.4 5.3 18L18 5.3C18.4 4.9 19 4.9 19.4 5.3C19.8 5.7 19.8 6.29999 19.4 6.69999L6.7 19.4C6.5 19.6 6.3 19.7 6 19.7Z" fill="black"/>
                                                        <path d="M18.8 19.7C18.5 19.7 18.3 19.6 18.1 19.4L5.40001 6.69999C5.00001 6.29999 5.00001 5.7 5.40001 5.3C5.80001 4.9 6.40001 4.9 6.80001 5.3L19.5 18C19.9 18.4 19.9 19 19.5 19.4C19.3 19.6 19 19.7 18.8 19.7Z" fill="black"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div class="menu-item px-3 mt-1 mb-1 text-start">
                                                    <span>Silahkan hubungi PIC <span class="fw-boldest"> Ahmad Santoso </span> jika memerlukan tindakan lanjutan</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center"> 
                                        <div class="row">
                                            <span class="badge badge-light-warning mb-1" >Draft</span> 
                                            <span class="text-danger d-flex align-items-center">
                                                <span class="svg-icon svg-icon-danger svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                Evidence
                                            </span> 
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="upload()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96143 16.5533V10.45C6.79143 10.45 5.02393 8.68245 5.02393 6.51245C5.02393 4.34245 6.79143 2.57495 8.96143 2.57495H13.5989V16.5533H12.2339V3.93995H10.3439V16.5533H8.96143Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Upload Evidence</span>
                                                </a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> 
                                        <div class="row">
                                            <span class="badge badge-secondary mb-1" >Menunggu Approval</span> 
                                            <span class="text-danger d-flex align-items-center text-center">
                                                <span class="svg-icon svg-icon-danger svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                Evidence
                                            </span> 
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="pengajuan()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 4.16675H16.25C16.9404 4.16675 17.5 4.72639 17.5 5.41675C17.5 6.1071 16.9404 6.66675 16.25 6.66675H8.75C8.05964 6.66675 7.5 6.1071 7.5 5.41675C7.5 4.72639 8.05964 4.16675 8.75 4.16675ZM8.75 8.33342H16.25C16.9404 8.33342 17.5 8.89306 17.5 9.58342C17.5 10.2738 16.9404 10.8334 16.25 10.8334H8.75C8.05964 10.8334 7.5 10.2738 7.5 9.58342C7.5 8.89306 8.05964 8.33342 8.75 8.33342ZM8.75 12.5001H16.25C16.9404 12.5001 17.5 13.0597 17.5 13.7501C17.5 14.4404 16.9404 15.0001 16.25 15.0001H8.75C8.05964 15.0001 7.5 14.4404 7.5 13.7501C7.5 13.0597 8.05964 12.5001 8.75 12.5001Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.5835 6.66675C3.89314 6.66675 3.3335 6.1071 3.3335 5.41675C3.3335 4.72639 3.89314 4.16675 4.5835 4.16675C5.27385 4.16675 5.8335 4.72639 5.8335 5.41675C5.8335 6.1071 5.27385 6.66675 4.5835 6.66675ZM4.5835 10.8334C3.89314 10.8334 3.3335 10.2738 3.3335 9.58342C3.3335 8.89306 3.89314 8.33342 4.5835 8.33342C5.27385 8.33342 5.8335 8.89306 5.8335 9.58342C5.8335 10.2738 5.27385 10.8334 4.5835 10.8334ZM4.5835 15.0001C3.89314 15.0001 3.3335 14.4404 3.3335 13.7501C3.3335 13.0597 3.89314 12.5001 4.5835 12.5001C5.27385 12.5001 5.8335 13.0597 5.8335 13.7501C5.8335 14.4404 5.27385 15.0001 4.5835 15.0001Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Detail Pengajuan</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="upload()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M4.88112 1.66675H11.4472C11.7427 1.66675 12.0288 1.77149 12.2544 1.96236L16.2241 5.32003C16.5049 5.55754 16.6668 5.90665 16.6668 6.27442V16.7362C16.6668 18.2283 16.6498 18.3334 15.1192 18.3334H4.88112C3.35054 18.3334 3.3335 18.2283 3.3335 16.7362V3.26397C3.3335 1.77185 3.35054 1.66675 4.88112 1.66675Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" d="M7.04477 8.69595L6.07671 9.66402C5.83263 9.90809 5.83263 10.3038 6.07671 10.5479L7.04477 11.516C7.28885 11.76 7.68458 11.76 7.92865 11.516L8.89672 10.5479C9.14079 10.3038 9.14079 9.90809 8.89672 9.66402L7.92865 8.69595C7.68458 8.45187 7.28885 8.45188 7.04477 8.69595Z" fill="black"/>
                                                        <path opacity="0.3" d="M12.2831 8.69595L11.315 9.66402C11.0709 9.90809 11.0709 10.3038 11.315 10.5479L12.2831 11.516C12.5271 11.76 12.9229 11.76 13.1669 11.516L14.135 10.5479C14.3791 10.3038 14.3791 9.90809 14.135 9.66402L13.1669 8.69595C12.9229 8.45188 12.5271 8.45188 12.2831 8.69595Z" fill="black"/>
                                                        <path d="M9.66391 11.3148L8.69585 12.2829C8.45177 12.527 8.45177 12.9227 8.69585 13.1668L9.66391 14.1349C9.90799 14.3789 10.3037 14.3789 10.5478 14.1349L11.5159 13.1668C11.7599 12.9227 11.7599 12.527 11.5159 12.2829L10.5478 11.3148C10.3037 11.0708 9.90799 11.0708 9.66391 11.3148Z" fill="#B5B5C3"/>
                                                        <path d="M9.66391 6.07681L8.69585 7.04487C8.45177 7.28895 8.45177 7.68468 8.69585 7.92876L9.66391 8.89682C9.90799 9.1409 10.3037 9.1409 10.5478 8.89682L11.5159 7.92876C11.7599 7.68468 11.7599 7.28895 11.5159 7.04487L10.5478 6.07681C10.3037 5.83273 9.90799 5.83273 9.66391 6.07681Z" fill="#B5B5C3"/>
                                                        </svg>

                                                    </span> 
                                                    <span> Upload Evidence</span>
                                                </a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> 
                                        <div class="row">
                                            <span class="badge badge-light-success mb-1" >Approved</span> 
                                            <span class="text-danger d-flex align-items-center">
                                                <span class="svg-icon svg-icon-danger svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                Evidence
                                            </span> 
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="approval()" class="menu-link px-3"> 
                                                    <span class="svg-icon svg-icon-muted svg-icon-2" style="padding-right:6px !important;" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Detail Approval</span>
                                                </a>
                                            </div>
                                          
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="upload()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M4.88112 1.66675H11.4472C11.7427 1.66675 12.0288 1.77149 12.2544 1.96236L16.2241 5.32003C16.5049 5.55754 16.6668 5.90665 16.6668 6.27442V16.7362C16.6668 18.2283 16.6498 18.3334 15.1192 18.3334H4.88112C3.35054 18.3334 3.3335 18.2283 3.3335 16.7362V3.26397C3.3335 1.77185 3.35054 1.66675 4.88112 1.66675Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" d="M7.04477 8.69595L6.07671 9.66402C5.83263 9.90809 5.83263 10.3038 6.07671 10.5479L7.04477 11.516C7.28885 11.76 7.68458 11.76 7.92865 11.516L8.89672 10.5479C9.14079 10.3038 9.14079 9.90809 8.89672 9.66402L7.92865 8.69595C7.68458 8.45187 7.28885 8.45188 7.04477 8.69595Z" fill="black"/>
                                                        <path opacity="0.3" d="M12.2831 8.69595L11.315 9.66402C11.0709 9.90809 11.0709 10.3038 11.315 10.5479L12.2831 11.516C12.5271 11.76 12.9229 11.76 13.1669 11.516L14.135 10.5479C14.3791 10.3038 14.3791 9.90809 14.135 9.66402L13.1669 8.69595C12.9229 8.45188 12.5271 8.45188 12.2831 8.69595Z" fill="black"/>
                                                        <path d="M9.66391 11.3148L8.69585 12.2829C8.45177 12.527 8.45177 12.9227 8.69585 13.1668L9.66391 14.1349C9.90799 14.3789 10.3037 14.3789 10.5478 14.1349L11.5159 13.1668C11.7599 12.9227 11.7599 12.527 11.5159 12.2829L10.5478 11.3148C10.3037 11.0708 9.90799 11.0708 9.66391 11.3148Z" fill="#B5B5C3"/>
                                                        <path d="M9.66391 6.07681L8.69585 7.04487C8.45177 7.28895 8.45177 7.68468 8.69585 7.92876L9.66391 8.89682C9.90799 9.1409 10.3037 9.1409 10.5478 8.89682L11.5159 7.92876C11.7599 7.68468 11.7599 7.28895 11.5159 7.04487L10.5478 6.07681C10.3037 5.83273 9.90799 5.83273 9.66391 6.07681Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Upload Evidence</span>
                                                </a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-row-bordered  table-row-gray-300 align-middle gy-4 d-none" id="direksi" style="width:100%">
                            <thead>
                                <tr class="text-center" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:5%">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input" type="checkbox" id="chk-select-all" onclick="selectAll()"/>
                                        </div>
                                    </th>
                                    <th style="width:20%">PERSPEKTIF / INDIKATOR</th>
                                    <th style="width:10%">SATUAN</th>
                                    <th style="width:10%">POLARITAS / SUMBER DATA</th>
                                    <th style="width:10%">Kategori Nilai</th>
                                    <th style="width:10%">TARGET</th>
                                    <th style="width:8%">BOBOT</th>
                                    <th style="width:12%">REAL</th>
                                    <th style="width:10%">STATUS</th>
                                    <th style="width:10%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td class="text-end">10</td>
                                    <td class="text-center">
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control form-control-sm me-1" placeholder="Cth: 10"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> 
                                        <div class="row">
                                            <span class="badge badge-light-success mb-1" >approved</span> 
                                            <span class="text-danger d-flex align-items-center">
                                                <span class="svg-icon svg-icon-danger svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                Evidence
                                            </span> 
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="approval()" class="menu-link px-3"> 
                                                    <span class="svg-icon svg-icon-muted svg-icon-2" style="padding-right:6px !important;" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                                                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Detail Approval</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="evidence()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96143 16.5533V10.45C6.79143 10.45 5.02393 8.68245 5.02393 6.51245C5.02393 4.34245 6.79143 2.57495 8.96143 2.57495H13.5989V16.5533H12.2339V3.93995H10.3439V16.5533H8.96143Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Lihat Evidence</span>
                                                </a>
                                            </div>
                                        </div>
                                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> 
                                        <div class="row">
                                            <span class="badge badge-light-danger mb-1" >Ditolak</span> 
                                            <span class="text-danger d-flex align-items-center text-center">
                                                <span class="svg-icon svg-icon-danger svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                Evidence
                                            </span> 
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="penolakan()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.96143 16.5533V10.45C6.79143 10.45 5.02393 8.68245 5.02393 6.51245C5.02393 4.34245 6.79143 2.57495 8.96143 2.57495H13.5989V16.5533H12.2339V3.93995H10.3439V16.5533H8.96143Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Alasan Penolakan</span></a>
                                            </div>
                                            
                                        </div>
                                                    
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> 
                                        <div class="row">
                                            <span class="badge badge-light-danger mb-1" >Perlu Approval <br> Pengajuan Nilai</span> 
                                            <span class="text-danger d-flex align-items-center">
                                                <span class="svg-icon svg-icon-danger svg-icon-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="black"/>
                                                    <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="black"/>
                                                    </svg>
                                                </span>
                                                Evidence
                                            </span> 
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        
                                        <button type="button" class="btn btn-sm btn-icon btn-color-success btn-active-light-success show menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                                            <span class="fa fa-ellipsis-h" > </span>
                                        </button>

                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-secondary fw-bold w-200px show" data-kt-menu="true" data-popper-placement="top-end" style="z-index: 105; position: fixed; inset: auto auto 0px 0px; margin: 0px; transform: translate(846px, 1095.9px);" data-popper-reference-hidden="" data-popper-escaped="">

                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="simpan()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.7817 5.29361C15.0798 4.94294 15.6057 4.9003 15.9564 5.19837C16.307 5.49644 16.3497 6.02235 16.0516 6.37303L8.96827 14.7064C8.66551 15.0625 8.12907 15.1001 7.77968 14.7895L4.02968 11.4562C3.68569 11.1504 3.65471 10.6237 3.96047 10.2797C4.26624 9.9357 4.79297 9.90472 5.13695 10.2105L8.25016 12.9778L14.7817 5.29361Z" fill="#7E8299"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Approve Permintaan</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="reject()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M13.5356 5.28592L5.28603 13.5355C4.9606 13.8609 4.9606 14.3886 5.28603 14.714C5.61147 15.0394 6.13911 15.0394 6.46454 14.714L14.7141 6.46443C15.0396 6.13899 15.0396 5.61136 14.7141 5.28592C14.3887 4.96048 13.861 4.96048 13.5356 5.28592Z" fill="#7E8299"/>
                                                        <path opacity="0.3" d="M14.7138 13.5356L6.46426 5.28603C6.13882 4.9606 5.61118 4.9606 5.28574 5.28603C4.96031 5.61147 4.96031 6.13911 5.28574 6.46454L13.5353 14.7141C13.8608 15.0396 14.3884 15.0396 14.7138 14.7141C15.0393 14.3887 15.0393 13.861 14.7138 13.5356Z" fill="#7E8299"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Tolak Permintaan</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="setNilai()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 2.5H14.1667C16.0076 2.5 17.5 3.99238 17.5 5.83333C17.5 7.67428 16.0076 9.16667 14.1667 9.16667H5.83333C3.99238 9.16667 2.5 7.67428 2.5 5.83333C2.5 3.99238 3.99238 2.5 5.83333 2.5ZM5.83333 7.5C6.75381 7.5 7.5 6.75381 7.5 5.83333C7.5 4.91286 6.75381 4.16667 5.83333 4.16667C4.91286 4.16667 4.16667 4.91286 4.16667 5.83333C4.16667 6.75381 4.91286 7.5 5.83333 7.5Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M5.83333 10.8333H14.1667C16.0076 10.8333 17.5 12.3256 17.5 14.1666C17.5 16.0075 16.0076 17.4999 14.1667 17.4999H5.83333C3.99238 17.4999 2.5 16.0075 2.5 14.1666C2.5 12.3256 3.99238 10.8333 5.83333 10.8333ZM14.1667 15.8333C15.0871 15.8333 15.8333 15.0871 15.8333 14.1666C15.8333 13.2461 15.0871 12.4999 14.1667 12.4999C13.2462 12.4999 12.5 13.2461 12.5 14.1666C12.5 15.0871 13.2462 15.8333 14.1667 15.8333Z" fill="#B5B5C3"/>
                                                        </svg>

                                                    </span> 
                                                    <span> Setting Nilai</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="realisasi()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.75 4.16675H16.25C16.9404 4.16675 17.5 4.72639 17.5 5.41675C17.5 6.1071 16.9404 6.66675 16.25 6.66675H8.75C8.05964 6.66675 7.5 6.1071 7.5 5.41675C7.5 4.72639 8.05964 4.16675 8.75 4.16675ZM8.75 8.33342H16.25C16.9404 8.33342 17.5 8.89306 17.5 9.58342C17.5 10.2738 16.9404 10.8334 16.25 10.8334H8.75C8.05964 10.8334 7.5 10.2738 7.5 9.58342C7.5 8.89306 8.05964 8.33342 8.75 8.33342ZM8.75 12.5001H16.25C16.9404 12.5001 17.5 13.0597 17.5 13.7501C17.5 14.4404 16.9404 15.0001 16.25 15.0001H8.75C8.05964 15.0001 7.5 14.4404 7.5 13.7501C7.5 13.0597 8.05964 12.5001 8.75 12.5001Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.5835 6.66675C3.89314 6.66675 3.3335 6.1071 3.3335 5.41675C3.3335 4.72639 3.89314 4.16675 4.5835 4.16675C5.27385 4.16675 5.8335 4.72639 5.8335 5.41675C5.8335 6.1071 5.27385 6.66675 4.5835 6.66675ZM4.5835 10.8334C3.89314 10.8334 3.3335 10.2738 3.3335 9.58342C3.3335 8.89306 3.89314 8.33342 4.5835 8.33342C5.27385 8.33342 5.8335 8.89306 5.8335 9.58342C5.8335 10.2738 5.27385 10.8334 4.5835 10.8334ZM4.5835 15.0001C3.89314 15.0001 3.3335 14.4404 3.3335 13.7501C3.3335 13.0597 3.89314 12.5001 4.5835 12.5001C5.27385 12.5001 5.8335 13.0597 5.8335 13.7501C5.8335 14.4404 5.27385 15.0001 4.5835 15.0001Z" fill="#B5B5C3"/>
                                                        </svg>
                                                    </span> 
                                                    <span> Realisasi Unit</span>
                                                </a>
                                            </div>
                                            <div class="menu-item px-3 mt-1 mb-1">
                                                <a onclick="evidence()" class="menu-link px-3"> 
                                                    <span style="padding-right:6px !important;" >
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M4.88112 1.66675H11.4472C11.7427 1.66675 12.0288 1.77149 12.2544 1.96236L16.2241 5.32003C16.5049 5.55754 16.6668 5.90665 16.6668 6.27442V16.7362C16.6668 18.2283 16.6498 18.3334 15.1192 18.3334H4.88112C3.35054 18.3334 3.3335 18.2283 3.3335 16.7362V3.26397C3.3335 1.77185 3.35054 1.66675 4.88112 1.66675Z" fill="#B5B5C3"/>
                                                        <path opacity="0.3" d="M7.04477 8.69595L6.07671 9.66402C5.83263 9.90809 5.83263 10.3038 6.07671 10.5479L7.04477 11.516C7.28885 11.76 7.68458 11.76 7.92865 11.516L8.89672 10.5479C9.14079 10.3038 9.14079 9.90809 8.89672 9.66402L7.92865 8.69595C7.68458 8.45187 7.28885 8.45188 7.04477 8.69595Z" fill="black"/>
                                                        <path opacity="0.3" d="M12.2831 8.69595L11.315 9.66402C11.0709 9.90809 11.0709 10.3038 11.315 10.5479L12.2831 11.516C12.5271 11.76 12.9229 11.76 13.1669 11.516L14.135 10.5479C14.3791 10.3038 14.3791 9.90809 14.135 9.66402L13.1669 8.69595C12.9229 8.45188 12.5271 8.45188 12.2831 8.69595Z" fill="black"/>
                                                        <path d="M9.66391 11.3148L8.69585 12.2829C8.45177 12.527 8.45177 12.9227 8.69585 13.1668L9.66391 14.1349C9.90799 14.3789 10.3037 14.3789 10.5478 14.1349L11.5159 13.1668C11.7599 12.9227 11.7599 12.527 11.5159 12.2829L10.5478 11.3148C10.3037 11.0708 9.90799 11.0708 9.66391 11.3148Z" fill="#B5B5C3"/>
                                                        <path d="M9.66391 6.07681L8.69585 7.04487C8.45177 7.28895 8.45177 7.68468 8.69585 7.92876L9.66391 8.89682C9.90799 9.1409 10.3037 9.1409 10.5478 8.89682L11.5159 7.92876C11.7599 7.68468 11.7599 7.28895 11.5159 7.04487L10.5478 6.07681C10.3037 5.83273 9.90799 5.83273 9.66391 6.07681Z" fill="#B5B5C3"/>
                                                        </svg>

                                                    </span> 
                                                    <span> Lihat Evidence</span>
                                                </a>
                                            </div>
                                        </div>  
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-row-bordered  table-row-gray-300 align-middle gy-4 d-none" id="pic" style="width:100%">
                            <thead>
                                <tr class="text-center" style="font-weight: bolder;text-transform:uppercase;">
                                    <th style="width:5%">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input" type="checkbox" id="chk-select-all" onclick="selectAll()"/>
                                        </div>
                                    </th>
                                    <th style="width:20%">PERSPEKTIF / INDIKATOR</th>
                                    <th style="width:10%">SATUAN</th>
                                    <th style="width:10%">POLARITAS / SUMBER DATA</th>
                                    <th style="width:10%">Kategori Nilai</th>
                                    <th style="width:10%">TARGET</th>
                                    <th style="width:8%">BOBOT</th>
                                    <th style="width:12%">REAL</th>
                                    <th style="width:10%">STATUS</th>
                                    <th style="width:10%">AKSI</th>
                                </tr>
                            </thead>
                            <tbody class="table-iku-body" id="table-kpi-body">
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td class="text-end">10</td>
                                    <td class="text-center">
                                        <div class="d-flex align-items-center">
                                            <input type="text" class="form-control form-control-sm me-1" placeholder="Cth: 10"/>
                                        </div>
                                    </td>
                                    <td class="text-center"> 
                                        <span class="badge badge-secondary mb-1" >Perlu Approval</span> 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> 
                                        <span class="badge badge-secondary mb-1" >Perlu Approval</span> 
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-custom form-check-solid form-check-sm ms-4">
                                            <input class="form-check-input chk-realisasi" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>Financial  <br> % Revenue (standalone)</td>
                                    <td class="text-center">%</td>
                                    <td>Stabilitas  <br> Laporan keuangan</td>
                                    <td>Nilai 4 : 90% - >=100%</td>
                                    <td>1000</td>
                                    <td  class="text-end">10</td>
                                    <td class="text-center"> <input type="text" class="form-control form-control-sm" placeholder="Cth: 10"/></td>
                                    <td class="text-center"> 
                                        <span class="badge badge-secondary mb-1" >Perlu Approval</span> 
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-12 text-center pt-10 pb-10" id="div-empty">
                        <img class="mb-5" style="margin-top: 30px !important;" src="{{asset('assets/extends/img/empty-search.svg')}}"/>
                        <p class="text-muted mt-10 " >Belum ada data yang dapat ditampilkan <br> Silahkan pilih unit, tahun dan kuartal terlebih dahulu</p>
                    </div>

                    <div class="text-start" id="button-footer">
                        <button type="button" id="btn-tambah" onclick="simpan()" class="btn btn-success">
                            <span class="indicator-label">Simpan</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <button class="btn btn-warning ms-5" onclick="approved()">
                            <span class="svg-icon svg-icon-muted svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"/>
                                    <path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="black"/>
                                </svg>
                            </span>
                            Approve Nilai
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Tahun RAKP Korporat</h5>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
            </div>

            <div class="modal-body">
                <form id="form-input">
                <input type="hidden" id="id" value=""/>
                <div class="mb-5">
                    <label for="nama" class="form-label">Pilih Tahun</label>
                    <input id="tanggal" type="text" class="form-control" readonly="readonly" placeholder="Pilih tanggal" readonly/>
                </div>
                <div class="hapus-time">
                    <label for="nama" class="form-label text-danger fw-bolder">Hapus Tahun</label>
                </div>
                <div class="mb-5 border-dashed rounded row mx-0 p-4 props-warning hapus-time">
                   <div class="col-md-2" style="padding: 1.7rem;">
                        <div class="form-check form-check-custom form-check-solid form-check-danger">
                            <input class="form-check-input" type="checkbox" value="" id="hapus-tahun"/>
                        </div>
                   </div>
                   <div class="col-md-10">
                       <h5 class="">Hapus Tahun</h5>
                       <p class="text-muted mb-0">Perhatikan baik-baik, karena memilih ini akan menghapus seluruh data didalamnya.</p>
                   </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="btn-simpan" class="btn btn-sm btn-success" onclick="simpan()">
                    <span class="indicator-label">Simpan</span>
                    <span class="indicator-progress">Proses menyimpan...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
            </form>
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
                    <h1 class="mb-3">Alasan Penolakan</h1>
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
                        <span class="text-dark fs-5 fw-bolder">Mohon koreksi ulang terkait pengisian realisasi, karena ada kesalahan saat pengisian</span>
                        {{-- <h5 id="perspective-`+uuid+`">Financial</h5> --}}
                    {{-- </div> --}}
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Tanggal</h3>
                            <span class="text-dark fs-5 fw-bolder">12 September 2022</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Oleh</h3>
                            <span class="text-dark fs-5 fw-bolder">Direksi</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-reject" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body scroll-y mx-5 mx-xl-1 pt-0 pb-10">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-13">
                    <h1 class="mb-3">Tolak Pengajuan Realisasi</h1>
                    <div class="text-muted fw-bold fs-5">Silahkan ketik alasan mengapa pengajuan ditolak</div>
                </div>
                <div class="col-12">
                    <label class="fs-5 fw-bolder mb-3" for="note-rollback">Keterangan Penolakan</label>
                    <textarea class="form-control" id="note-rollback" rows="3" placeholder="Contoh : data pengajuan salah input"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="btn-simpan" class="btn btn-sm btn-success" onclick="simpan()">
                    <span class="indicator-label">Simpan</span>
                    <span class="indicator-progress">Proses menyimpan...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-set-nilai" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
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
            <div class="modal-body scroll-y mx-5 mx-xl-1 pt-0 pb-10">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-13">
                    <h1 class="mb-3">Set Nilai Indikator</h1>
                    <div class="text-muted fw-bold fs-5">Silahkan pilih nilai indikator</div>
                </div>
                <div class="row" data-kt-buttons="true" data-kt-buttons-target="[data1-kt-button='true']">
                    <div class="col-12">
                        <label class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 ms-0 me-2 menu-form menu-1" data-bs-toggle="tab" href="#kt_widget_tab_1" data1-kt-button="true">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input menu-1" type="radio" name="finance_usage" value="1"/>
                            </span>
                            <span class="ms-5 mt-2">
                                <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Kenaikan AKHLAK Internalization Indeks <=4%</span>
                            </span>
                        </label>
                    </div>
                    <div class="col-12">
                        <label class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-2 menu-form menu-3" data-bs-toggle="tab" href="#kt_widget_tab_2" data1-kt-button="true">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input menu-2" type="radio" name="finance_usage" value="2"/>
                            </span>
                            <span class="ms-5 mt-2">
                                <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Kenaikan AKHLAK Internalization Indeks 4% - < 8%</span>
                            </span>
                        </label>
                    </div>
                    <div class="col-12">
                        <label class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-2 menu-form menu-3" data-bs-toggle="tab" href="#kt_widget_tab_3" data1-kt-button="true">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input menu-3" type="radio" name="finance_usage" value="3"/>
                            </span>
                            <span class="ms-5 mt-2">
                                <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Kenaikan AKHLAK Internalization Indeks 8% - < 10%</span>
                            </span>
                        </label>
                    </div>
                    <div class="col-12">
                        <label class="mt-2 btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-2 menu-form menu-3" data-bs-toggle="tab" href="#kt_widget_tab_3" data1-kt-button="true">
                            <span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
                                <input class="form-check-input menu-3" type="radio" name="finance_usage" value="3"/>
                            </span>
                            <span class="ms-5 mt-2">
                                <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Kenaikan AKHLAK Internalization Indeks >=10%</span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="btn-simpan" class="btn btn-sm btn-success" onclick="simpan()">
                    <span class="indicator-label">Simpan</span>
                    <span class="indicator-progress">Proses menyimpan...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-realisasi" tabindex="-1" aria-hidden="true">
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
                    <h1 class="mb-3">Detail Realisasi Unit</h1>
                    <div class="text-muted fw-bold fs-5">Detail realisasi yang diajukan masing-masing unit</div>
                </div>
                <div class="d-flex ps-lg-15 px-2 py-0 m-0 mb-10">
                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">Financial</h5>
                        <label class="text-gray-600">Aspek</label>
                    </div>
                    <div class="col-3 mb-2 ps-0">
                        <h5 id="perspective-`+uuid+`">Increase Profitability</h5>
                        <label class="text-gray-600">Sasaran Strategis</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">% Revenue (standalone)</h5>
                        <label class="text-gray-600">Parameter</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">KPI Korporat</h5>
                        <label class="text-gray-600">Sumber</label>
                    </div>
                </div>
                <div class="d-flex ps-lg-15 px-2 py-0 m-0 mb-15">
                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                    <div class="col-3 mb-2 ps-0">
                        <h5 id="perspective-`+uuid+`">Laporan X</h5>
                        <label class="text-gray-600">Tipe Evidence</label>
                    </div>
                    <div class="col-1 mb-2">
                        <h5 id="perspective-`+uuid+`">%</h5>
                        <label class="text-gray-600">Satuan</label>
                    </div>
                    <div class="col-2 mb-2">
                        <h5 id="perspective-`+uuid+`">></h5>
                        <label class="text-gray-600">Kondisi</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">Average</h5>
                        <label class="text-gray-600">Tipe YYD</label>
                    </div>
                    <div class="col-3 mb-2">
                        <h5 id="perspective-`+uuid+`">Aan Sahid</h5>
                        <label class="text-gray-600">PIC</label>
                    </div>
                </div>
                <div class="d-flex ps-lg-15 px-2 py-0 m-0 mb-15">
                    <input type="hidden" name="targets[]" value="`+uuid+`"/>
                    <div class="col-4 mb-2 ps-0 p-2">
                        <h5 id="perspective-`+uuid+`">Januari</h5>
                        <label class="text-gray-600">Bulan</label>
                    </div>
                    <div class="col-4 mb-2 me-2 bg-light-success p-2">
                        <h5 id="perspective-`+uuid+`">1000</h5>
                        <label class="text-gray-600">Target</label>
                    </div>
                    <div class="col-4 mb-2 bg-light-success p-2">
                        <h5 id="perspective-`+uuid+`">10%</h5>
                        <label class="text-gray-600">Bobot</label>
                    </div>
                </div>
                <table class="table table-row-bordered table-row-gray-300 align-middle gy-4 " id="" style="width:100%">
                    <thead>
                        <tr class="text-center" style="font-weight: bolder;text-transform:uppercase;">
                            <th style="width:80%" class="text-start">Unit</th>
                            <th style="width:20%" class="text-center">Realisasi</th>
                        </tr>
                    </thead>
                    <tbody class="table-iku-body" id="table-kpi-body">
                        <tr>
                            <td class="fw-bolder text-start">Unit Keuangan</td>
                            <td class="text-end">50</td>
                        </tr>
                        <tr>
                            <td class="fw-bolder text-start">Unit Design</td>
                            <td class="text-end">30</td>
                        </tr>
                        <tr>
                            <td class="fw-bolder text-start">Unit Engineer</td>
                            <td class="text-end">20</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-end pt-7">
                    <button data-bs-dismiss="modal" class="btn btn-light me-3">Tutup</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-approval" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-0">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-10">
                    <h1 class="mb-0">Detail Approval</h1>
                </div>
                <div class="col-12 mb-10 bg-light-success p-4">
                    <span class="svg-icon svg-icon-2hx svg-icon-success" style="padding-right:6px !important;" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black"/>
                            <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="black"/>
                        </svg>
                    </span> 
                    <label class="fs-5 fw-bolder">Indikator Sudah disetujui</label>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Tanggal</h3>
                            <span class="text-dark fs-5 fw-bolder">12 September 2022</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Oleh</h3>
                            <span class="text-dark fs-5 fw-bolder">Direksi</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-evidence" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-0">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-0">
                    <h1 class="mb-10">Detail Evidence</h1>
                </div>
                <div class="mb-10">
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="{{asset('assets/media/logos/ss-evidence.png')}}">
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{asset('assets/media/logos/ss-evidence.png')}}')"></div>
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                        </div>
                    </a>
                    {{-- <img class="mb-5 col-md-12 text-center pt-0 pb-0" style="margin-top: 30px !important;" src="{{asset('assets/media/logos/ss-evidence.png')}}"/> --}}
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Tanggal</h3>
                            <span class="text-dark fs-5 fw-bolder">12 September 2022</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Oleh</h3>
                            <span class="text-dark fs-5 fw-bolder">Departemen Legal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-pengajuan" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-0">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-10">
                    <h1 class="mb-0">Detail Approval</h1>
                </div>
                <div class="col-12 mb-10 bg-light-warning p-4">
                    <span class="svg-icon svg-icon-2hx svg-icon-warning" style="padding-right:6px !important;" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="black"/>
                            <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="black"/>
                        </svg>
                    </span> 
                    <label class="fs-5 fw-bolder">Menunggu Pengajuan</label>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Tanggal</h3>
                            <span class="text-dark fs-5 fw-bolder">12 September 2022</span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mx-0 p-2 my-0 border-dashed rounded div-parameter new-target" id="parent-`+uuid+`">
                            <h3 class="text-muted fw-bolder mb-5">Oleh</h3>
                            <span class="text-dark fs-5 fw-bolder">Departemen Legal</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-upload" tabindex="-1" aria-hidden="true">
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
            <div class="modal-body scroll-y mx-5 mx-xl-1 pt-0 pb-10">
                <input type="hidden" id="id_target"/>
                <div class="text-center mb-13">
                    <h1 class="mb-3">Upload Evidence</h1>
                    <div class="text-muted fw-bold fs-5">Silahkan upload gambar / screenshot table <br> nilai sebelumnya yang ingin dirubah</div>
                </div>
                <div class="col-12">
                    <form class="form" action="#" method="post">
                        <div class="fv-row">
                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                <div class="dz-message needsclick">
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                        <span class="fs-7 fw-bold text-gray-400">Only allowed to upload one file with the format .jpg/.jpeg/.pdf</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                <button type="button" id="btn-simpan" class="btn btn-sm btn-success" onclick="simpan()">
                    <span class="indicator-label">Simpan</span>
                    <span class="indicator-progress">Proses menyimpan...
                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
            </div>
        </div>
    </div>
</div>

{{-- <script src="{{asset('assets/extends/js/page/setting-kpi.js')}}"></script> --}}
<script>
    $("#nav-realisasi").addClass("active");
    $("#button-footer").addClass("d-none");
    $("#div-isi").addClass("d-none");
    $("#div-empty").removeClass("d-none");
    // console.log($(".chk-realisasi").is("checked"))
    function show() {
        $("#div-empty").addClass("d-none");
        $("#div-isi").removeClass("d-none");
    }
    function selectAll() {
        let stat = $("#chk-select-all").prop("checked");
        $(".chk-realisasi").prop("checked", stat);
        // console.log($(".chk-realisasi").prop("checked"))
        if ($(".chk-realisasi").prop("checked")) {
            $("#button-footer").removeClass("d-none");
        }else{
            $("#button-footer").addClass("d-none");
            $("#chk-select-all").prop("checked", false);
        }
    }
    function simpan() {
        Swal.fire({
        title: "Berhasil!",
        text: "Data berhasil disimpan",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Selesai",
        customClass: {
            confirmButton: "btn btn-success"
        }
        }).then((result) => {
            
        });
    }
    function approved() {
        Swal.fire({
        title: "Berhasil!",
        text: "Nilai approved",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "Selesai",
        customClass: {
            confirmButton: "btn btn-success"
        }
        }).then((result) => {
            
        });
    }
    $(".chk-realisasi").change(function() {
        if($('.chk-realisasi').is(':checked')) {
            $("#button-footer").removeClass("d-none");
        }else{
            $("#button-footer").addClass("d-none");
            $("#chk-select-all").prop("checked", false);
        }
    });
    function penolakan() {
        $("#modal-rollback").modal("show");
    }
    function reject() {
        $("#modal-reject").modal("show");
    }
    function setNilai() {
        $("#modal-set-nilai").modal("show");
    }
    function realisasi() {
        $("#modal-realisasi").modal("show");
    }
    function evidence() {
        $("#modal-evidence").modal("show");
    }
    function approval() {
        $("#modal-approval").modal("show");
    }
    function upload() {
        $("#modal-upload").modal("show");
    }
    function pengajuan() {
        $("#modal-pengajuan").modal("show");
    }
</script>

@endsection

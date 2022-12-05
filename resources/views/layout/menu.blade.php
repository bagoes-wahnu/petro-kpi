<!--begin::Navbar-->
<div class="d-flex align-items-stretch" id="kt_header_nav">
    <div class="header-menu align-items-stretch bg-primary" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
        <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
            <div class="menu-item p-2 me-10 d-none">
                {{-- <img src="{{asset('assets/extends/img/logo.png')}}"/> --}}
                <img src="{{asset('assets/media/logos/Group-4-1.png')}}"/>
            </div>
        </div>
    </div>
</div>
<div class="d-flex align-items-stretch flex-shrink-0">
    <div class="d-flex align-items-stretch flex-shrink-0">
        <div class="d-flex align-items-center ms-1 ms-lg-3">
            <div class="w-30px h-30px w-md-40px h-md-40px pt-4 me-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" style="cursor:pointer">
                <div class="d-flex align-items-center ms-1 ms-lg-3">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                    <span class="svg-icon svg-icon-muted svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="black"/>
                        <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="black"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-275px" data-kt-menu="true">
                {{-- <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('{{asset('assets/media/misc/pattern-1.jpg')}}')"> --}}
                    <h3 class="fw-bold px-5 mt-10 mb-6">Notifikasi</h3>
                    {{-- <span class="fs-8 opacity-75 ps-3">5 notifikasi baru</span> --}}
                {{-- </div> --}}
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="kt_topbar_notifications_1" role="tabpanel">
                        <div class="scroll-y mh-325px my-0 px-3">
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                        <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                            <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                        <div class="d-flex">
                                            <div class="text-gray-400 fs-8">
                                                Permintaan perubahan data sudah disetujui
                                            </div>
                                            <div class="fw-bolder">
                                                <span class="badge bg-secondary text-dark">12.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                        <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                            <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                        <div class="d-flex">
                                            <div class="text-gray-400 fs-8">
                                                Permintaan perubahan data sudah disetujui
                                            </div>
                                            <div class="fw-bolder">
                                                <span class="badge bg-secondary text-dark">12.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr016.svg-->
                                        <span class="svg-icon svg-icon-success svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M10.3 14.3L11 13.6L7.70002 10.3C7.30002 9.9 6.7 9.9 6.3 10.3C5.9 10.7 5.9 11.3 6.3 11.7L10.3 15.7C9.9 15.3 9.9 14.7 10.3 14.3Z" fill="black"/>
                                            <path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM11.7 15.7L17.7 9.70001C18.1 9.30001 18.1 8.69999 17.7 8.29999C17.3 7.89999 16.7 7.89999 16.3 8.29999L11 13.6L7.70001 10.3C7.30001 9.89999 6.69999 9.89999 6.29999 10.3C5.89999 10.7 5.89999 11.3 6.29999 11.7L10.3 15.7C10.5 15.9 10.8 16 11 16C11.2 16 11.5 15.9 11.7 15.7Z" fill="black"/>
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder mb-2">Disetujui</a>
                                        <div class="d-flex">
                                            <div class="text-gray-400 fs-8">
                                                Permintaan perubahan data sudah disetujui
                                            </div>
                                            <div class="fw-bolder">
                                                <span class="badge bg-secondary text-dark">12.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-0 text-center border-top">
                            <a href="{{asset('notifikasi')}}" class="btn btn-active-color-primary"><span class="fw-bolder">Lihat Semua</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">

            <div class="btn btn-icon btn-color-primary btn-active-color-primary w-30px h-30px w-lg-40px h-lg-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                {{-- <span class="svg-icon svg-icon-primary svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
                    </svg>
                </span> --}}
                <span class="symbol symbol-35px ml-4" style="margin-left: 10px !important;">
                    <span class="symbol-label fs-3 fw-bold text-success _initial_profile">A</span>
                </span>
            </div>

            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-50px me-5">
                            {{-- <img alt="Logo" src="{{asset('assets/media/avatars/150-26.jpg')}}" /> --}}
                            <span class="symbol-label fs-3 fw-bold text-success _initial_profile">A</span>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5" id="profil-nama">Administrator</div>
                            <a href="#" class="fw-bold text-muted text-hover-primary fs-7" id="profil-role">Super User</a>
                        </div>
                    </div>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-5 my-1">
                    <a href="#" class="menu-link px-5" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Ubah Password</a>
                    {{-- <a class="menu-link px-5" onclick="openModalPassword()">Ubah Password</a> --}}
                </div>
                <div class="menu-item px-5 my-1">
                    <a href="#" class="menu-link px-5" data-bs-toggle="modal" data-bs-target="#modal_account">Beralih Akun &nbsp;&nbsp;<span class="badge badge-light ms-auto"> <span id="jumlah-akun" ></span> Akun</span></a> 
                </div>
                <div class="menu-item px-5">
                    <a href="javascript:;" class="menu-link px-5 text-danger" id="btn-logout" onclick="logout()">Keluar</a>
                </div>
                <div class="separator my-2"></div>
            </div>
        </div>
        {{-- <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                <span class="svg-icon svg-icon-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
                        <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
                    </svg>
                </span>
            </div>
        </div> --}}
    </div>
</div>
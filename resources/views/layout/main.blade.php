<!DOCTYPE html>
<html lang="en">
	<head><base href="../">
		<title>PETROKIMIA - KPI</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        @include('layout.css')
        <script>
            var baseUrl = "{{url('/')}}/";
            var urlApi = "{{url('/api')}}/";
			// function selectSkema() {
			// 	$("#modal-select-skema").modal("show");
			// }
			// function create() {
			// 	window.location = "{{asset('setting/kpi')}}";
			// }
			// function returned() {
			// 	window.location = "{{asset('setting/kpi')}}";
			// }
        </script>
	</head>
	@include('layout.modal')
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
					<div class="aside-logo flex-column-auto" id="kt_aside_logo">
						<a href="{{asset('/')}}">
							<img alt="Logo" src="{{asset('assets/media/logos/Group-4-1.png')}}" class="h-45px logo" />
						</a>
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
						</div>
					</div>
					<div class="aside-menu flex-column-fluid">
						<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
							<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<a id="nav-dashboard" class="menu-link" href="{{asset('/')}}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Dashboard</span>
									</a>
								</div>
								<div class="menu-item">
									<a id="nav-realisasi" class="menu-link" href="{{asset('realisasi-kpi')}}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Realisasi KPI</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content pb-2">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Master</span>
									</div>
								</div>
								<div class="menu-item">
									<a id="nav-master-indikator" class="menu-link" href="{{asset('master/indikator')}}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Master Indikator</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content pt-8 pb-0">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Setting</span>
									</div>
								</div>
								<div class="menu-item">
									<a id="nav-setting-kpi" class="menu-link" href="{{asset('setting/kpi')}}">
									{{-- <a id="nav-setting-kpi" class="menu-link" onclick="selectSkema()"> --}}
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Setting KPI</span>
									</a>
								</div>
                                <div class="menu-item">
									<a id="nav-setting-pic" class="menu-link" href="{{asset('setting/pic')}}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
													<rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
													<path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
													<rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
												</svg>
											</span>
										</span>
										<span class="menu-title">Setting PIC</span>
									</a>
								</div>
								<div class="menu-item">
									<div class="menu-content pt-8 pb-0">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Organisasi</span>
									</div>
								</div>
								<div class="menu-item">
									<a id="nav-struktur-organisasi" class="menu-link" href="{{asset('struktur-organisasi')}}">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M6 7C7.10457 7 8 6.10457 8 5C8 3.89543 7.10457 3 6 3C4.89543 3 4 3.89543 4 5C4 6.10457 4.89543 7 6 7ZM6 9C3.79086 9 2 7.20914 2 5C2 2.79086 3.79086 1 6 1C8.20914 1 10 2.79086 10 5C10 7.20914 8.20914 9 6 9Z" fill="#B5B5C3"/>
													<path opacity="0.3" d="M7 11.4649V17C7 18.1046 7.89543 19 9 19H15V21H9C6.79086 21 5 19.2091 5 17V8V7H7V8C7 9.10457 7.89543 10 9 10H15V12H9C8.27143 12 7.58835 11.8052 7 11.4649Z" fill="#B5B5C3"/>
													<path d="M18 22C19.1046 22 20 21.1046 20 20C20 18.8954 19.1046 18 18 18C16.8954 18 16 18.8954 16 20C16 21.1046 16.8954 22 18 22ZM18 24C15.7909 24 14 22.2091 14 20C14 17.7909 15.7909 16 18 16C20.2091 16 22 17.7909 22 20C22 22.2091 20.2091 24 18 24Z" fill="#B5B5C3"/>
													<path d="M18 13C19.1046 13 20 12.1046 20 11C20 9.89543 19.1046 9 18 9C16.8954 9 16 9.89543 16 11C16 12.1046 16.8954 13 18 13ZM18 15C15.7909 15 14 13.2091 14 11C14 8.79086 15.7909 7 18 7C20.2091 7 22 8.79086 22 11C22 13.2091 20.2091 15 18 15Z" fill="#B5B5C3"/>
												</svg>
											</span>
										</span>
										<span class="menu-title">Struktur Organisasi</span>
									</a>
								</div>
                                <div class="menu-item">
									<div class="menu-content pt-8 pb-0">
										<span class="menu-section text-muted text-uppercase fs-8 ls-1">Report</span>
									</div>
								</div>
								<div id="mn-master-parent" data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link" id="mn-report">
                                        <span class="menu-icon">
                                            <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#A2A7C3" fill-rule="nonzero"/>
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#A2A7C3" opacity="0.3"/>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                        <span class="menu-title">Report</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/kpi-posisi') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-instansi">KPI Posisi</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/hirarki-kpi') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-jabatan">Hirarki KPI</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/kpi-karyawan') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-divisi">KPI Karyawan</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/progress-pengajuan-kpi') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-indikator-kpi">Progress Pengajuan KPI</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/ringkasan-prespektif') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-indikator-perilaku">Ringkasan Prespektif</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/ketercapain-kpi') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-parameter-nilai">Ketercapaian KPI</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="{{ asset('report/vam-kpi') }}">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title" id="dd-tahun">VAM KPI</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
							</div>
						</div>
					</div>
				</div>
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div id="kt_header" style="" class="header align-items-stretch">
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
								<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
								</div>
							</div>
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="../../demo1/dist/index.html" class="d-lg-none">
									{{-- <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-30px" /> --}}
								</a>
							</div>
							<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
								@include('layout.menu')
							</div>
						</div>
					</div>
                    @include('layout.js')
					@yield('content')
                    
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
		</div>

		<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<div class="modal-content">
					<form class="form" id="kt_modal_new_address_form">
						<div class="modal-header" id="kt_modal_new_address_header">
							<h2 class="invisible">Tambah Master Parameter</h2>
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
							<div class="card card-xxl-stretch mb-5 mb-xl-5">
								<div class="card-body py-0">
									<p class="fs-2 fw-bolder py-3 mb-10 text-center">Ubah Password
									<br /> <span class="text-gray-400 fs-5"> pastikan untuk selalu mengingat password terbaru anda</span>
									<br /> <span class="text-gray-400 fs-5"> terbaru anda</span></p>
									{{-- <div class="tab-content">
										<div class="col-md-12 fv-row">
											<label class="fs-5 fw-bold mt-5">Password saat ini</label>
											<input type="password" id="inp-eye1" class="form-control mb-10" name="row-name" placeholder="Masukkan password" value="" />
										</div>
										<div class="separator my-2"></div>
										<div class="col-md-12 fv-row">
											<label class="fs-5 fw-bold mt-5">Password Baru</label>
											<input type="password" id="inp-eye2" class="form-control" name="row-name" placeholder="Masukkan password baru" value="" />
										</div>
										<div class="col-md-12 fv-row">
											<label class="fs-5 fw-bold mt-5">Ulangi Password Baru</label>
											<input type="password" id="inp-eye3" class="form-control" name="row-name" placeholder="Ketik Ulang password baru" value="" />
										</div>
									</div> --}}
									<div class="form-group  mt-3">
										<label for="old-pass" class="form-label">Password saat ini</label>
										<div class="input-group">
											<input id="inp-eye1" type="password" class="form-control" placeholder="Masukkan Sandi" aria-describedby="basic-addon2" />
											<div class="input-group-append" id="btn-eye1">
												<span class="input-group-text" style="padding: 1.1rem;"><i id="i-eye1" class="la la-eye-slash icon-lg"></i></span>
											</div>
										</div>
									</div>
									<div class="form-group  mt-6">
										<label for="new-pass" class="form-label">Password baru</label>
										<div class="input-group">
											<input id="inp-eye2" type="password" class="form-control" placeholder="Masukkan Sandi" aria-describedby="basic-addon2" />
											<div class="input-group-append" id="btn-eye2">
												<span class="input-group-text"  style="padding: 1.1rem;"><i id="i-eye2" class="la la-eye-slash icon-lg"></i></span>
											</div>
										</div>
										<span class="text-danger" id="lbl-eye2"></span>
									</div>
									<div class="form-group  mt-6">
										<label for="confirm-new-pass" class="form-label">Ulangi password baru</label>
										<div class="input-group">
											<input id="inp-eye3" type="password" class="form-control" placeholder="Masukkan Sandi" aria-describedby="basic-addon2" />
											<div class="input-group-append" id="btn-eye3">
												<span class="input-group-text"  style="padding: 1.1rem;"><i id="i-eye3" class="la la-eye-slash icon-lg"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer flex-right">
							<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
							<button type="submit" id="kt_docs_sweetalert_add" class="btn btn-success" onclick="simpanPass()">
								<span class="indicator-label">Simpan</span>
								<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal_account" tabindex="-1" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered mw-450px">
				<div class="modal-content">
					<form class="form" id="kt_modal_new_address_form">						
						<div class="modal-body py-0">
							<div class="card card-xxl-stretch mb-5 mb-xl-8">
								<div class="card-body py-3">
									<p class="fs-2 fw-bolder py-7 text-center">
										<span> Akun </span>
									<br /> <span class="text-gray-400 fs-5">Silahkan pilih akun dibawah ini</span>
									</p>
									<div class="tab-content">
										<div class="row" id="account-list">

											{{-- <div class="col-md-12 account-item pb-4 mb-3 mt-4 border border-left-0 border-right-0 border-top-0 border-dashed border-gray-300">
												<div class="row">
													<div class="col-md-9 row account_item_click mb-1" style="cursor: pointer;">
														<div class="col-md-4">
															<div class="symbol symbol-55px symbol-circle ">
																
																<div class="symbol symbol-40px symbol-lg-50px" style="width: 100%;">
																	<span class="fs-1 symbol-label font-weight-boldest bg-primary text-inverse-primary _initial_profile">-</span>
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<span class="fw-bolder fs-6">Administrator</span> <br> <span class="fs-8 text-gray-400" >Username</span>
														</div>
													</div>
													
													<div class="col-md-3 text-center">
														<span class="badge badge-light-success me-auto mb-2">Aktif</span> <br> 
														<a href="javascript:;"><span class="fs-8 text-gray-400" >Keluar</span></a>
													</div>
												</div>
											</div>--}}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer flex-center">

							
							<button type="button" id="btn-add-account" class="btn btn-light-primary btn-sm" onclick="addAccount()">
								<span class="svg-icon svg-icon-primary svg-icon-1">
			                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
			                        <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"></path>
			                        <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"></rect>
			                    </svg>
			                </span>Tambah Akun Lainnya
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modal-select-skema" data-toggle="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog ">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Pilih Skema</h5>
						<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
							<span class="svg-icon svg-icon-2x">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
						</div>
					</div>
		
					<div class="modal-body">
						<div class="card card-xxl-stretch mb-5 mb-xl-8">
							<div class="card-header border-0 pt-5">
								<div class="card-toolbar">
									<div class="row">
										<div class="col-6 w-200px">
											<a onclick="create()">
												<label class="btn btn-outline btn-outline-default d-flex text-start p-6 me-0 me-0 menu-form menu-1">
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
														<input class="form-check-input menu-1" type="radio" name="finance_usage" value="1" disabled/>
													</span>
													<span class="ms-5 mt-2">
														<span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Create</span>
													</span>
												</label>
											</a>
										</div>
										<div class="col-6 w-220px">
											<a onclick="returned()">
												<label class=" btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 me-0 menu-form menu-2">
													<span class="form-check form-check-custom form-check-solid form-check-sm align-items-middle mt-1">
														<input class="form-check-input menu-2" type="radio" name="finance_usage" value="2"/>
													</span>
													<span class="ms-5 mt-2">
														<span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Dikembalikan</span>
													</span>
												</label>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		
					<div class="modal-footer">
						<button type="button" class="btn btn-sm btn-light" data-bs-dismiss="modal">Batal</button>
					</div>
					</form>
				</div>
			</div>
		</div>

		<script>
		var hostUrl = "assets/";

            function simpanPass() {
                ewpLoadingShow();
                var data = {
                    current_password: $("#inp-eye1").val(),
                    new_password: $("#inp-eye2").val(),
                    new_password_confirmation: $("#inp-eye3").val(),
                };
                var tipe = "POST"
                var link = urlApi + "change-pass"
                $.ajax({
                    type: tipe,
                    dataType: "json",
                    data: data,
                    url: link,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        "Authorization":"Bearer " + localStorage.getItem("ppre_token")
                    },
                    success: function (response) {
                    ewpLoadingHide();
                    Swal.fire({
                        title: "Success!",
                        icon: "success",
                        text: "Password berhasil di ganti,silahkan login kembali.",
                        showCancelButton: false,
                        //confirmButtonColor: "#3085d6",
                        confirmButtonText: "Lanjutkan",

                    }).then((result) => {
                        if (result.value) {
                            logout()
                            window.location.href = baseUrl + "/";
                        }
                    });
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        ewpLoadingHide();
                        handleErrorDashboard(xhr);
                        
                    },
                });
            }
			function logout() {

				$.ajax({
					url:urlApi+'logout',
					type:'POST',
					beforeSend: function (xhr) {
						xhr.setRequestHeader("Authorization","Bearer " + localStorage.getItem("ppre_token"));
					},
					success:function(response){
						// console.log(response)

						let saved_credentials = JSON.parse(localStorage.getItem("ppre_credential"))
						let id_user_logout = localStorage.getItem("ppre_userID")
						let new_credentials = []

						for(let scr in saved_credentials) {
							
							let s_cred = saved_credentials[scr]

							if (s_cred.ppre_userID != id_user_logout) {
								new_credentials.push(s_cred)
							}
						}

						const credentialSTRING = JSON.stringify(new_credentials);
        				localStorage.setItem("ppre_credential", credentialSTRING);

        				localStorage.setItem("ppre_token", "");
            			localStorage.setItem("ppre_userID", "");
            			localStorage.setItem("ppre_userName", "");
            			localStorage.setItem("ppre_roleID", "");
            			localStorage.setItem("ppre_roleName", "");

						window.location.href = baseUrl+'account-list';
					},
					error:function(msg, status, error){
						console.log(msg)
						// window.location.href = baseUrl+'login';
					}
				}); 
			}

			function logout_account(user_id) {

				Swal.fire({
			        title: 'Yakin untuk keluar akun ini?',
			        text: "",
			        icon: 'question',
			        showCancelButton: true,
			        confirmButtonColor: '#d14529',
			        confirmButtonText: 'Ya, Keluar',
			        cancelButtonText: 'Batal',
			    }).then((result) => {

			        if (result.isConfirmed) {  

			        	let credentials_list = JSON.parse(localStorage.getItem("ppre_credential"))

			        	for(let cl in credentials_list) {
							let cred = credentials_list[cl]
							if (cred.ppre_userID == user_id) {
								var token_to_logout = cred.ppre_token
							}
						}

			        	$.ajax({
							url:urlApi+'logout',
							type:'POST',
							beforeSend: function (xhr) {
								xhr.setRequestHeader("Authorization","Bearer " + token_to_logout);
							},
							success:function(response){
								// console.log(response)

								let saved_credentials = JSON.parse(localStorage.getItem("ppre_credential"))
								let new_credentials = []

								for(let scr in saved_credentials) {
									let s_cred = saved_credentials[scr]
									if (s_cred.ppre_userID != user_id) {
										new_credentials.push(s_cred)
									}
								}

								const credentialSTRING = JSON.stringify(new_credentials);
		        				localStorage.setItem("ppre_credential", credentialSTRING);

		        				accountList()
							},
							error:function(msg, status, error){
								console.log(msg)
							}
						}); 
			        }
			    })
			}

			function addAccount() {
				window.location.href = baseUrl + "login" ;
			}

			function accountList() {
				let saved_credentials = JSON.parse(localStorage.getItem("ppre_credential"))

				$('#account-list').html('')

				for (sc in saved_credentials) {
					let scred = saved_credentials[sc]
					let index_item = sc

					$.ajax({
						url:urlApi+'check_token',
						type:'POST',
						beforeSend: function (xhr) {
							xhr.setRequestHeader("Authorization","Bearer " + scred.ppre_token);
						},
						success:function(response){
							var data_user = response.data.user
							// console.log(response)

							if(data_user !== false) {

								var htmlStatus = `&nbsp; <br> <a href="javascript:;" onclick="logout_account(${data_user.id})"><span class="fs-8 text-gray-400" >Keluar</span></a>`
								var htmlSwitch = `onclick="switchAccount(${index_item})"`
								var cssItem = `style="cursor: pointer;"`
								if (scred.status == 1) {
									htmlStatus = `&nbsp; <br> <span class="badge badge-light-success me-auto mb-2">Aktif</span> <br>`
									htmlSwitch = ``
									cssItem = ``
								}
								
								$('#account-list').append(`
									<div class="col-md-12  account-item pb-3 mb-2 mt-3 border border-left-0 border-right-0 border-top-0 border-dashed border-gray-300">
												<div class="row">
													<div class="col-md-9 row account_item_click mb-1" ${htmlSwitch} ${cssItem}>
														<div class="col-md-4">
															<div class="symbol symbol-55px symbol-circle ">
																<div class="symbol symbol-40px symbol-lg-50px" style="width: 100%;">
																	<span class="fs-2 symbol-label bg-primary text-inverse-primary initial_profile_${index_item}">-</span>
																</div>
															</div>
														</div>
														<div class="col-md-8">
															<span class="fw-bolder fs-6">${data_user.name}</span> <br> <span class="fs-8 text-gray-400" >${data_user.username}</span>
														</div>
													</div>
													
													<div class="col-md-3 text-center">
														 ${htmlStatus}
													</div>
												</div>
											</div>
											`)

								// generate initial profile
								var splitName=data_user.name.split(" ")
					            let initials =""
					            if(splitName.length>1){
					                initials = splitName.shift().charAt(0) + splitName.pop().charAt(0);
					            }else{
					                initials = splitName.shift().charAt(0)
					            }
								$('.initial_profile_'+index_item).html(initials.toUpperCase())

							}

							// update jumlah akun
							let saved_credentials = JSON.parse(localStorage.getItem("ppre_credential"))
							if (saved_credentials !== null) {
								$('#jumlah-akun').html(saved_credentials.length)	
							} else{
								$('#jumlah-akun').html('0 ')
							}

						},
						error:function(response){
							console.log(response.responseJSON)
						}
					});
				}

				$('#profil-nama').html(localStorage.getItem("ppre_userName"))
				$('#profil-role').html(localStorage.getItem("ppre_roleName"))
			}


			function switchAccount(param) {

				let saved_credentials = JSON.parse(localStorage.getItem("ppre_credential"))

            	var newCredentialJSON = []

                for (c in saved_credentials) {

                    let cred = saved_credentials[c]

                    if (cred.status == 1) {
                        var new_cred = {
                            "ppre_token" : cred.ppre_token,
                            "ppre_userID" :  cred.ppre_userID,
                            "ppre_userName" : cred.ppre_userName,
                            "ppre_roleID" : cred.ppre_roleID,
                            "ppre_roleName" : cred.ppre_roleName,
                            "status" : 0
                        }
                    }
                    else{

                    	if (c == param) {
	                    	var new_cred = {
	                            "ppre_token" : cred.ppre_token,
	                            "ppre_userID" :  cred.ppre_userID,
	                            "ppre_userName" : cred.ppre_userName,
	                            "ppre_roleID" : cred.ppre_roleID,
	                            "ppre_roleName" : cred.ppre_roleName,
	                            "status" : 1
	                        }
	                    } 
	                    else{
	                    	var new_cred = cred
	                    }
                    }

                    newCredentialJSON.push(new_cred)
                }

                const credentialSTRING = JSON.stringify(newCredentialJSON);
            	localStorage.setItem("ppre_credential", credentialSTRING);

                localStorage.setItem("ppre_token", saved_credentials[param].ppre_token);
            	localStorage.setItem("ppre_userID", saved_credentials[param].ppre_userID);
            	localStorage.setItem("ppre_userName", saved_credentials[param].ppre_userName);
            	localStorage.setItem("ppre_roleID", saved_credentials[param].ppre_roleID);
            	localStorage.setItem("ppre_roleName", saved_credentials[param].ppre_roleName);

            	window.location.href = baseUrl+'dashboard';
			}


			$(document).ready(function() {

				accountList()

				let saved_credentials = JSON.parse(localStorage.getItem("ppre_credential"))

				if (saved_credentials !== null) {
					$('#jumlah-akun').html(saved_credentials.length)	
				} else{
					$('#jumlah-akun').html('0 ')
				}

			});
		</script>

	</body>
</html>
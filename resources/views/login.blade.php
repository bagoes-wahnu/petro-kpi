
<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard ThemePurchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<meta charset="utf-8" />
		<title>PETROKIMIA KPI - Login</title>
		<meta name="description" content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<script src="{{asset('assets/plugins/jquery-3.5.1.min.js')}}"></script>
		<!--end::Global Stylesheets Bundle-->		
		<script>
			let baseUrl = "{{url('/')}}/";
			let urlApi = "{{url('/api')}}/";
		</script>
	</head>

{{-- {{ asset(' ')}} --}}

	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-white">

		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="container-fluid d-flex flex-column flex-lg-row-fluid w-lg-600px ">
					<div class="mt-8" style="padding-left:  15%;padding-top:  5%;">
						<span><img src="{{ asset('assets/media/logos/Group-4-1.png') }}" style="width: 20%"></span>
						<span><img src="{{ asset('assets/media/logos/image3.png') }}" style="width: 20%; margin-left: 10px;"></span>
                        <h1 class="mt-4"><b>PT. Petrokimia Gresik - Key Performance Indicator</b></h1>
                    	<p class="text-muted"><span>Evaluasi keberhasilan performa kerja pada PT. Petrokimia Gresik</span></p>
					</div>
					<div class="position-relative text-center" style="padding-top: 5%;">
						<img src="{{ asset('assets/media/logos/Group.png') }}" style="width: 50%; height:auto;"/>
					</div>
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-450px p-10 p-lg-10 mx-auto shadow p-3 mb-5 bg-white rounded">
							<!--begin::Form-->
							<form class="form w-100" id="" action="#">
								<div class="text-center mb-10">
									<h1 class="text-dark mb-3">Silahkan Masuk</h1>
									<h3 class="text-muted fw-bold fs-4">PT. Petrokimia Gresik</h3>
								</div>
								<div class="fv-row mb-7">
									<label class="form-label fs-6 fw-bolder text-dark">Username</label>
									<input class="form-control form-control-lg form-control-solid" id="xa-username" type="text" placeholder="Masukkan Username" autocomplete="off" />
								</div>
								<div class="fv-row mb-7">
									<div class="d-flex flex-stack mb-2">
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									</div>
									<input class="form-control form-control-lg form-control-solid pass" type="password" id="xa-password" name="password" placeholder="Masukkan Password" autocomplete="off" />
								</div>
								<div class="fv-row mb-7">
									<div class="d-flex mb-2">
										<input type="checkbox" class="form-check-input"><span style="margin-left:10px">Tampilkan Password</span>
									</div>
								</div>
								<div class="text-center">
									<button type="button" id="" class="btn btn-lg btn-success w-100 mb-5">
										<span class="indicator-label">Masuk</span>
										<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		{{-- {{ asset('/public') }}  --}}

		<script src="{{asset('assets/extends/js/login.js')}}"></script>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script>
			$(document).ready(function(){		
				$('.form-check-input').click(function(){
					if($(this).is(':checked')){
						$('.pass').attr('type','text');
					}else{
						$('.pass').attr('type','password');
					}
				});
			});
		</script>
	</body>
	<!--end::Body-->
</html>
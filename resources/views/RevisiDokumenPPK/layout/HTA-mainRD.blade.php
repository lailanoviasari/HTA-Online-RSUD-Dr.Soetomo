<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.1.7
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>@yield('title') </title>
    <meta charset="utf-8" />
    <meta name="description"
        content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
    <meta name="keywords"
        content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="dist/assets/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true"
    data-kt-app-sidebar-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }
            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }
            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            @include('HTA-layouts.HTA-header')
            
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                @include('RevisiDokumenPPK.layout.HTA-sidebarRD')

                @yield('content-RevisiDokumenPPK')

                @include('HTA-layouts.HTA-footer')


            </div>
            <!--end:::Main-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    <!--begin::Global Javascript Bundle-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.j') }}s"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>
    <script>
        $("#kt_datepicker_1").flatpickr()
    </script>
    
    
<!--begin::Java Script-->
<script>
	// Stepper lement
	var element = document.querySelector("#kt_stepper_example_basic");

	// Initialize Stepper
	var stepper = new KTStepper(element);

	// Handle next step
	stepper.on("kt.stepper.next", function (stepper) {
		stepper.goNext(); // go next step
	});

	// Handle previous step
	stepper.on("kt.stepper.previous", function (stepper) {
		stepper.goPrevious(); // go previous step
	});
</script>
<!--end::Java Script-->

<!--begin::JS Faidatun Nisa Vera Amanda (VERA)-->
<!--begin::JS ckeditor-->
<script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script>
	//introduction
	ClassicEditor
		.create(document.querySelector('#ckeditor_intro'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//methodology
	ClassicEditor
		.create(document.querySelector('#ckeditor_method'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//result	
	ClassicEditor
		.create(document.querySelector('#ckeditor_result'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//analysis		
	ClassicEditor
		.create(document.querySelector('#ckeditor_analys'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//discussion		
	ClassicEditor
		.create(document.querySelector('#ckeditor_discussion'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});
</script>
<!--end::JS ckeditor-->

<!--begin::JS Button Simpan-->
<script>
	const buttonSimpan = document.getElementById('btn_simpan');

	buttonSimpan.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Data sukses tersimpan.`,
			icon: "success",
			buttonsStyling: false,
			confirmButtonText: "Selesai!",
			customClass: {
				confirmButton: "btn btn-primary"
			}
		});
	});
</script>
<!--end::JS Button Simpan-->

<!--begin::JS Button simpan_full-->
<script>
	const buttonsimpan_full = document.getElementById('btn_simpan_full');

	buttonsimpan_full.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Data sukses tersimpan`,
			icon: "success",
			buttonsStyling: false,
			confirmButtonText: "Selesai!",
			customClass: {
				confirmButton: "btn btn-primary"
			}
		});
	});
</script>
<!--end::JS Button simpan_full-->
<!--end::JS Faidatun Nisa Vera Amanda (VERA)-->

<!--begin:: js lailanoviasari - viaaa-->
<!--begin:: js button-->
<script>
	const button1 = document.getElementById('btn_delete_literatur1');
	const button2 = document.getElementById('btn_delete_literatur2');
	const button3 = document.getElementById('btn_delete_literatur3');
	const button4 = document.getElementById('btn_delete_literatur4');
	const button5 = document.getElementById('btn_delete_literatur5');
	const button6 = document.getElementById('btn_delete_literatur6');
	const button7 = document.getElementById('btn_sv_chg');

	button1.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Apakah Anda ingin menghapus literatur ini?`,
			icon: "error",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: 'Tidak, Batalkan',
			customClass: {
				confirmButton: "btn btn-danger",
				cancelButton: 'btn btn-primary'
			}
		});
	});

	button2.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Apakah Anda ingin menghapus literatur ini?`,
			icon: "error",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: 'Tidak, Batalkan',
			customClass: {
				confirmButton: "btn btn-danger",
				cancelButton: 'btn btn-primary'
			}
		});
	});

	button3.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Apakah Anda ingin menghapus literatur ini?`,
			icon: "error",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: 'Tidak, Batalkan',
			customClass: {
				confirmButton: "btn btn-danger",
				cancelButton: 'btn btn-primary'
			}
		});
	});

	button4.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Apakah Anda ingin menghapus literatur ini?`,
			icon: "error",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: 'Tidak, Batalkan',
			customClass: {
				confirmButton: "btn btn-danger",
				cancelButton: 'btn btn-primary'
			}
		});
	});

	button5.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Apakah Anda ingin menghapus literatur ini?`,
			icon: "error",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: 'Tidak, Batalkan',
			customClass: {
				confirmButton: "btn btn-danger",
				cancelButton: 'btn btn-primary'
			}
		});
	});

	button6.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Apakah Anda ingin menghapus literatur ini?`,
			icon: "error",
			buttonsStyling: false,
			showCancelButton: true,
			confirmButtonText: "Ya, Hapus!",
			cancelButtonText: 'Tidak, Batalkan',
			customClass: {
				confirmButton: "btn btn-danger",
				cancelButton: 'btn btn-primary'
			}
		});
	});

	button7.addEventListener('click', e => {
		e.preventDefault();
		Swal.fire({
			html: `Data berhasil diedit`,
			icon: "success",
			buttonsStyling: false,
			confirmButtonText: "Selesai!",
			customClass: {
				confirmButton: "btn btn-primary"
			}
		});
	});
</script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
	ClassicEditor
		.create(document.querySelector('#editor'))
		.catch(error => {
			console.error(error);
		});
</script>
<!--end:: js button-->
<!--begin::js ckeditor-->
<script src="assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script>
	//ckeditor edit introduction
	ClassicEditor
		.create(document.querySelector('#ckeditor_edit_intro'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//ckeditor edit methodology
	ClassicEditor
		.create(document.querySelector('#ckeditor_edit_method'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//ckeditor edit result
	ClassicEditor
		.create(document.querySelector('#ckeditor_edit_result'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//ckeditor edit analysis
	ClassicEditor
		.create(document.querySelector('#ckeditor_edit_analys'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});

	//ckeditor edit discussion
	ClassicEditor
		.create(document.querySelector('#ckeditor_edit_discuss'))
		.then(editor => {
			console.log(editor);
		})
		.catch(error => {
			console.error(error);
		});
</script>
    
    <!--end::Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

@extends('RevisiDokumenPPK.layout.HTA-mainRD')
@section('title', 'HTA-Revisi Dokumen PPK')
@section('content-RevisiDokumenPPK')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <div class="page-title py-2 py-sm-0 d-flex flex-column justify-content-center mt-5">
                <!--begin::Tittle-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-6 flex-column justify-content-center my-0">
                    Pengajuan Revisi Dokumen Panduan Praktik Klinik</h1>
                <!--end::Tittle-->
            </div>
            <!--begin::Textbox-->
            <div class="card my-5 mb-xxl-8">
                <div class="card-body pt-9 pb-0">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                        <!--begin::Nav-->
                        <div class="stepper-nav flex-center flex-wrap mb-10">
                            <!--begin::Step 1-->
                            <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Step 1
                                        </h3>

                                        <div class="stepper-desc">
                                            Dokumen Tingkat Keterbutuhan
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Step 2
                                        </h3>

                                        <div class="stepper-desc">
                                            Dokumen Studi Literatur
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                <!--begin::Wrapper-->
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Step 3
                                        </h3>

                                        <div class="stepper-desc">
                                            Resume Pengajuan
                                        </div>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Line-->
                                <div class="stepper-line h-40px"></div>
                                <!--end::Line-->
                            </div>
                            <!--end::Step 3-->
                        </div>
                        <!--end::Nav-->

                        <!--begin::Form-->
                        <form class="form w-lg-900px mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                            <!--begin::Group-->
                            <div class="mb-5">
                                <!--begin::Step 1-->
                                <!--begin::Kaka-Musa-->
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Nama PPK*</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" name="input1"
                                            placeholder="" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <div class="fv-row mb-10">

                                        <label class="form-label">Alasan Revisi*</label>
                                        <div id="editor"></div>
                                    </div>
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Indikasi*</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <div class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input" name="jenkel" type="radio" value=""
                                                id="flexRadioDefault" />
                                            <label class="form-check-label" for="flexRadioDefault">
                                                High Volume
                                            </label>
                                            <input class="form-check-input" name="jenkel" type="radio" value=""
                                                id="flexRadioDefault" />
                                            <label class="form-check-label" for="flexRadioDefault">
                                                High Cost
                                            </label>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="fv-row mb-10">

                                        <label class="form-label">Fokus*</label>
                                        <div class="fv-row mb-10">

                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" name="jenkel" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label" for="flexRadioDefault">
                                                    Diagnostik
                                                </label>
                                                <input class="form-check-input" name="jenkel" type="radio" value=""
                                                    id="flexRadioDefault" />
                                                <label class="form-check-label" for="flexRadioDefault">
                                                    Terapi
                                                </label>
                                            </div>
                                        </div>
                                        <div class="fv-row mb-10">

                                            <label class="form-label">Unggah file PPK lama*</label>

                                            <input type="file" class="form-control fs-8" id="basic-url"
                                                aria-describedby="basic-addon3" />
                                        </div>
                                    </div>



                                </div>
                                <!--end::Step 1-->

                                <!--begin::Step 2-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <!--begin::Faidatun Nisa Vera Amanda (VERA)-->
                                    <div class="page-title fw-semibold fs-7 mb-4">
                                        <label>Panduan Levels of Evidence :</label>
                                    </div>
                                    <!--begin::Image 1-->
                                    <div type="button"
                                        class="symbol symbol-fixed symbol-100px symbol-lg-150px symbol-fixed position-relative mb-3"
                                        data-bs-toggle="modal" data-bs-target="#image1" align="center">
                                        <div class="row mw-250px">
                                            <img src="aset_kel3/RSUD SOETOMO.jpg" alt="image" />
                                        </div>
                                    </div>
                                    <div class="modal fade" tabindex="-1" id="image1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row mw-500px">
                                                        <img src="aset_kel3/RSUD SOETOMO.jpg" alt="image" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Image 1-->
                                    <!--begin::Image 2-->
                                    <div type="button"
                                        class="symbol symbol-fixed symbol-100px symbol-lg-150px symbol-fixed position-relative mb-3"
                                        data-bs-toggle="modal" data-bs-target="#image2" align="center">
                                        <div class="row mw-250px">
                                            <img src="aset_kel3/Dr Soetomo.jpg" alt="image" />
                                        </div>
                                    </div>
                                    <div class="modal fade" tabindex="-1" id="image2">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row mw-500px">
                                                        <img src="aset_kel3/Dr Soetomo.jpg" alt="image" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Image 2-->
                                    <div class="page-title fs-7 mb-5">
                                        <label>Klik pada gambar untuk melihat ukuran besar</label>
                                    </div>
                                    <!--begin::Button Studi Literatur-->
                                    <button type="button" class="btn btn-sm btn-danger hover-scale align-self-start mb-7"
                                        data-bs-toggle="modal" data-bs-target="#btn_studlit">
                                        Tambah Studi Literatur
                                    </button>
                                    <div class="modal fade" tabindex="-1" id="btn_studlit" data-bs-backdrop="static">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Form Tambah Studi Literatur</h3>
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm
                                                      btn-active-light-danger ms-2"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span
                                                            class="svg-icon svg-icon-muted
                                                         svg-icon-2hx">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="5"
                                                                    fill="currentColor" />
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45
                                                               8.41422 7)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <div class="modal-body">
                                                    <!--begin::Judul literatur-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Judul
                                                            literatur</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Judul literatur-->

                                                    <!--begin::Nama penulis-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Nama
                                                            penulis</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Nama penulis-->

                                                    <!--begin::Tahun terbit-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Tahun
                                                            terbit</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Tahun terbit-->

                                                    <!--begin::Topik literatur-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Topik
                                                            literatur</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Topik literatur-->

                                                    <!--begin::Introduction-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label for=""
                                                            class="required form-label">Introduction</label>
                                                        <textarea name="ckeditor_intro" id="ckeditor_intro">
                                                        </textarea>
                                                    </div>
                                                    <!--end::Introduction-->

                                                    <!--begin::Methodologi-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label for=""
                                                            class="required form-label">Methodologi</label>
                                                        <textarea name="ckeditor_method" id="ckeditor_method">
                                                        </textarea>
                                                    </div>
                                                    <!--end::Methodologi-->

                                                    <!--begin::Result-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label for="" class="required form-label">Result</label>
                                                        <textarea name="ckeditor_result" id="ckeditor_result">
                                                        </textarea>
                                                    </div>
                                                    <!--end::Result-->

                                                    <!--begin::Analysis-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label for="" class="required form-label">Analysis</label>
                                                        <textarea name="ckeditor_analys" id="ckeditor_analys">
                                                        </textarea>
                                                    </div>
                                                    <!--end::Analysis-->

                                                    <!--begin::Discussion-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label for=""
                                                            class="required form-label">Discussion</label>
                                                        <textarea name="ckeditor_discussion" id="ckeditor_discussion">
                                                        </textarea>
                                                    </div>
                                                    <!--end::Discussion-->

                                                    <!--begin::Evidence-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label class="required form-label fs-6">Level of
                                                            Evidence</label>
                                                        <div class="input-group">
                                                            <div
                                                                class="form-check form-check-custom form-check-solid mt-2">
                                                                <label class="form-check-label text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    1a
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    1b
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    1c
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    2a
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    2b
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    2c
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    3
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    4
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Evidence-->

                                                    <!--begin::Grade-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label class="required form-label fs-6">Grade of
                                                            Recommendation</label>
                                                        <div class="input-group">
                                                            <div
                                                                class="form-check form-check-custom form-check-solid mt-2">
                                                                <label class="form-check-label text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios2" />
                                                                    A
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios2" />
                                                                    B
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios2" />
                                                                    C
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Grade-->
                                                    <!--begin::Unggah file-->
                                                    <div class="mx-8 my-4 mb-8">
                                                        <label for="uplod image" class="required form-label">Unggah
                                                            File</label>
                                                        <input type="file" class="form-control"
                                                            placeholder="Unggah File Disini" />
                                                    </div>
                                                    <!--end::Unggah file-->
                                                </div>
                                                <!--begin::Button-->
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light"
                                                        data-bs-dismiss="modal">Kembali</button>
                                                    <button type="button" class="btn btn-primary"
                                                        id="btn_simpan"
                                                        data-bs-dismiss="modal">Simpan</button>
                                                </div>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Faidatun Nisa Vera Amanda (VERA)-->

                                    <!--begin::Laila Novia Sari - viaaa-->
                                    <!--begin::tabel literatur-->
                                    <div class="table-responsive" type="button" data-bs-toggle="modal"
                                        data-bs-target="#modal_view_litaratur">
                                        <table class="table table-hover border gy-7 gs-7" id="tabel_literatur">
                                            <thead class="border gy-7 gs-7">
                                                <tr class="fw-semibold fs-6 text-light bg-dark text-center">
                                                    <th class="min-w-200px">Judul Literatur</th>
                                                    <th class="min-w-100px">Penulis</th>
                                                    <th class="min-w-100px">Tahun Terbit</th>
                                                    <th class="min-w-100px">Topik Literatur</th>
                                                    <th class="min-w-100px">Introduction</th>
                                                    <th class="min-w-100px">Methodology</th>
                                                    <th class="min-w-100px">Results</th>
                                                    <th class="min-w-100px">Analysis</th>
                                                    <th class="min-w-100px">Discussion</th>
                                                    <th class="min-w-100px">Level of Evidence</th>
                                                    <th class="min-w-100px">Grade of Recommendation</th>
                                                    <th class="min-w-100px">File yang diunggah</th>
                                                    <th class="min-w-150px">Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody class="border gy-7 gs-7 text-center">
                                                <tr>
                                                    <td>Shorter androgen receptor polyQ alleles
                                                        protect against
                                                        life-threatening COVID-19 disease in
                                                        European males
                                                    </td>
                                                    <td>Margherita Baldassarri, Nicola Picchiotti
                                                    </td>
                                                    <td>2021</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>1a</td>
                                                    <td>A</td>
                                                    <td><a href="aset_kel3/jurnal1.pdf" target="_blank">jurnal1.pdf</a></td>
                                                    <td>
                                                        <div class="row">
                                                            <!--begin::tombol edit-->
                                                            <div class="col">
                                                                <a href="#"
                                                                    class="btn btn-icon
                                          btn-light-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_edit_literatur">
                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3" fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M2 4.63158C2 3.1782
                                                   3.1782 2
                                                   4.63158 2H13.47C14.0155 2 14.278 2.66919
                                                   13.8778
                                                   3.04006L12.4556 4.35821C11.9009 4.87228
                                                   11.1726
                                                   5.15789 10.4163 5.15789H7.1579C6.05333 5.15789
                                                   5.15789 6.05333 5.15789 7.1579V16.8421C5.15789
                                                   17.9467 6.05333 18.8421 7.1579
                                                   18.8421H16.8421C17.9467 18.8421 18.8421
                                                   17.9467
                                                   18.8421 16.8421V13.7518C18.8421 12.927 19.1817
                                                   12.1387 19.7809 11.572L20.9878 10.4308C21.3703
                                                   10.0691 22 10.3403 22 10.8668V19.3684C22
                                                   20.8218
                                                   20.8218 22 19.3684 22H4.63158C3.1782 22 2
                                                   20.8218 2
                                                   19.3684V4.63158Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M10.9256 11.1882C10.5351 10.7977
                                                   10.5351
                                                   10.1645 10.9256 9.77397L18.0669
                                                   2.6327C18.8479
                                                   1.85165 20.1143 1.85165 20.8953
                                                   2.6327L21.3665
                                                   3.10391C22.1476 3.88496 22.1476 5.15129
                                                   21.3665
                                                   5.93234L14.2252 13.0736C13.8347 13.4641
                                                   13.2016
                                                   13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M8.82343 12.0064L8.08852
                                                   14.3348C7.8655
                                                   15.0414 8.46151 15.7366 9.19388
                                                   15.6242L11.8974
                                                   15.2092C12.4642 15.1222 12.6916 14.4278
                                                   12.2861
                                                   14.0223L9.98595 11.7221C9.61452 11.3507
                                                   8.98154
                                                   11.5055 8.82343 12.0064Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </div>
                                                            <!--end::tombol edit-->
                                                            <!--begin::tombol hapus-->
                                                            <div class="col">
                                                                <button type="button"
                                                                    class="btn btn-icon
                                          btn-light-danger"
                                                                    id="btn_delete_literatur1">
                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen034.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24
                                                24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2"
                                                                                y="2" width="20"
                                                                                height="20" rx="5"
                                                                                fill="currentColor" />
                                                                            <rect x="7" y="15.3137"
                                                                                width="12" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-45 7
                                                   15.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="8.41422" y="7"
                                                                                width="12" height="2"
                                                                                rx="1"
                                                                                transform="rotate(45 8.41422
                                                   7)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </div>
                                                            <!--end::tombol hapus-->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Recovery scenario and immunity in COVID-19
                                                        disease: A
                                                        new strategy to predict the potential of
                                                        reinfection
                                                    </td>
                                                    <td>Zahra Khoshkam, Younes Aftabi</td>
                                                    <td>2021</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>2b</td>
                                                    <td>B</td>
                                                    <td><a href="aset_kel3/jurnal1.pdf" target="_blank">jurnal2.pdf</a></td>
                                                    <td>
                                                        <div class="row">
                                                            <!--begin::tombol edit-->
                                                            <div class="col">
                                                                <a href="#"
                                                                    class="btn btn-icon
                                          btn-light-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_edit_literatur">
                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3" fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M2 4.63158C2 3.1782 3.1782 2 4.63158
                                                   2H13.47C14.0155 2 14.278 2.66919
                                                   13.8778
                                                   3.04006L12.4556 4.35821C11.9009 4.87228
                                                   11.1726
                                                   5.15789 10.4163 5.15789H7.1579C6.05333
                                                   5.15789
                                                   5.15789 6.05333 5.15789
                                                   7.1579V16.8421C5.15789
                                                   17.9467 6.05333 18.8421 7.1579
                                                   18.8421H16.8421C17.9467 18.8421 18.8421
                                                   17.9467
                                                   18.8421 16.8421V13.7518C18.8421 12.927
                                                   19.1817
                                                   12.1387 19.7809 11.572L20.9878
                                                   10.4308C21.3703
                                                   10.0691 22 10.3403 22 10.8668V19.3684C22
                                                   20.8218
                                                   20.8218 22 19.3684 22H4.63158C3.1782 22 2
                                                   20.8218 2
                                                   19.3684V4.63158Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M10.9256 11.1882C10.5351 10.7977
                                                   10.5351
                                                   10.1645 10.9256 9.77397L18.0669
                                                   2.6327C18.8479
                                                   1.85165 20.1143 1.85165 20.8953
                                                   2.6327L21.3665
                                                   3.10391C22.1476 3.88496 22.1476 5.15129
                                                   21.3665
                                                   5.93234L14.2252 13.0736C13.8347 13.4641
                                                   13.2016
                                                   13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M8.82343 12.0064L8.08852
                                                   14.3348C7.8655
                                                   15.0414 8.46151 15.7366 9.19388
                                                   15.6242L11.8974
                                                   15.2092C12.4642 15.1222 12.6916 14.4278
                                                   12.2861
                                                   14.0223L9.98595 11.7221C9.61452 11.3507
                                                   8.98154
                                                   11.5055 8.82343 12.0064Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </div>
                                                            <!--end::tombol edit-->
                                                            <!--begin::tombol hapus-->
                                                            <div class="col">
                                                                <button type="button"
                                                                    class="btn btn-icon
                                          btn-light-danger"
                                                                    id="btn_delete_literatur2">
                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen034.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24
                                                24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2"
                                                                                y="2" width="20"
                                                                                height="20" rx="5"
                                                                                fill="currentColor" />
                                                                            <rect x="7" y="15.3137"
                                                                                width="12" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-45 7
                                                   15.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="8.41422" y="7"
                                                                                width="12" height="2"
                                                                                rx="1"
                                                                                transform="rotate(45 8.41422
                                                   7)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </div>
                                                            <!--end::tombol hapus-->
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Molecular diagnostic technologies for
                                                        COVID-19:
                                                        Limitations and challenges
                                                    </td>
                                                    <td>Adeel Afzal </td>
                                                    <td>2020</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>-</td>
                                                    <td>4</td>
                                                    <td>C</td>
                                                    <td><a href="aset_kel3/jurnal1.pdf" target="_blank">jurnal3.pdf</a></td>
                                                    <td>
                                                        <div class="row">
                                                            <!--begin::tombol edit-->
                                                            <div class="col">
                                                                <a href="#"
                                                                    class="btn btn-icon
                                          btn-light-warning"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#modal_edit_literatur">
                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24
                                                24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3" fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M2 4.63158C2
                                                   3.1782
                                                   3.1782 2
                                                   4.63158 2H13.47C14.0155 2 14.278
                                                   2.66919
                                                   13.8778
                                                   3.04006L12.4556 4.35821C11.9009
                                                   4.87228
                                                   11.1726
                                                   5.15789 10.4163
                                                   5.15789H7.1579C6.05333
                                                   5.15789
                                                   5.15789 6.05333 5.15789
                                                   7.1579V16.8421C5.15789
                                                   17.9467 6.05333 18.8421 7.1579
                                                   18.8421H16.8421C17.9467 18.8421
                                                   18.8421
                                                   17.9467
                                                   18.8421 16.8421V13.7518C18.8421
                                                   12.927
                                                   19.1817
                                                   12.1387 19.7809 11.572L20.9878
                                                   10.4308C21.3703
                                                   10.0691 22 10.3403 22
                                                   10.8668V19.3684C22
                                                   20.8218
                                                   20.8218 22 19.3684 22H4.63158C3.1782
                                                   22
                                                   2
                                                   20.8218 2
                                                   19.3684V4.63158Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M10.9256 11.1882C10.5351
                                                   10.7977
                                                   10.5351
                                                   10.1645 10.9256 9.77397L18.0669
                                                   2.6327C18.8479
                                                   1.85165 20.1143 1.85165 20.8953
                                                   2.6327L21.3665
                                                   3.10391C22.1476 3.88496 22.1476
                                                   5.15129
                                                   21.3665
                                                   5.93234L14.2252 13.0736C13.8347
                                                   13.4641
                                                   13.2016
                                                   13.4641 12.811 13.0736L10.9256
                                                   11.1882Z"
                                                                                fill="currentColor" />
                                                                            <path
                                                                                d="M8.82343 12.0064L8.08852
                                                   14.3348C7.8655
                                                   15.0414 8.46151 15.7366 9.19388
                                                   15.6242L11.8974
                                                   15.2092C12.4642 15.1222 12.6916
                                                   14.4278
                                                   12.2861
                                                   14.0223L9.98595 11.7221C9.61452
                                                   11.3507
                                                   8.98154
                                                   11.5055 8.82343 12.0064Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </div>
                                                            <!--end::tombol edit-->
                                                            <!--begin::tombol hapus-->
                                                            <div class="col">
                                                                <button type="button"
                                                                    class="btn
                                          btn-icon
                                          btn-light-danger"
                                                                    id="btn_delete_literatur3">
                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen034.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0
                                                24
                                                24"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <rect opacity="0.3" x="2"
                                                                                y="2" width="20"
                                                                                height="20" rx="5"
                                                                                fill="currentColor" />
                                                                            <rect x="7" y="15.3137"
                                                                                width="12" height="2"
                                                                                rx="1"
                                                                                transform="rotate(-45 7
                                                   15.3137)"
                                                                                fill="currentColor" />
                                                                            <rect x="8.41422" y="7"
                                                                                width="12" height="2"
                                                                                rx="1"
                                                                                transform="rotate(45
                                                   8.41422
                                                   7)"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </button>
                                                            </div>
                                                            <!--end::tombol hapus-->
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--end::tabel literatur-->
                                    <!--begin::modal edit literatur-->
                                    <div class="modal fade text-start" tabindex="-1" id="modal_edit_literatur"
                                        data-bs-backdrop="static">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>Form Edit Studi Literatur
                                                    </h3>
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-light-danger ms-2"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span
                                                            class="svg-icon svg-icon-muted svg-icon-2hx">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="5"
                                                                    fill="currentColor" />
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <div class="modal-body">
                                                    <!--begin::Judul literatur-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Judul
                                                            literatur</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Judul literatur-->

                                                    <!--begin::Nama penulis-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Nama
                                                            penulis</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Nama penulis-->

                                                    <!--begin::Tahun terbit-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Tahun
                                                            terbit</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Tahun terbit-->

                                                    <!--begin::Topik literatur-->
                                                    <div class="mb-5 mx-8 my-4 ">
                                                        <label for="" class="required form-label">Topik
                                                            literatur</label>
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                    <!--end::Topik literatur-->

                                                    <!--begin::Introduction-->
                                                    <div class="mb-3 mx-8 my-4">
                                                        <label for="" class="form-label">Introduction</label>
                                                        <textarea name="ckeditor_edit" id="ckeditor_edit_intro"></textarea>
                                                    </div>
                                                    <!--end::Introduction-->
                                                    <!--begin::Methodologi-->
                                                    <div class="mb-3 mx-8 my-4">
                                                        <label for="" class="form-label">Methodologi</label>
                                                        <textarea name="ckeditor_edit" id="ckeditor_edit_method"></textarea>
                                                    </div>
                                                    <!--end::Methodologi-->
                                                    <!--begin::Result-->
                                                    <div class="mb-3 mx-8 my-4">
                                                        <label for="" class="form-label">Result</label>
                                                        <textarea name="ckeditor_edit" id="ckeditor_edit_result"></textarea>
                                                    </div>
                                                    <!--end::Result-->
                                                    <!--begin::Analysis-->
                                                    <div class="mb-3 mx-8 my-4">
                                                        <label for="" class="form-label">Analysis</label>
                                                        <textarea name="ckeditor_edit" id="ckeditor_edit_analys"></textarea>
                                                    </div>
                                                    <!--end::Analysis-->
                                                    <!--begin::Discussion-->
                                                    <div class="mb-4 mx-8 my-4">
                                                        <label for="" class="form-label">Discussion</label>
                                                        <textarea name="ckeditor_edit" id="ckeditor_edit_discuss"></textarea>
                                                    </div>
                                                    <!--end::Discussion-->
                                                    <!--begin::Evidence-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label class="required form-label fs-6">Level
                                                            of
                                                            Evidence</label>
                                                        <div class="input-group">
                                                            <div
                                                                class="form-check form-check-custom form-check-solid mt-2">
                                                                <label class="form-check-label text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    1a
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    1b
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    1c
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    2a
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    2b
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    2c
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    3
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios1" />
                                                                    4
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Evidence-->

                                                    <!--begin::Grade-->
                                                    <div class="mb-5 mx-8 my-4">
                                                        <label class="required form-label fs-6">Grade
                                                            of
                                                            Recommendation</label>
                                                        <div class="input-group">
                                                            <div
                                                                class="form-check form-check-custom form-check-solid mt-2">
                                                                <label class="form-check-label text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios2" />
                                                                    A
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios2" />
                                                                    B
                                                                </label>
                                                                <label class="form-check-label ms-5 fs-7 text-dark">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="radios2" />
                                                                    C
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Grade-->
                                                    <!--begin::Unggah file-->
                                                    <div class="mx-8 my-4 mb-8">
                                                        <label for="uplod image" class="required form-label">Unggah
                                                            File</label>
                                                        <input type="file" class="form-control"
                                                            placeholder="Unggah File Disini" />
                                                    </div>
                                                    <!--end::Unggah file-->
                                                    <!--begin::Button-->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Kembali</button>
                                                        <button type="button" class="btn btn-danger" id="btn_sv_chg"
                                                            data-bs-dismiss="modal">Simpan</button>
                                                    </div>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::modal edit literatur-->
                                    <!--begin::modal view tabel litaratur-->
                                    <div class="modal fade" tabindex="-1" id="modal_view_litaratur"
                                        data-bs-backdrop="static">
                                        <div class="modal-dialog modal-dialog-centered modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3>View tabel Studi Literatur</h3>
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm
                                                      btn-active-light-danger ms-2"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span
                                                            class="svg-icon svg-icon-muted
                                                         svg-icon-2hx">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="5"
                                                                    fill="currentColor" />
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)"
                                                                    fill="currentColor" />
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45
                                                               8.41422 7)"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <div class="modal-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover border gy-7 gs-7"
                                                            id="tabel_literatur">
                                                            <thead class="border gy-7 gs-7">
                                                                <tr
                                                                    class="fw-semibold fs-6 text-light bg-dark text-center">
                                                                    <th class="min-w-200px">Judul Literatur
                                                                    </th>
                                                                    <th class="min-w-100px">Penulis</th>
                                                                    <th class="min-w-100px">Tahun Terbit
                                                                    </th>
                                                                    <th class="min-w-100px">Topik Literatur
                                                                    </th>
                                                                    <th class="min-w-100px">Introduction
                                                                    </th>
                                                                    <th class="min-w-100px">Methodology</th>
                                                                    <th class="min-w-100px">Results</th>
                                                                    <th class="min-w-100px">Analysis</th>
                                                                    <th class="min-w-100px">Discussion</th>
                                                                    <th class="min-w-100px">Level of
                                                                        Evidence</th>
                                                                    <th class="min-w-100px">Grade of
                                                                        Recommendation
                                                                    </th>
                                                                    <th class="min-w-100px">File yang
                                                                        diunggah</th>
                                                                    <th class="min-w-150px">Tindakan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="border gy-7 gs-7 text-center">
                                                                <tr>
                                                                    <td>Shorter androgen receptor polyQ
                                                                        alleles
                                                                        protect against
                                                                        life-threatening COVID-19 disease in
                                                                        European males
                                                                    </td>
                                                                    <td>Margherita Baldassarri, Nicola
                                                                        Picchiotti
                                                                    </td>
                                                                    <td>2021</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>1a</td>
                                                                    <td>A</td>
                                                                    <td><a href="aset_kel3/jurnal1.pdf"
                                                                            target="_blank">jurnal1.pdf</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="row">
                                                                            <!--begin::tombol edit-->
                                                                            <div class="col">
                                                                                <a href="#"
                                                                                    class="btn btn-icon
                                          btn-light-warning"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modal_edit_literatur">
                                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3"
                                                                                                fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M2 4.63158C2 3.1782
                                                   3.1782 2
                                                   4.63158 2H13.47C14.0155 2 14.278 2.66919
                                                   13.8778
                                                   3.04006L12.4556 4.35821C11.9009 4.87228
                                                   11.1726
                                                   5.15789 10.4163 5.15789H7.1579C6.05333 5.15789
                                                   5.15789 6.05333 5.15789 7.1579V16.8421C5.15789
                                                   17.9467 6.05333 18.8421 7.1579
                                                   18.8421H16.8421C17.9467 18.8421 18.8421
                                                   17.9467
                                                   18.8421 16.8421V13.7518C18.8421 12.927 19.1817
                                                   12.1387 19.7809 11.572L20.9878 10.4308C21.3703
                                                   10.0691 22 10.3403 22 10.8668V19.3684C22
                                                   20.8218
                                                   20.8218 22 19.3684 22H4.63158C3.1782 22 2
                                                   20.8218 2
                                                   19.3684V4.63158Z"
                                                                                                fill="currentColor" />
                                                                                            <path
                                                                                                d="M10.9256 11.1882C10.5351 10.7977
                                                   10.5351
                                                   10.1645 10.9256 9.77397L18.0669
                                                   2.6327C18.8479
                                                   1.85165 20.1143 1.85165 20.8953
                                                   2.6327L21.3665
                                                   3.10391C22.1476 3.88496 22.1476 5.15129
                                                   21.3665
                                                   5.93234L14.2252 13.0736C13.8347 13.4641
                                                   13.2016
                                                   13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                                                fill="currentColor" />
                                                                                            <path
                                                                                                d="M8.82343 12.0064L8.08852
                                                   14.3348C7.8655
                                                   15.0414 8.46151 15.7366 9.19388
                                                   15.6242L11.8974
                                                   15.2092C12.4642 15.1222 12.6916 14.4278
                                                   12.2861
                                                   14.0223L9.98595 11.7221C9.61452 11.3507
                                                   8.98154
                                                   11.5055 8.82343 12.0064Z"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </a>
                                                                            </div>
                                                                            <!--end::tombol edit-->
                                                                            <!--begin::tombol hapus-->
                                                                            <div class="col">
                                                                                <button type="button"
                                                                                    class="btn btn-icon
                                          btn-light-danger"
                                                                                    id="btn_delete_literatur4">
                                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen034.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24
                                                24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect opacity="0.3"
                                                                                                x="2"
                                                                                                y="2"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                rx="5"
                                                                                                fill="currentColor" />
                                                                                            <rect x="7"
                                                                                                y="15.3137"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-45 7
                                                   15.3137)"
                                                                                                fill="currentColor" />
                                                                                            <rect x="8.41422"
                                                                                                y="7"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(45 8.41422
                                                   7)"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </div>
                                                                            <!--end::tombol hapus-->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Recovery scenario and immunity in
                                                                        COVID-19
                                                                        disease: A
                                                                        new strategy to predict the
                                                                        potential of
                                                                        reinfection
                                                                    </td>
                                                                    <td>Zahra Khoshkam, Younes Aftabi</td>
                                                                    <td>2021</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>2b</td>
                                                                    <td>B</td>
                                                                    <td><a href="aset_kel3/jurnal1.pdf"
                                                                            target="_blank">jurnal2.pdf</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="row">
                                                                            <!--begin::tombol edit-->
                                                                            <div class="col">
                                                                                <a href="#"
                                                                                    class="btn btn-icon
                                          btn-light-warning"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modal_edit_literatur">
                                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3"
                                                                                                fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M2 4.63158C2 3.1782 3.1782 2 4.63158
                                                   2H13.47C14.0155 2 14.278 2.66919
                                                   13.8778
                                                   3.04006L12.4556 4.35821C11.9009 4.87228
                                                   11.1726
                                                   5.15789 10.4163 5.15789H7.1579C6.05333
                                                   5.15789
                                                   5.15789 6.05333 5.15789
                                                   7.1579V16.8421C5.15789
                                                   17.9467 6.05333 18.8421 7.1579
                                                   18.8421H16.8421C17.9467 18.8421 18.8421
                                                   17.9467
                                                   18.8421 16.8421V13.7518C18.8421 12.927
                                                   19.1817
                                                   12.1387 19.7809 11.572L20.9878
                                                   10.4308C21.3703
                                                   10.0691 22 10.3403 22 10.8668V19.3684C22
                                                   20.8218
                                                   20.8218 22 19.3684 22H4.63158C3.1782 22 2
                                                   20.8218 2
                                                   19.3684V4.63158Z"
                                                                                                fill="currentColor" />
                                                                                            <path
                                                                                                d="M10.9256 11.1882C10.5351 10.7977
                                                   10.5351
                                                   10.1645 10.9256 9.77397L18.0669
                                                   2.6327C18.8479
                                                   1.85165 20.1143 1.85165 20.8953
                                                   2.6327L21.3665
                                                   3.10391C22.1476 3.88496 22.1476 5.15129
                                                   21.3665
                                                   5.93234L14.2252 13.0736C13.8347 13.4641
                                                   13.2016
                                                   13.4641 12.811 13.0736L10.9256 11.1882Z"
                                                                                                fill="currentColor" />
                                                                                            <path
                                                                                                d="M8.82343 12.0064L8.08852
                                                   14.3348C7.8655
                                                   15.0414 8.46151 15.7366 9.19388
                                                   15.6242L11.8974
                                                   15.2092C12.4642 15.1222 12.6916 14.4278
                                                   12.2861
                                                   14.0223L9.98595 11.7221C9.61452 11.3507
                                                   8.98154
                                                   11.5055 8.82343 12.0064Z"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </a>
                                                                            </div>
                                                                            <!--end::tombol edit-->
                                                                            <!--begin::tombol hapus-->
                                                                            <div class="col">
                                                                                <button type="button"
                                                                                    class="btn btn-icon
                                          btn-light-danger"
                                                                                    id="btn_delete_literatur5">
                                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen034.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24
                                                24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect opacity="0.3"
                                                                                                x="2"
                                                                                                y="2"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                rx="5"
                                                                                                fill="currentColor" />
                                                                                            <rect x="7"
                                                                                                y="15.3137"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-45 7
                                                   15.3137)"
                                                                                                fill="currentColor" />
                                                                                            <rect x="8.41422"
                                                                                                y="7"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(45 8.41422
                                                   7)"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </div>
                                                                            <!--end::tombol hapus-->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Molecular diagnostic technologies
                                                                        for
                                                                        COVID-19:
                                                                        Limitations and challenges
                                                                    </td>
                                                                    <td>Adeel Afzal </td>
                                                                    <td>2020</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>-</td>
                                                                    <td>4</td>
                                                                    <td>C</td>
                                                                    <td><a href="aset_kel3/jurnal1.pdf"
                                                                            target="_blank">jurnal3.pdf</a>
                                                                    </td>
                                                                    <td>
                                                                        <div class="row">
                                                                            <!--begin::tombol edit-->
                                                                            <div class="col">
                                                                                <a href="#"
                                                                                    class="btn btn-icon
                                          btn-light-warning"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#modal_edit_literatur">
                                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen055.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0 24
                                                24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <path opacity="0.3"
                                                                                                fill-rule="evenodd"
                                                                                                clip-rule="evenodd"
                                                                                                d="M2 4.63158C2
                                                   3.1782
                                                   3.1782 2
                                                   4.63158 2H13.47C14.0155 2 14.278
                                                   2.66919
                                                   13.8778
                                                   3.04006L12.4556 4.35821C11.9009
                                                   4.87228
                                                   11.1726
                                                   5.15789 10.4163
                                                   5.15789H7.1579C6.05333
                                                   5.15789
                                                   5.15789 6.05333 5.15789
                                                   7.1579V16.8421C5.15789
                                                   17.9467 6.05333 18.8421 7.1579
                                                   18.8421H16.8421C17.9467 18.8421
                                                   18.8421
                                                   17.9467
                                                   18.8421 16.8421V13.7518C18.8421
                                                   12.927
                                                   19.1817
                                                   12.1387 19.7809 11.572L20.9878
                                                   10.4308C21.3703
                                                   10.0691 22 10.3403 22
                                                   10.8668V19.3684C22
                                                   20.8218
                                                   20.8218 22 19.3684 22H4.63158C3.1782
                                                   22
                                                   2
                                                   20.8218 2
                                                   19.3684V4.63158Z"
                                                                                                fill="currentColor" />
                                                                                            <path
                                                                                                d="M10.9256 11.1882C10.5351
                                                   10.7977
                                                   10.5351
                                                   10.1645 10.9256 9.77397L18.0669
                                                   2.6327C18.8479
                                                   1.85165 20.1143 1.85165 20.8953
                                                   2.6327L21.3665
                                                   3.10391C22.1476 3.88496 22.1476
                                                   5.15129
                                                   21.3665
                                                   5.93234L14.2252 13.0736C13.8347
                                                   13.4641
                                                   13.2016
                                                   13.4641 12.811 13.0736L10.9256
                                                   11.1882Z"
                                                                                                fill="currentColor" />
                                                                                            <path
                                                                                                d="M8.82343 12.0064L8.08852
                                                   14.3348C7.8655
                                                   15.0414 8.46151 15.7366 9.19388
                                                   15.6242L11.8974
                                                   15.2092C12.4642 15.1222 12.6916
                                                   14.4278
                                                   12.2861
                                                   14.0223L9.98595 11.7221C9.61452
                                                   11.3507
                                                   8.98154
                                                   11.5055 8.82343 12.0064Z"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </a>
                                                                            </div>
                                                                            <!--end::tombol edit-->
                                                                            <!--begin::tombol hapus-->
                                                                            <div class="col">
                                                                                <button type="button"
                                                                                    class="btn
                                          btn-icon
                                          btn-light-danger"
                                                                                    id="btn_delete_literatur6">
                                                                                    <!--begin::Svg Icon | path: /var/www/preview.keenthemes.com/kt-products/docs/metronic/html/releases/2023-01-30-131017/core/html/src/media/icons/duotune/general/gen034.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-muted
                                             svg-icon-2hx">
                                                                                        <svg width="24" height="24"
                                                                                            viewBox="0 0
                                                24
                                                24"
                                                                                            fill="none"
                                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                                            <rect opacity="0.3"
                                                                                                x="2"
                                                                                                y="2"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                rx="5"
                                                                                                fill="currentColor" />
                                                                                            <rect x="7"
                                                                                                y="15.3137"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-45 7
                                                   15.3137)"
                                                                                                fill="currentColor" />
                                                                                            <rect x="8.41422"
                                                                                                y="7"
                                                                                                width="12"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(45
                                                   8.41422
                                                   7)"
                                                                                                fill="currentColor" />
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </button>
                                                                            </div>
                                                                            <!--end::tombol hapus-->
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                    <!--end::Button-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::modal view tabel literatur-->
                                    <!--end::Laila Novia Sari - viaaa-->
                                </div>
                                <!--end::Step 2-->

                                <!--begin::Step 3-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="ms-15 mb-5 mt-5">

                                        <div class="row mb-4">
                                            <h6>Data Pengusul :</h6>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Nama</label>
                                            <div class="col-lg-8">Lia, S.Kom., M.Kom.
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">NIP/NIPTT-PK</label>
                                            <div class="col-lg-8">301-28091989-012017-8719
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Jabatan</label>
                                            <div class="col-lg-8">Pengelola Teknologi Informasi
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Unit Kerja</label>
                                            <div class="col-lg-8">Instalasi Teknologi Komunikasi dan
                                                Informasi
                                            </div>
                                        </div>

                                        <div class="row mb-4 mt-10">
                                            <h6>Dokumen Tingkat Keterbukaan :</h6>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Nama PPK</label>
                                            <div class="col-lg-8">-
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Alasan Revisi</label>
                                            <div class="col-lg-8">-
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Indikasi</label>
                                            <div class="col-lg-8">High Volume
                                            </div>
                                        </div>

                                        <div class="row mb-2">
                                            <label class="col-lg-4">Fokus</label>
                                            <div class="col-lg-8">Diagnostik
                                            </div>
                                        </div>
                                        <div class="row mb-2">
                                            <label class="col-lg-4">Unggah File PPK Lama</label>
                                            <a class="col-lg-8" data-bs-toggle="modal" data-bs-target="#fileLama">
                                                Jurnal.pdf</a>
                                            <div class="modal fade" tabindex="-0" id="fileLama">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h3 class="modal-title">File PPK Lama</h3>
                                                            <!--begin::Close-->
                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span class="svg-icon svg-icon-1"></span>
                                                            </div>
                                                            <!--end::Close-->
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row mw-500px">
                                                                <embed src="aset_kel3/jurnal1.pdf" type="application/pdf"
                                                                    height="600px"  width="500">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-light"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-4 mt-10">
                                            <h6>Dokumen Studi Literatur :</h6>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table table-hover border gy-7 gs-7">
                                                <thead class="border gy-7 gs-7">
                                                    <tr class="fw-semibold fs-6 text-light bg-dark text-center">
                                                        <th class="min-w-200px">Judul Literatur</th>
                                                        <th class="min-w-100px">Penulis</th>
                                                        <th class="min-w-100px">Tahun Terbit</th>
                                                        <th class="min-w-100px">Topik Literatur</th>
                                                        <th class="min-w-100px">Introduction</th>
                                                        <th class="min-w-100px">Methodology</th>
                                                        <th class="min-w-100px">Results</th>
                                                        <th class="min-w-100px">Analysis</th>
                                                        <th class="min-w-100px">Discussion</th>
                                                        <th class="min-w-100px">Level of Evidence</th>
                                                        <th class="min-w-100px">Grade of Recommendation</th>
                                                        <th class="min-w-100px">File yang Diunggah</th>
                                                        <th class="min-w-150px">Tindakan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border gy-7 gs-7 text-center">
                                                        <td>Shorter androgen receptor patyQ atteles protect
                                                            against life-threatening COVID-19 disease in
                                                            European males</td>
                                                        <td>Margherita Baldassari Nichola Picchiotti</td>
                                                        <td>2021</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>1a</td>
                                                        <td>A</td>
                                                        <td>
                                                            <a class="col-lg-8" data-bs-toggle="modal"
                                                                data-bs-target="#jurnal1">
                                                                Jurnal1.pdf</a>
                                                            <div class="modal fade" tabindex="-0" id="jurnal1">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">File
                                                                                yang Diunggah</h3>
                                                                            <!--begin::Close-->
                                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span class="svg-icon svg-icon-1"></span>
                                                                            </div>
                                                                            <!--end::Close-->
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row mw-500px">
                                                                                <embed src="aset_kel3/jurnal1.pdf"
                                                                                    type="application/pdf" height="600px"
                                                                                    width="500">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr class="border gy-7 gs-7 text-center">
                                                        <td>Recovery scenario and immunity in COVID-19
                                                            disease A new strategy to predict the potential
                                                            of reinfection</td>
                                                        <td>Zahra Khashkam</td>
                                                        <td>2021</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>2b</td>
                                                        <td>B</td>
                                                        <td>
                                                            <a class="col-lg-8" data-bs-toggle="modal"
                                                                data-bs-target="#jurnal2">
                                                                Jurnal2.pdf</a>
                                                            <div class="modal fade" tabindex="-0" id="jurnal2">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">File
                                                                                yang Diunggah</h3>
                                                                            <!--begin::Close-->
                                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span class="svg-icon svg-icon-1"></span>
                                                                            </div>
                                                                            <!--end::Close-->
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row mw-500px">
                                                                                <embed src="aset_kel3/jurnal1.pdf"
                                                                                    type="application/pdf" height="600px"
                                                                                    width="500">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>-</td>
                                                    </tr>
                                                    <tr class="border gy-7 gs-7 text-center">
                                                        <td>Molecular diagnostic technologies for COVID-19
                                                            Umitations and challenges</td>
                                                        <td>Adeef Afzal</td>
                                                        <td>2020</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td>4</td>
                                                        <td>C</td>
                                                        <td>
                                                            <a class="col-lg-8" data-bs-toggle="modal"
                                                                data-bs-target="#jurnal3">
                                                                Jurnal3.pdf</a>
                                                            <div class="modal fade" tabindex="-0" id="jurnal3">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h3 class="modal-title">File
                                                                                yang Diunggah</h3>
                                                                            <!--begin::Close-->
                                                                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                                                data-bs-dismiss="modal"
                                                                                aria-label="Close">
                                                                                <span class="svg-icon svg-icon-1"></span>
                                                                            </div>
                                                                            <!--end::Close-->
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <div class="row mw-500px">
                                                                                <embed src="aset_kel3/jurnal1.pdf"
                                                                                    type="application/pdf" height="600px"
                                                                                    width="500">
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light"
                                                                                data-bs-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>-</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="modal fade" tabindex="-1" id="z">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h3 class="modal-title">Modal title
                                                        </h3>

                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <span class="svg-icon svg-icon-1"></span>
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>

                                                    <div class="modal-body">
                                                        <img src="assets/ss.png" type="application/pdf" height="700px"
                                                            width="450">
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Step 3-->
                            </div>
                            <!--end::Group-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                        data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>

                <!--begin::Button simpan-->
                <button type="button" id="btn_simpan_full"
                    class="btn btn-primary align-self-center mb-4">Simpan</button>
                <!--end::Button simpan-->
            </div>
            <!--end::Content container-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Content wrapper-->
@endsection

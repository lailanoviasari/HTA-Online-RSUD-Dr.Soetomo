@extends('HTA-layouts.HTA-main')
@section('title', 'Informasi Pengajuan')
@section('content-InformasiPengajuan')
    <!--begin::Content-->
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl h-6000px">
            <div class="d-flex flex-wrap flex-stack fs-2 mb-5 mt-3">
                <!--begin:: Faidatun Nisa Vera Amanda-->
                <!--begin::Heading-->
                <h2 class="fw-bold my-2">Pengajuan (Verifikator Kepala)</h2>
                <!--end::Heading-->
                <!--begin::Actions-->
                <div class="d-flex flex-wrap my-2">
                    <button type="button" class="btn btn-primary mt-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-envelope-fill" viewBox="0 2 16 16">
                            <path
                                d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z">
                            </path>
                        </svg>
                        Notifikasi
                    </button>
                </div>
                <!--end::Actions-->
                <!--end:: Faidatun Nisa Vera Amanda-->
            </div>

            <!--begin:: Faidatun Nisa Vera Amanda-->
            <!--begin::Pencarian-->
            <div class="card shadow-sm mb-10">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <h3 class="modal-title mt-7">
                        <i class="bi bi-search fs-2 text-primary me-2"></i>
                        Pencarian
                    </h3>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->

                <!--begin::Form-->
                <form id="kt_pencarian_form" class="form">
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::2 bagian pertama-->
                        <div class="row mb-5 ms-5 me-5">
                            <!--begin::Tanggal-->
                            <div class="col-xl-6">
                                <label class="form-label">Tanggal</label>
                                <input class="form-control" placeholder="24/03/2023" id="kt_datepicker_1" />
                            </div>
                            <!--end::Tanggal-->

                            <!--begin::Jenis pengajuan-->
                            <div class="col-xl-6">
                                <label class="form-label fs-6">Jenis Pengajuan</label>
                                <div class="input-group">
                                    <select class="form-select fs-6 text-dark" data-control="select2"
                                        data-placeholder="--Pilih Jenis Pengajuan--">
                                        <option></option>
                                        <option value="1">Alat Teknologi Kesehatan</option>
                                        <option value="2">Obat</option>
                                        <option value="3">Revisi Dokumen</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Jenis pengajuan-->
                        </div>
                        <!--end::2 bagian pertama-->

                        <!--begin::2 bagian kedua-->
                        <div class="row mb-5 ms-5 me-5">
                            <!--begin::Status-->
                            <div class="col-xl-6">
                                <label class="form-label fs-6">Status</label>
                                <div class="input-group">
                                    <select class="form-select fs-6 text-dark" data-control="select2"
                                        data-placeholder="--Pilih Status--">
                                        <option></option>
                                        <option value="1">Belum Diverifikasi</option>
                                        <option value="2">Direkomendasikan</option>
                                        <option value="3">Ditolak</option>
                                        <option value="4">Semua</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Status-->

                            <!--begin::Unit kerja-->
                            <div class="col-xl-6">
                                <label class="form-label fs-6">Unit Kerja</label>
                                <div class="input-group">
                                    <select class="form-select fs-6 text-dark" data-control="select2"
                                        data-placeholder="--Pilih Unit Kerja--">
                                        <option></option>
                                        <option value="1">KSM Andrologi</option>
                                        <option value="2">KSM Neurologi</option>
                                        <option value="3">Semua</option>
                                    </select>
                                </div>
                            </div>
                            <!--end::Unit kerja-->
                        </div>
                        <!--end::2 bagian kedua-->

                        <!--begin::2 bagian ketiga-->
                        <div class="row mb-5 ms-5 me-5">
                            <!--begin::Status-->
                            <div class="col-xl-6">
                                <label for="" class="form-label">Nama Pengajuan</label>
                                <input type="text" class="form-control" />
                            </div>
                            <!--end::Status-->

                            <!--begin::Unit kerja-->
                            <div class="col-xl-6">
                                <label for="" class="form-label">No. Pengajuan</label>
                                <input type="text" class="form-control" />
                            </div>
                            <!--end::Unit kerja-->
                        </div>
                        <!--end::2 bagian ketiga-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-first py-6 px-9">
                        <button type="submit" class="btn btn-danger" id="kt_pencarian_submit">Cari</button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Pencarian-->
            <!--end:: Faidatun Nisa Vera Amanda-->
            <!--begin::VITA RAHMADA-->
            <div class="card shadow-sm mb-10" id="card_informasi">
                <!--begin::header informasi-->
                <div class="card-header">
                    <h3 class="modal-title mt-7"><i class="bi bi-files fs-2x text-primary"></i>
                        Informasi</h3>
                    <div class="row">
                        <div class="col mt-4">
                            <button target="_blank" type="button" class="btn btn-light-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-printer" viewBox="0 0 16 16">
                                    <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"></path>
                                    <path
                                        d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-light-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z">
                                    </path>
                                    <path
                                        d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z">
                                    </path>
                                </svg>
                            </button>
                            <button type="button" class="btn btn-light-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z">
                                    </path>
                                    <path
                                        d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <!--end::header informasi-->

                <!-- begin : VITA RAHMADA -->
                <div class="card-body">
                    <!--begin::tabel informasi-->
                    <div class="table-responsive text-center" type="button" data-bs-toggle="modal"
                        data-bs-target="#modal_view_informasiPengajuan">
                        <table class="table table-striped gy-5 gx-5 table-hover" id="tabel_informasiPengajuan">
                            <thead class="border gy-5 gx-5">
                                <tr class="fw-semibold fs-6 text-light bg-dark align-middle">
                                    <th class="min-w-50px">No. Pengajuan</th>
                                    <th class="min-w-200px">Jenis Pengajuan</th>
                                    <th class="min-w-150px">Waktu</th>
                                    <th class="min-w-150px">Nama Pengajuan</th>
                                    <th class="min-w-200px">Unit Kerja</th>
                                    <th class="min-w-200px">Status</th>
                                    <th class="min-w-80px">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border align-middle">
                                    <td>OBT20210531002</td>
                                    <td>Obat</td>
                                    <td>31 Mei 2021</td>
                                    <td>Simvastatin</td>
                                    <td>KSM Neurologi</td>
                                    <td>
                                        <a href="/HTA-belumDirekomendasikan">
                                            <button type="button" class="btn btn-light-warning btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-check fs-3x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                                                    </path>
                                                </svg>
                                                Belum Diverifikasi
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/HTA-belumDirekomendasikan">
                                            <button type="button" class="btn btn-light-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye-fill text-primary"
                                                    viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                    </path>
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border align-middle">
                                    <td>PPK20210531003</td>
                                    <td>Alat/Teknologi Kesehatan</td>
                                    <td>31 Mei 2021</td>
                                    <td>ICD-10 : B.29</td>
                                    <td>KSM Neurologi</td>
                                    <td>
                                        <a href="/HTA-Direkomendasikan">
                                            <button type="button" class="btn btn-light-primary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z">
                                                    </path>
                                                </svg>
                                                Direkomendasikan
                                            </button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="/HTA-Direkomendasikan">
                                            <button type="button" class="btn btn-light-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye-fill text-primary"
                                                    viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                    </path>
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border align-middle">
                                    <td>PPK20210531003</td>
                                    <td>Dokumen PPK</td>
                                    <td>31 Mei 2021</td>
                                    <td>ICD-10 : B.29</td>
                                    <td>KSM Neurologi</td>
                                    <td>
                                        <a href="HTA-Ditolak">
                                            <div class="btn btn-light-danger btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                    <path
                                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                    </path>
                                                </svg>
                                                Ditolak
                                            </div>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="HTA-Ditolak">
                                            <button type="button" class="btn btn-light-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-eye-fill text-primary"
                                                    viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                    </path>
                                                    <path
                                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--end::tabel informasi-->

                    <!--begin::klik pada tabel-->
                    <p class="text-gray-500">
                        Klik pada tabel untuk melihat ukuran besar</p>
                    <!--end::klik pada tabel-->

                    <!--begin::modal view tabel informasi pengajuan (verifikator kepala)-->
                    <div class="modal fade" tabindex="-1" id="modal_view_informasiPengajuan" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>View Informasi [Pengajuan (Verifikator Kepala)]</h3>
                                    <!--begin::Close-->
                                    <div class="btn btn-icon btn-sm
																  btn-active-light-danger ms-2"
                                        data-bs-dismiss="modal" aria-label="Close">
                                        <span class="svg-icon svg-icon-muted
																	 svg-icon-2hx">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.3" x="2" y="2" width="20"
                                                    height="20" rx="5" fill="currentColor" />
                                                <rect x="7" y="15.3137" width="12" height="2"
                                                    rx="1" transform="rotate(-45 7 15.3137)"
                                                    fill="currentColor" />
                                                <rect x="8.41422" y="7" width="12" height="2"
                                                    rx="1" transform="rotate(45
																		   8.41422 7)"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <div class="modal-body">
                                    <div class="table-responsive text-center">
                                        <table class="table table-hover border gy-5 gs-5" id="tabel_informasiPengajuan">
                                            <thead class="border gy-5 gs-5">
                                                <tr class="fw-semibold fs-6 text-light bg-dark align-middle">
                                                    <th class="min-w-50px">No. Pengajuan</th>
                                                    <th class="min-w-200px">Jenis Pengajuan</th>
                                                    <th class="min-w-100px">Waktu</th>
                                                    <th class="min-w-150px">Nama Pengajuan</th>
                                                    <th class="min-w-200px">Unit Kerja</th>
                                                    <th class="min-w-200px">Status</th>
                                                    <th class="min-w-80px">Tindakan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="border align-middle">
                                                    <td>OBT20210531002</td>
                                                    <td>Obat</td>
                                                    <td>31 Mei 2021</td>
                                                    <td>Simvastatin</td>
                                                    <td>KSM Neurologi</td>
                                                    <td>
                                                        <a href="HTA-belumDirekomendasikan" type="button"
                                                            class="btn btn-light-warning btn-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-check fs-3x" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z">
                                                                </path>
                                                            </svg>
                                                            Belum Diverifikasi
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="HTA-belumDirekomendasikan" type="button"
                                                            class="btn btn-light-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-eye-fill text-primary" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                                </path>
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border align-middle">
                                                    <td>PPK20210531003</td>
                                                    <td>Alat/Teknologi Kesehatan</td>
                                                    <td>31 Mei 2021</td>
                                                    <td>ICD-10 : B.29</td>
                                                    <td>KSM Neurologi</td>
                                                    <td>
                                                        <a href="/HTA-Direkomendasikan" type="button"
                                                            class="btn btn-light-primary btn-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-trophy-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z">
                                                                </path>
                                                            </svg>
                                                            Direkomendasikan
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="/HTA-Direkomendasikan" type="button"
                                                            class="btn btn-light-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-eye-fill text-primary" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                                </path>
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                                </path>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="border align-middle">
                                                    <td>PPK20210531003</td>
                                                    <td>Dokumen PPK</td>
                                                    <td>31 Mei 2021</td>
                                                    <td>ICD-10 : B.29</td>
                                                    <td>KSM Neurologi</td>
                                                    <td>
                                                        <a href="HTA-Ditolak" type="button"
                                                            class="btn btn-light-danger btn-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-x"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                                                </path>
                                                            </svg>
                                                            Ditolak
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <a href="HTA-Ditolak" type="button"
                                                            class="btn btn-light-primary">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor"
                                                                class="bi bi-eye-fill text-primary" viewBox="0 0 16 16">
                                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z">
                                                                </path>
                                                                <path
                                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z">
                                                                </path>
                                                            </svg>
                                                        </a>
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
                    <!--end::modal view tabel dokumen studi literatur-->

                    <br>

                    <!--begin::pagination-->
                    <div class="row mt-3">
                        <div class="col">
                            <ul class="pagination pagination-outline">
                                <li class="page-item first m-1">
                                    <a href="#" class="page-link px-0 bg-light-primary">
                                        <i class="bi bi-chevron-double-left text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </a>
                                </li>
                                <li class="page-item previous m-1">
                                    <a href="#" class="page-link px-0 bg-light-primary">
                                        <i class="bi bi-chevron-left text-primary"></i>
                                    </a>
                                </li>
                                <li class="page-item active m-1"><a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item m-1"><a href="#" class="page-link">2</a></li>
                                <li class="page-item m-1"><a href="#" class="page-link">3</a></li>
                                <li class="page-item m-1"><a href="#" class="page-link">4</a></li>
                                <li class="page-item m-1"><a href="#" class="page-link">5</a></li>
                                <li class="page-item m-1"><a href="#" class="page-link">...</a></li>
                                <li class="page-item next m-1">
                                    <a href="#" class="page-link px-0 bg-light-primary">
                                        <i class="bi bi-chevron-right text-primary"></i>
                                    </a>
                                </li>
                                <li class="page-item last m-1">
                                    <a href="#" class="page-link px-0 bg-light-primary">
                                        <i class="bi bi-chevron-double-right text-primary"><span
                                                class="path1"></span><span class="path2"></span></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <div class="row">
                                        <div class="col"></div>
                                        <div class="col">
                                            <select class="form-select bg-light-primary" data-control="select2"
                                                data-placeholder="Pilih">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col mt-3 text-muted">
                                    Menampilkan 10 dari 230 data
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::pagination-->
                    <br>

                    <div class="ms-10 mt-5">
                        <div class="row">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle-fill mt-3" viewBox="0 0 16 16">
                                    <circle cx="3" cy="3" r="3"></circle>
                                </svg>
                                Terdapat 3 pengajuan.
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle-fill mt-3" viewBox="0 0 16 16">
                                    <circle cx="3" cy="3" r="3"></circle>
                                </svg>
                                Penjabaran pengajuan :
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle mt-3 ms-10" viewBox="0 0 16 16">
                                    <circle cx="3" cy="3" r="3"></circle>
                                </svg>
                                1 pengajuan alat/teknologi kesehatan.
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle mt-3 ms-10" viewBox="0 0 16 16">
                                    <circle cx="3" cy="3" r="3"></circle>
                                </svg>
                                1 pengajuan obat.
                                <br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-circle mt-3 ms-10" viewBox="0 0 16 16">
                                    <circle cx="3" cy="3" r="3"></circle>
                                </svg>
                                1 pengajuan dokumen PPK.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end : VITA RAHMADA -->
            </div>
            <!--end::VITA RAHMADA-->

        </div>
        <!--end::Content container-->
    </div>
    <!--end::Content-->
@endsection

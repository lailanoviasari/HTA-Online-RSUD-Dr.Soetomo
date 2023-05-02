@extends('HTA-layouts.HTA-main')
@section('title', 'Direkomendasikan')
@section('content-Direkomendasikan')
    
				<!--begin::Status Direkomendasikan-->
				<div id="content3_direkomendasikan" class="app-content flex-column-fluid">
					<!--begin::Content container-->
					<div id="kt_app_content_container3" class="app-container container-xxl">

						<!--begin::Tittle-->
						<div class="page-title py-2 py-sm-0 d-flex flex-column justify-content-center mt-3 mb-5">
							<div class="row">
								<div class="col-10">
									<h2 class="page-title mt-7">Pengajuan (Verifikator Kepala)
									</h2>
								</div>
								<div class="col-2 text-end">
									<button type="button" class="btn btn-primary mt-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
											fill="currentColor" class="bi bi-envelope-fill" viewBox="0 2 16 16">
											<path
												d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z">
											</path>
										</svg>
										Notifikasi
									</button>
								</div>
							</div>
						</div>
						<!--end::Tittle-->

						<div class="card shadow-sm h-2000px">
							<!--begin::Informasi Pengajuan-->
							<div class="card-header border-0 cursor-pointer">
								<!--begin::Card title-->
								<div class="card-title m-0">
									<h3 class="page-title mt-7"><i class="bi bi-files fs-2x text-primary"></i>
										Informasi Pengajuan</h3>
								</div>
								<!--end::card title-->

							</div>

							<div class="card-body">
								<!--begin::Data Ajuan-->
								<div class="row mt-2 mb-5">
									<h1 class="text-dark fw-bold fs-4">Data Ajuan : </h1>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Status Pengajuan</label>
									<div class="col-lg-8">Direkomendasikan
									</div>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">No.Pengajuan</label>
									<div class="col-lg-8">ATK20210531001
									</div>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Waktu Pengajuan</label>
									<div class="col-lg-8">31 Mei 2021 13:09:18
									</div>
								</div>
								<!--end::Data Ajuan-->

								<!--begin::Data Pengaju-->
								<div class="row">
									<h1 class="text-dark fw-bold fs-4 mt-10 mb-5">Data Pengaju : </h1>
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
									<div class="col-lg-8">Instalasi Teknologi Komunikasi dan Informasi
									</div>
								</div>
								<!--end::Data Pengaju-->

								<!--begin::Dokumen Tingkat Keterbukaan-->
								<div class="row">
									<h1 class="text-dark fw-bold fs-4 mt-10 mb-5">Dokumen Tingkat Keterbutuhan :
									</h1>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Nama Pengajuan</label>
									<div class="col-lg-8">SOMATOM Confident Rt PharException
									</div>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Apakah alat/teknologi kesehatan ini
										baru?</label>
									<div class="col-lg-8">Baru di Surabaya
									</div>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Latar Belakang</label>
									<div class="col-lg-8">Teknologi paling mutakir yang wajib dimiliki oleh
										RS
										terbesar
										se-Indonesia timur
									</div>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Indikasi</label>
									<div class="col-lg-8">Sudah mulai timbul penyakit yang samar dalam
										pendiagnosisan
										ketika tidak menggunakan teknologi tersebut
									</div>
								</div>
								<div class="row mb-2">
									<label class="col-lg-4">Jumlah Kasus</label>
									<div class="col-lg-8">2 pasien/minggu
									</div>
								</div>
								<!--end::Dokumen Tingkat Keterbukaan-->

								<!--begin::Dokumen Studi Literatur-->
								<h1 class="text-dark fw-bold fs-4 mb-5 mt-10">
									Dokumen Studi Literatur : </h1>
								<!--begin::tabel literatur-->
								<div class="table-responsive" type="button" data-bs-toggle="modal"
									data-bs-target="#modal_view_litaratur">
									<table class="table table-hover border gy-4 gs-4" id="tabel_literatur">
										<thead class="border gy-4 gs-4">
											<tr class="align-middle fw-semibold text-light bg-dark text-center">
												<th class="min-w-150px">Judul Literatur</th>
												<th>Penulis</th>
												<th>Tahun Terbit</th>
												<th>Population</th>
												<th>Intervention</th>
												<th>Comparison</th>
												<th>Outcome</th>
												<th>Level of Evidence</th>
												<th>Grade of Recommendation</th>
												<th>File yang diunggah</th>
											</tr>
										</thead>
										<tbody class="border gy-5 gs-5 text-center align-middle ">
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
												<td>1a</td>
												<td>A</td>
												<td><a href="aset_kel3/jurnal1.pdf">jurnal1.pdf</a>
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
												<td>2b</td>
												<td>B</td>
												<td><a href="aset_kel3/jurnal2.pdf">jurnal2.pdf</a>
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
												<td>4</td>
												<td>C</td>
												<td><a href="aset_kel3/jurnal3.pdf">jurnal3.pdf</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--end::tabel literatur-->
								<textbox class="text-gray-500 mb-5">
									Klik pada tabel untuk melihat ukuran besar</textbox>

								<!--begin::Dokumen Operasional-->
								<div class="row mb-4">
									<h1 class="text-dark fw-bold fs-4 my-5 mt-10">Dokumen Operasional dan Dokumen
										Aspek
										Sosio-Ekonomi </h1>
									<!--begin::tabel Operasional-->
									<div class="table-responsive" type="button" data-bs-toggle="modal"
										data-bs-target="#modal_view_dok_operasional">
										<table class="table table-hover border gy-3 gx-3 " id="tabel_dok_operasional">
											<thead class="border gy-3 gx-3">
												<tr class="align-middle fw-semibold text-light bg-dark text-center">
													<th></th>
													<th>Nama Merk</th>
													<th>Narasi Alat</th>
													<th>Ekatalog</th>
													<th>Dimensi Alat</th>
													<th>Tahun Pembuatan</th>
													<th>Asal Negara</th>
													<th>Depresiasi</th>
													<th>Aksesori Alat Tambahan</th>
													<th>Lain-lain</th>
													<th>Besar Daya</th>
													<th>Besar Tegangan</th>
													<th>Sumber Daya</th>
													<th>Backup Daya</th>
													<th>Kualifikasi Instalasi</th>
													<th>Kualifikasi Operasional</th>
													<th>Kualifikasi Kinerja</th>
													<th>Buku Manual</th>
													<th>Garansi Free</th>
													<th>Biaya Perawatan Free</th>
													<th>Tambahan Biaya Perawatan Per Tahun</th>
													<th>Pelatihan Operator dan Teknisi</th>
													<th>Tenaga Pelaksana</th>
													<th>Garansi Purna Jual</th>
													<th>Harga Alat</th>
													<th>Biaya Perawatan/Tahun</th>
													<th>Biaya Bahan Habis Pakai/Pasien</th>
													<th>Biaya Dokumen Pendukung</th>
													<th>Perkiraan Biaya/Pasien</th>
													<th>Kapasitas Alat</th>
													<th>Jasa Medik/Pasien</th>
													<th>Perkiraan Return of Investment</th>
												</tr>
											</thead>
											<tbody class="border gy-5 gs-5 text-center align-middle ">
												<tr>
													<td>1</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
												</tr>
												<tr>
													<td>2</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
												</tr>
												<tr>
													<td>3</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
													<td>-</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!--end::tabel Operasional-->
									<!--end::Dokumen Operasional-->

									<textbox class="text-gray-500">
										Klik pada tabel untuk melihat ukuran besar</textbox>

									<!--begin::data nilai-->

									<!--begin::title Data nilai-->
									<h1 class="text-dark fw-bold fs-4 my-5 mt-10">Data Nilai : </h1>
									<!--end::title Data nilai-->

									<!--begin::nilai total-->
									<div class="row mb-5">
										<div class="col-4 fw-semibold">
											Nilai Total
										</div>
										<div class="col-8">
											98
										</div>
									</div>
									<!--end::nilai total-->

									<br>
									<!--begin::Hasil Rekomendasi-->
									<div class="row">
										<div class="col-4 fw-semibold">
											Hasil Rekomendasi
										</div>
										<div class="col-8">
											Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam quasi
											possimus
											natus eveniet, repellendus eos adipisci tempora corporis voluptatibus
											commodi
											eius molestias! Amet enim ipsam minima recusandae omnis possimus maxime
											officia
											distinctio sit repellendus molestiae odio dolor aut cupiditate ratione
											laborum,
											blanditiis assumenda eaque asperiores, autem quos rerum facilis
											consectetur!
										</div>
									</div>
									<!--end::Hasil Rekomendasi-->

									<!--end::data nilai-->
								</div>

								<!--end::Informasi Pengajuan-->
							</div>

							<div class="card-footer">
								<!--begin::Button kembali-->
								<a href="/" type="button"
									class="btn btn-secondary align-self-start me-2">Kembali</a>
								<!--end::Button kembali-->
							</div>
						</div>
					</div>
				</div>
				<!--end::Status Direkomendasikan-->

				<!--begin::modal view tabel dokumen studi litaratur-->
				<div class="modal fade" tabindex="-1" id="modal_view_litaratur" data-bs-backdrop="static">
					<div class="modal-dialog modal-dialog-centered modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h3>View Dokumen Studi Literatur</h3>
								<!--begin::Close-->
								<div class="btn btn-icon btn-sm
																  btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
									<span class="svg-icon svg-icon-muted
																	 svg-icon-2hx">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
												fill="currentColor" />
											<rect x="7" y="15.3137" width="12" height="2" rx="1"
												transform="rotate(-45 7 15.3137)" fill="currentColor" />
											<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45
																		   8.41422 7)" fill="currentColor" />
										</svg>
									</span>
								</div>
								<!--end::Close-->
							</div>
							<div class="modal-body">
								<div class="table-responsive">
									<table class="table table-hover border gy-7 gs-7" id="tabel_literatur">
										<thead class="border gy-7 gs-7">
											<tr class="fw-semibold fs-6 text-light bg-dark text-center align-middle">
												<th class="min-w-200px">Judul Literatur</th>
												<th>Penulis</th>
												<th>Tahun Terbit</th>
												<th>Population</th>
												<th>Intervention</th>
												<th>Comparison</th>
												<th>Outcome</th>
												<th>Level of Evidence</th>
												<th>Grade of Recommendation</th>
												<th>File yang diunggah</th>
											</tr>
										</thead>
										<tbody class="border gy-7 gs-7 text-center align-middle">
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
												<td>1a</td>
												<td>A</td>
												<td><a href="aset_kel3/jurnal1.pdf">jurnal1.pdf</a>
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
												<td>2b</td>
												<td>B</td>
												<td><a href="aset_kel3/jurnal2.pdf">jurnal2.pdf</a>
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
												<td>4</td>
												<td>C</td>
												<td><a href="aset_kel3/jurnal3.pdf">jurnal3.pdf</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
								</div>
								<!--end::Button-->
							</div>
						</div>
					</div>
				</div>
				<!--end::modal view tabel dokumen studi literatur-->

				<!--begin::modal view tabel dokumen operasional-->
				<div class="modal fade" tabindex="-1" id="modal_view_dok_operasional" data-bs-backdrop="static">
					<div class="modal-dialog modal-dialog-centered modal-xl">
						<div class="modal-content">
							<div class="modal-header">
								<h3>View Dokumen Operasional dan Dokumen Aspek Sosio-Ekonomi
								</h3>
								<!--begin::Close-->
								<div class="btn btn-icon btn-sm
																  btn-active-light-danger ms-2" data-bs-dismiss="modal" aria-label="Close">
									<span class="svg-icon svg-icon-muted
																	 svg-icon-2hx">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
												fill="currentColor" />
											<rect x="7" y="15.3137" width="12" height="2" rx="1"
												transform="rotate(-45 7 15.3137)" fill="currentColor" />
											<rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45
																		   8.41422 7)" fill="currentColor" />
										</svg>
									</span>
								</div>
								<!--end::Close-->
							</div>
							<div class="modal-body">
								<!--begin::tabel dokumen operasional-->
								<div class="table-responsive mb-2">
									<table class="table table-hover border gy-7 gs-7" id="tabel_dok_operasional">
										<thead class="border gy-7 gs-7">
											<tr class="fw-semibold fs-6 text-light bg-dark text-center align-middle">
												<th></th>
												<th>Nama Merk</th>
												<th>Narasi Alat</th>
												<th>Ekatalog</th>
												<th>Dimensi Alat</th>
												<th>Tahun Pembuatan</th>
												<th>Asal Negara</th>
												<th>Depresiasi</th>
												<th>Aksesori Alat Tambahan</th>
												<th>Lain-lain</th>
												<th>Besar Daya</th>
												<th>Besar Tegangan</th>
												<th>Sumber Daya</th>
												<th>Backup Daya</th>
												<th>Kualifikasi Instalasi</th>
												<th>Kualifikasi Operasional</th>
												<th>Kualifikasi Kinerja</th>
												<th>Buku Manual</th>
												<th>Garansi Free</th>
												<th>Biaya Perawatan Free</th>
												<th>Tambahan Biaya Perawatan Per Tahun</th>
												<th>Pelatihan Operator dan Teknisi</th>
												<th>Tenaga Pelaksana</th>
												<th>Garansi Purna Jual</th>
												<th>Harga Alat</th>
												<th>Biaya Perawatan/Tahun</th>
												<th>Biaya Bahan Habis Pakai/Pasien</th>
												<th>Biaya Dokumen Pendukung</th>
												<th>Perkiraan Biaya/Pasien</th>
												<th>Kapasitas Alat</th>
												<th>Jasa Medik/Pasien</th>
												<th>Perkiraan Return of Investment</th>
											</tr>
										</thead>
										<tbody class="border gy-7 gs-7 text-center align-middle">
											<tr>
												<td>1</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
											<tr>
												<td>2</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
											<tr>
												<td>3</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
												<td>-</td>
											</tr>
										</tbody>
									</table>
								</div>
								<!--end::tabel dokumen operasional-->
								<div class="modal-footer">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
								</div>
								<!--end::Button-->
							</div>
						</div>
					</div>
				</div>
				<!--end::modal view tabel dokumen operasional-->
@endsection
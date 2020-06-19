<!-- Content Header (Page header) -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Penerimaan Proposal</h3>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Terima Proposal
            </button>
        </div>

        <div class="card-body">
            <?= $this->session->flashdata('allert'); ?>
            <?= $this->session->flashdata('message'); ?>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Absesnsi Bimbingan Mahasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="card card-custom">
                                <!--begin::Form-->
                                <form class="form" method="post" action="<?= base_url('dosen/terima_proposal') ?>" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Mahasiswa yang Melakukan Ujian</label>
                                            <div></div>
                                            <select class="custom-select form-control" name="nama" id="nama">
                                                <option value="">Pilih Mahasiswa</option>
                                                <?php foreach ($ujian as $mhs) : ?>
                                                    <option value="<?php echo $mhs->nama; ?>"><?php echo $mhs->nama; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Berkas Berita Acara Ujian Proposal</label>
                                            <div></div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="berkas" name="berkas" />
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                        <div class="pb-lg-0 pb-10">
                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form class="form" method="post" action="<?= base_url('dosen/cek_jml_ba_bimbingan') ?>">
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--begin::Notice-->
                        <div class="alert alert-custom alert-white alert-shadow gutter-b" role="alert">
                            <div class="alert-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-xl">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Tools/Compass.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M7.07744993,12.3040451 C7.72444571,13.0716094 8.54044565,13.6920474 9.46808594,14.1079953 L5,23 L4.5,18 L7.07744993,12.3040451 Z M14.5865511,14.2597864 C15.5319561,13.9019016 16.375416,13.3366121 17.0614026,12.6194459 L19.5,18 L19,23 L14.5865511,14.2597864 Z M12,3.55271368e-14 C12.8284271,3.53749572e-14 13.5,0.671572875 13.5,1.5 L13.5,4 L10.5,4 L10.5,1.5 C10.5,0.671572875 11.1715729,3.56793164e-14 12,3.55271368e-14 Z" fill="#000000" opacity="0.3" />
                                            <path d="M12,10 C13.1045695,10 14,9.1045695 14,8 C14,6.8954305 13.1045695,6 12,6 C10.8954305,6 10,6.8954305 10,8 C10,9.1045695 10.8954305,10 12,10 Z M12,13 C9.23857625,13 7,10.7614237 7,8 C7,5.23857625 9.23857625,3 12,3 C14.7614237,3 17,5.23857625 17,8 C17,10.7614237 14.7614237,13 12,13 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <div class="alert-text">Menu pengelolanan data mahaiswa yang mendaftar Monitoring Tugas Akhir.
                                <br />Info lebih lanjut kunjungi
                                <a class="font-weight-bold" href="www.mischooxl.id" target="_blank">mischool.id</a></div>
                        </div>
                        <!--end::Notice-->
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="card-body">
                                <!--begin: Datatable-->
                                <table class="table table-bordered table-checkable" id="kt_datatable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Berkas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($mahasiswa as $mhs) : ?>
                                            <tr>
                                                <th scope="row"><?= $i; ?></th>
                                                <td><?= $mhs->nama; ?></td>
                                                <td><?= $mhs->tanggal; ?></td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" target="_blank-page" href="<?php echo base_url(); ?>assets/pdf/<?php echo $mhs->berkas; ?>">
                                                        Cek Berkas
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <!--end: Datatable-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
            </form>
            <!-- /.card -->
        </div>
    </div>
</section>
<!-- /.content -->

</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
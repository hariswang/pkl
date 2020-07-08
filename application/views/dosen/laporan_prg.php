<!-- Content Header (Page header) -->
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<section class="content">
    <form class="form" method="post" action="<?= base_url('dosen/tanggapan/') ?>">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Mahasiswa Bimbingan Proposal</h3>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Lihat catatan
                </button>
            </div>
            <!-- Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Riwayat Catatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i aria-hidden="true" class="ki ki-close"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-bordered table-checkable" id="kt_datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Laporan Progres</th>
                                        <th>Waktu Penyerahan</th>
                                        <th>Catatan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($mahasiswa as $mhs) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><?= $mhs->progres; ?></td>
                                            <td><?= $mhs->waktu; ?></td>
                                            <td><?= $mhs->catatan; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary font-weight-bold">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    <div class="container">
                        <!--end::Notice-->
                        <!--begin::Card-->
                        <div class="card card-custom gutter-b">
                            <div class="table-responsive">
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <table class="table table-bordered table-checkable" id="kt_datatable">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Laporan Progres</th>
                                                <th>Berkas Proposal</th>
                                                <th>Waktu Penyerahan</th>
                                                <th>Komentar</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $i = 1; ?>
                                            <?php foreach ($mahasiswa as $mhs) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $mhs->progres; ?></td>
                                                    <input type="hidden" name="nama" value="<?php echo $mhs->nama; ?>">
                                                    <input type="hidden" name="progres" value="<?php echo $mhs->progres; ?>">
                                                    <input type="hidden" name="berkas" value="<?php echo $mhs->berkas; ?>">
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" target="_blank-page" href="<?php echo base_url(); ?>assets/pdf/<?php echo $mhs->berkas; ?>">
                                                            Cek Bukti
                                                        </a>
                                                    </td>
                                                    <td><?= $mhs->waktu; ?></td>
                                                    <td>
                                                        <form class="form" method="post" action="<?php echo base_url(); ?>dosen/tanggapan">
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalLong">
                                                                Catatan
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLongTitle">Catatan / Komentar</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <input type="hidden" name="nim" value="<?php echo $mhs->nim; ?>">
                                                                        <div class="modal-body">
                                                                            <div class="card-body">
                                                                                <div class="form-group mb-1">
                                                                                    <label for="exampleTextarea">Catatan kepada mahasiswa</label>
                                                                                    <textarea name="editor1" id="editor1"></textarea>
                                                                                    <script>
                                                                                        CKEDITOR.replace('editor1');
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                    <a href="<?php echo site_url(); ?>dosen/acc_prop/<?= $mhs->nim; ?>" value="<?php echo $mhs->nim; ?>" class=" btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Acc Proposal</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </form>
</section>
<!-- /.content -->

</div>
<!--end::Container-->
</div>
<!--end::Entry-->
</div>
<!--end::Content-->
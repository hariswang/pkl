<div class="timeline-content text-dark-50">

    <div class="card card-custom col-8 mx-auto">
        <div class="card card-custom">
            <!--begin::Form-->
            <form class="form" method="post" action="<?= base_url('dosen/tambah_absensi_ba_proposal') ?>" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="timeline-content d-flex">
                        <h4><span class="mr-4 font-weight-bolder text-dark-75">Berita Acara Ujian Proposal Mahasiswa</span></h4>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label>Mahasiswa yang Melakukan Ujian</label>
                        <div></div>
                        <select class="custom-select form-control" name="pildos1" id="pildos1">
                            <option value="">Pilih Mahasiswa</option>
                            <?php foreach ($ujian as $mhs) : ?>
                                <option value="<?php echo $mhs->nama; ?>"><?php echo $mhs->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-1">
                        <label for="exampleTextarea">Masukan Judul Proposal</label>
                        <textarea class="form-control" placeholder="Meningkatkan Sumber Daya Manusia dengan Metodologi Bridge" id="exampleTextarea" rows="3" name="judul"></textarea>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <label>Dosen Pembimbing 1</label>
                        <div></div>
                        <select class="custom-select form-control" name="pildos1" id="pildos1">
                            <option value="">Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen Pembimbing 2</label>
                        <div></div>
                        <select class="custom-select form-control" name="pildos2" id="pildos2">
                            <option value="">Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen Penguji 1 (Ketua)</label>
                        <div></div>
                        <select class="custom-select form-control" name="pildos2" id="pildos2">
                            <option value="">Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen Penguji 2 (Sekretaris)</label>
                        <div></div>
                        <select class="custom-select form-control" name="pildos2" id="pildos2">
                            <option value="">Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dosen Penguji 3 (Penguji Utama)</label>
                        <div></div>
                        <select class="custom-select form-control" name="pildos2" id="pildos2">
                            <option value="">Pilih Dosen</option>
                            <?php foreach ($dosen as $dsn) : ?>
                                <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-1">
                        <label for="exampleTextarea">Nilai</label>
                        <textarea class="form-control" placeholder="Ex : 80" id="exampleTextarea" rows="3" name="judul"></textarea>
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
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Dashboard-->
      <!--begin::Row-->
      <div class="row">
        <div class="col-lg-12 col-xxl-4">
          <!--begin::Mixed Widget 1-->



          <div class="card card-custom card-stretch gutter-b">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0 mt-4">
              <h3 class="card-title align-items-start flex-column">
                <span class="font-weight-bolder text-dark">Recent Activities</span>
              </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-4">
              <div class="timeline timeline-5 mt-3">

                <?= $this->session->flashdata('allert'); ?>
                <?= $this->session->flashdata('message'); ?>
                <!--begin::Item-->


                <div class="timeline-item align-items-start">
                  <!--begin::Label-->


                  <!-- step 1 -->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 1</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-success icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->

                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Pengajuan Judul dan Pilih Dosen Pembimbing</span></h4>
                    </div>
                    <div class="card card-custom">
                      <?php if ($step == 1) { ?>
                        <!--begin::Form-->
                        <form class="form" method="post" action="<?= base_url('mahasiswa/step1') ?>" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group mb-1">
                              <label for="exampleTextarea">Masukan Judul Tugas Akhir</label>
                              <textarea class="form-control" id="exampleTextarea" rows="3" name="judul"></textarea>
                            </div>
                            <div class="form-group">
                              <label>Pilih Dosen Pembimbing 1</label>
                              <div></div>
                              <select class="custom-select form-control" name="pildos1" id="pildos1">
                                <option value="">Pilih Dosen</option>
                                <?php foreach ($dosen as $dsn) : ?>
                                  <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Pilih Dosen Pembimbing 2</label>
                              <div></div>
                              <select class="custom-select form-control" name="pildos2" id="pildos2">
                                <option value="">Pilih Dosen</option>
                                <?php foreach ($dosen as $dsn) : ?>
                                  <option value="<?php echo $dsn->nama; ?>"><?php echo $dsn->nama; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Proposal</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="berkas" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <div>
                              <div class="pb-lg-0 pb-10">
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      <?php } ?>
                      <!--end::Form-->
                    </div>
                  </div>

                  <!-- end step1 -->
                  <!--end::Text-->
                </div>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 2</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->

                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Bimbingan Proposal</span></h4>
                    </div>
                    <div class="card card-custom">
                      <?php if ($step == 2) { ?>
                        <!--begin::Form-->
                        <form class="form" method="post" action="<?= base_url('mahasiswa/step2') ?>" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group form-group-last">
                              <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                <div class="alert-text">
                                  Contoh : Upload Progres Bab I
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Masukan Judul Progres</label>
                              <input type="text" class="form-control" placeholder="Judul Progres" name="judul" />
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Proposal</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" required />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                        </form>
                      <?php } ?>
                      <!--end::Form-->
                    </div>
                  </div>
                  <!--end::Text-->
                </div>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 3</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-info icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Jadwal ujian Proposal</span></h4>
                    </div>
                    <div class="card card-custom">
                      <?php if ($step == 3) { ?>
                        <!--begin::Form-->
                        <?php foreach ($mahasiswa as $mhs) {
                        } ?>
                        <div class="card-body">
                          <div class="form-group">
                            <p>
                              <b>
                                <font size="5" color="red"><?= $mhs->jadwal_ujian_proposal; ?></font>
                              </b>
                            </p>
                          </div>
                        </div>
                      <?php } ?>
                      <!--end::Form-->
                    </div>
                  </div>
                </div>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 4</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-warning icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Revisi Proposal</span></h4>
                    </div>
                    <div class="card card-custom">
                      <?php if ($step == 4) { ?>
                        <!--begin::Form-->
                        <form class="form" method="post" action="<?= base_url('mahasiswa/step2') ?>" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group form-group-last">
                              <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                <div class="alert-text">
                                  Contoh : Upload Revisi Proposal
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Masukan Judul Revisi</label>
                              <input type="text" class="form-control" placeholder="Judul Progres" name="judul" />
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Proposal</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                        </form>
                        <!--end::Form-->
                      <?php } ?>
                    </div>
                  </div>
                  <!--end::Text-->
                </div>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 5</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-success icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Mengerjakan Tugas Akhir</span></h4>
                    </div>
                  </div>
                  <!--end::Text-->
                </div>


                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 6</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Bimbingan Tugas Akhir</span></h4>
                    </div>
                    <div class="card card-custom">
                      <?php if ($step == 6) { ?>
                        <!--begin::Form-->
                        <form class="form" method="post" action="<?= base_url('mahasiswa/step2') ?>" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group form-group-last">
                              <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                <div class="alert-text">
                                  Contoh : Upload Progres Bab I
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Masukan Judul Progres</label>
                              <input type="text" class="form-control" placeholder="Judul Progres" name="judul" />
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Proposal</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                        </form>
                        <!--end::Form-->
                      <?php } ?>
                    </div>
                  </div>
                  <!--end::Text-->
                </div>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 7</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-info icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Jadwal Sidang Tugas Akhir</span></h4>
                    </div>
                  </div>
                  <!--end::Text-->
                </div>


                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 8</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-warning icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75">Revisi Tugas Akhir</span></h4>
                    </div>
                    <div class="card card-custom">
                      <?php if ($step == 8) { ?>
                        <!--begin::Form-->
                        <form class="form" method="post" action="<?= base_url('mahasiswa/step2') ?>" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group form-group-last">
                              <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                <div class="alert-text">
                                  Contoh : Revisi Tugas Akhir
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Masukan Judul Revisi</label>
                              <input type="text" class="form-control" placeholder="Judul Progres" name="judul" />
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Proposal</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                        </form>
                      <?php } ?>
                      <!--end::Form-->
                    </div>
                  </div>
                  <!--end::Text-->
                </div>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Final Step !</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-success icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="timeline-content d-flex">
                      <h4><span class="mr-4 font-weight-bolder text-dark-75"> Upload Laporan Tugas Akhir, Paper dan Poster</span></h4>
                    </div>
                    <div class="card card-custom">
                      <!--begin::Form-->
                      <?php if ($step == 9) { ?>
                        <form class="form" method="post" action="<?= base_url('mahasiswa/step2') ?>" enctype="multipart/form-data">
                          <div class="card-body">
                            <div class="form-group form-group-last">
                              <div class="alert alert-custom alert-default" role="alert">
                                <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                                <div class="alert-text">
                                  Contoh : Upload Laporan Tugas Akhir
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Upload Laporan Tugas Akhir</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Paper</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Upload Berkas Poster</label>
                              <div></div>
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="berkas" />
                                <label class="custom-file-label" for="customFile">Choose PDF file</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>
                        </form>
                      <?php } ?>
                      <!--end::Form-->
                    </div>
                  </div>
                  <!--end::Text-->
                </div>

              </div>
              <!--end: Items-->
            </div>
            <!--end: Card Body-->
          </div>
          <!--end: Card-->

          <!--end: List Widget 9-->
        </div>
      </div>
      <!--end::Row-->
      <!--end::Dashboard-->
    </div>
    <!--end::Container-->
  </div>
  <!--end::Entry-->
</div>
<!--end::Content-->
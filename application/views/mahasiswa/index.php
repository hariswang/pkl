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
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 1</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-success icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="card card-custom">
                      <div class="card-header">
                        <h3 class="card-title">
                          Pengajuan Judul dan Pilih Dosen Pembimbing
                        </h3>
                      </div>

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
                              <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>
                              <button type="reset" class="btn btn-danger font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Reset</button>
                            </div>
                          </div>
                        </div>
                      </form>
                      <!--end::Form-->
                    </div>
                  </div>

                  <!--end::Text-->
                </div>

                <form class="form" method="post" action="<?= base_url('mahasiswa/step2') ?>" enctype="multipart/form-data">
                  <!--end::Item-->
                  <div class="timeline-item align-items-start">
                    <!--begin::Label-->
                    <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 2</div>
                    <!--end::Label-->
                    <!--begin::Badge-->
                    <div class="timeline-badge">
                      <i class="fa fa-genderless text-success icon-xxl"></i>
                    </div>
                    <!--end::Badge-->
                    <!--begin::Text-->
                    <div class="timeline-content text-dark-50">
                      <div class="card card-custom">
                        <div class="card-header">
                          <h3 class="card-title">
                            Bimbingan Proposal
                          </h3>
                        </div>
                        <!--begin::Form-->
                        <form class="form">
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
                                <label class="custom-file-label" for="customFile">Choose file</label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                          </div>

                        </form>
                        <!--end::Form-->
                      </div>
                    </div>


                    <!--end::Text-->
                  </div>
                  <!--begin::Item-->
                </form>

                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 3</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Content-->
                  <div class="timeline-content d-flex">
                    <span class="mr-4 font-weight-bolder text-dark-75">Seminar Tugas Akhir</span>

                  </div>
                  <!--end::Content-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Step 4</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-info icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Desc-->
                  <div class="timeline-content font-weight-bolder text-dark-75">Sidang Tugas Akhir
                    <a href="#" class="text-primary"></a></div>
                  <!--end::Desc-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">Final Step</div>
                  <!--end::Label-->
                  <!--begin::Badge-->
                  <div class="timeline-badge">
                    <i class="fa fa-genderless text-danger icon-xxl"></i>
                  </div>
                  <!--end::Badge-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50"><b>Mantab !</b></div>
                  <!--end::Text-->
                </div>
                <!--end::Item-->
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
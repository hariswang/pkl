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
              <a href="<?php echo site_url(); ?>mahasiswa/cek_absensi/ " target="_blank" class=" btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Cek Absensi</a>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-4">
              <div class="timeline timeline-3 mt-3">

                <?= $this->session->flashdata('allert'); ?>
                <?= $this->session->flashdata('message'); ?>
                <!--begin::Item-->
                <div class="timeline-item align-items-start">
                  <!--begin::Label-->
                  <!--begin::Text-->
                  <div class="timeline-content text-dark-50">
                    <div class="card card-custom">
                      <div class="card-header">
                        <h3 class="card-title">
                          Absensi Berita Acara
                        </h3>
                      </div>

                      <!--begin::Form-->
                      <form class="form" method="post" action="<?= base_url('mahasiswa/tambah_absensi') ?>" enctype="multipart/form-data">
                        <div class="card-body">
                          <div class="form-group mb-1">
                            <label for="exampleTextarea">Judul Berita Acara</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3" name="judul_berita"></textarea>
                          </div>
                          
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
                      <!--end::Form-->
                    </div>
                  </div>
                  <!--end::Text-->
                </div>

                
                      </form>
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
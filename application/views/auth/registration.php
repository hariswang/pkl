    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-row-auto px-lg-0 px-5 pb-sm-40 pb-lg-40 flex-grow-1" style="background-repeat:no-repeat;background-position: bottom;background-image: url(assets/media/svg/illustrations/login-visual-1.svg)">
                <!--begin::Aside Container-->
                <div class="d-flex flex-row-fluid flex-column mt-lg-30 mb-lg-0 pb-lg-0 mb-20 pb-40 mt-0 pt-15">
                    <!--begin::Aside header-->
                    <a href="#" class="text-center mb-10">
                        <img src="<?= base_url('assets/'); ?>/media/logos/logo-letter-1.png" class="max-h-70px" alt="" />
                    </a>
                    <!--end::Aside header-->
                    <!--begin::Aside title-->
                    <h3 class="font-weight-bolder text-center display5 pb-lg-0 pb-40">Website Monitoring Tugas Akhir
                        <br /></h3>
                    <!--end::Aside title-->
                </div>
                <!--end::Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->

            <div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 ml-auto mr-auto">

                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center mt-6 mt-lg-0">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form class="form" method="post" action="<?= base_url('auth/registration') ?>" enctype="multipart/form-data">
                            <!--begin::Title-->
                            <div class="pt-lg-40 mt-lg-10 pb-15">
                                <h3 class="font-weight-bolder text-dark display5">Welcome to MoniTA</h3>
                                <span class="text-muted font-weight-bold font-size-h4">Sudah memiliki akun ?
                                    <a href="<?= base_url('auth'); ?>" class="text-primary font-weight-bolder">Silahkan login disini !</a></span>
                            </div>
                            <?php echo $this->session->flashdata('message'); ?>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Nama</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="nama" value="<?= set_value('nama'); ?>" /> <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">NIM</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="no_induk" value="<?= set_value('no_induk'); ?>" /> <?= form_error('no_induk', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="email" value="<?= set_value('email'); ?>" /> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password1" /> <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!--end::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Re-type Password</label>

                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password2" />
                            </div>
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Upload bukti pembayaran</label>
                                <div></div>
                                <div class="custom-file">
                                    <input type="file" name="userfile" class="custom-file-input" id="customFile" required />
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-10">
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Submit</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Content body-->
                <!--begin::Content footer-->
                <div class="d-flex justify-content-lg-start justify-content-center flex-column-fluid align-items-end pb-2 pt-lg-0">
                    <a href="#" class="text-primary font-weight-bolder font-size-h5">Terms</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Plans</a>
                    <a href="#" class="text-primary ml-10 font-weight-bolder font-size-h5">Contact Us</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
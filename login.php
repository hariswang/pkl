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
                        <form class="form" method="post" action="<?= base_url('auth') ?>">
                            <!--begin::Title-->
                            <div class="pt-lg-40 mt-lg-10 pb-15">
                                <h3 class="font-weight-bolder text-dark display5">Welcome to MoniTA</h3>
                                <span class="text-muted font-weight-bold font-size-h4">Belum memiliki akun ?
                                    <a href="<?= base_url('auth/registration'); ?>" class="text-primary font-weight-bolder">Buat akun</a></span>
                            </div>

                            <?= $this->session->flashdata('message'); ?>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="email" value="<?= set_value ('email'); ?>" /> <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                    <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Lupa Password ?</a>
                                </div>
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password"/> <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> 
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-10">
                                <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->

                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate" id="kt_login_forgot_form">
                            <!--begin::Title-->
                            <div class="text-center pt-lg-40 mt-lg-20 pb-15">
                                <h3 class="font-weight-bolder text-dark display5">Forgotten Password ?</h3>
                                <p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
                            </div>
                            <!--end::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-wrap flex-center pb-lg-0">
                                <button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Submit</button>
                                <button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mx-4">Cancel</button>
                            </div>
                            <!--end::Form group-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
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
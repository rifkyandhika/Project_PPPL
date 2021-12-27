        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?= base_url('assets') ?>/img/auth/login-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="<?= base_url('assets') ?>/index.html"><img src="<?= base_url('assets') ?>/src/img/brand.svg" alt=""></a>
                            </div>
                            <h3>Sign In to ThemeKit</h3>
                            <p>Happy to see you again!</p>
                            <form action="<?= base_url('assets') ?>/pages/table-bootstrap.html">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required="" value="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required="" value="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="row">                                    
                                    <div class="col text-right">
                                        <a href="<?= base_url('forgot') ?>">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button class="btn btn-theme">Sign In</button>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
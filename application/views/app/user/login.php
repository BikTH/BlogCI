<div class="container py-4">
    <div class=" row justify-content-center">
        <div class="card-body p-0">
            <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                <h2 class="form-header text-primary text-center"> Welcome Back </h2>
                    <?php if($this->session->flashdata('status')): ?>
                        <div class=" text-center alert alert-danger alert-dismissible fade show " role="alert">
                            <?= $this->session->flashdata('status');?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    <div class="row justify-content-center">
                        <!-- <div class="col-lg-6 d-lg-block p-5 text-center d-none "> -->
                        <div class="col-lg-6 d-lg-block p-5 text-center">
                            <img src="<?= img_url('loginimg.svg') ?>" class="img-fluid" alt="login img">
                        </div>
                        <div class="col-lg-6 p-5 text-secondary">
                            <form action="<?= site_url('Users/login')?>" method="post" enctype="multipart/form-data"   class="row needs-validation" class="needs-validation" novalidate>
                                <!-- <h2 class="form-header text-primary justify-content-left"> Welcome Back </h2> -->
                                <div class="form-floating mb-3">
                                    <input name="email" value="<?= set_value('email');?>" id="email" type="email" class=" border-0 form-control" placeholder="Email address" required>
                                    <label class="" for="email">Email Adress</label>
                                    <small class="text-danger"> <?php echo form_error('email'); ?> </small>
                                </div>
                                <div class="form-floating mb-2">
                                    <input name="password" type="password" class=" border-0 form-control" placeholder="Password (6+ characters)" required>
                                    <label class="" for="password">Password</label>
                                    <small class="text-danger"> <?php echo form_error('password'); ?> </small>
                                </div>
                                <small class="text-center">
                                    By clicking login you agree to RupaSan 
                                    <a href="#" class="text-decoration-none">User Agreement,</a>
                                    <a href="#" class="text-decoration-none">Privacy Policy,</a> and
                                    <a href="#" class="text-decoration-none">Cookie Policy.</a>
                                </small>
                                <div class="d-grid gap-2 mt-3">
                                    <button type="submit" class="btn rounded-pill btn-primary">
                                        <span class="fw-bold">Login</span>
                                    </button>
                                </div>
                                
                            </form>
                            <div class="row my-2">
                                <div class=" col-3">
                                    <hr class="featurette-divider">
                                </div>
                                <div class="text-center col-6">
                                    <small class="">Not registered yet?</small>
                                </div>
                                <div class="col-3">
                                    <hr class="featurette-divider">
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="<?= site_url('pages/user/register'); ?>" class=" rounded-pill btn btn-outline-primary">
                                    <span class="fw-bold">Sign up</span>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
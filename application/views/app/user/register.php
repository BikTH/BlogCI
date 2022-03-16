<div class="container py-4">
    <?php echo validation_errors(); ?>
    <div class=" row justify-content-center">
        <div class="card-body p-0">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <h2 class="form-header text-primary text-center"> 
                        Please fill out the following form to join our community
                    </h2>
                    <div class="row align-item-center justify-content-center">
                        <div class="col-lg-6 d-lg-block p-5 text-center ">
                            <!-- <h2 class="form-header text-primary justify-content-left"> 
                                Please fill out the following form to join our community
                            </h2> -->
                            <img src="<?= img_url('registerimg.svg') ?>" class="img-fluid" alt="register img">
                        </div>
                        <div class="col-lg-6 p-5 text-secondary">
                            <form action="<?= site_url('Users/register')?>" method="post" enctype="multipart/form-data"   class="row needs-validation" novalidate >
                                <!-- <h2 class="form-header text-primary justify-content-left"> Welcome to your future favorite blog </h2> -->
                                <div class="mb-3">
                                    <input value="<?= set_value('email');?>" id="email" name="email" type="email" class=" rounded-0 form-control" placeholder="Email (example@mail.com)" required >
                                    <small class="text-danger"> <?php echo form_error('email'); ?> </small>
                                </div>
                                <div class="mb-3">
                                    <input value="<?= set_value('username');?>" id="username" name="username" type="text" class=" rounded-0 form-control" placeholder="UserName" required >
                                    <div class="invalid-feedback">
                                        UserName already used !
                                    </div>
                                    <div class="valid-feedback">
                                        Good !
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input value="<?= set_value('password');?>" id="password" name="password" type="password" class=" rounded-0 form-control" placeholder="Password (6+ characters)" required > 
                                    <div class="invalid-feedback">
                                        Low password!
                                    </div>
                                    <div class="valid-feedback">
                                        Good !
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <input value="<?= set_value('cpassword');?>" id="cpassword" name="cpassword" type="password" class=" rounded-0 form-control" placeholder="Confirm password" required >
                                    <div class="invalid-feedback">
                                        Password doesn't match !
                                    </div>
                                    <div class="valid-feedback">
                                        Good!
                                    </div>
                                </div>
                                <small class="text-center">
                                    By clicking Register you agree to RupaSan 
                                    <a href="#" class="text-decoration-none">User Agreement,</a>
                                    <a href="#" class="text-decoration-none">Privacy Policy,</a> and
                                    <a href="#" class="text-decoration-none">Cookie Policy.</a>
                                </small>
                                <div class="d-grid gap-2 mt-3">
                                    <button type="submit" class="btn rounded-pill btn-primary">
                                        <span class="fw-bold">Register</span>
                                    </button>
                                </div>
                                
                            </form>
                            <div class="row my-2">
                                <div class=" col-3">
                                    <hr class="featurette-divider">
                                </div>
                                <div class="text-center col-6">
                                    <small class="">already registered?</small>
                                </div>
                                <div class="col-3">
                                    <hr class="featurette-divider">
                                </div>
                            </div>
                            <div class="d-grid gap-2">
                                <a href="<?= site_url('pages/user/login'); ?>" class=" rounded-pill btn btn-outline-primary">
                                    <span class="fw-bold">Sign in</span>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-4">
    <div class=" row justify-content-center">
        <div class="card-body p-0">
            <div class="col-xl-8 offset-xl-2 col-lg-12 col-md-9">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 d-lg-block p-5 text-center ">
                            <h2 class="form-header text-primary justify-content-left"> 
                                Please fill out the following form to join our community
                            </h2>
                            <img src="<?= img_url('registerimg.svg') ?>" class="img-fluid" alt="login img">
                        </div>
                        <div class="col-lg-6 p-5 text-secondary">
                            <form class="needs-validation" novalidate>
                                <h2 class="form-header text-primary justify-content-left"> Welcome to your future favorite blog </h2>
                                <div class="mb-3">
                                    <input type="email" class=" rounded-0 form-control" placeholder="Email address" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <input type="password" class=" rounded-0 form-control" placeholder="Password (6+ characters)" required>
                                    <div class="invalid-feedback">
                                        Please your password
                                    </div>
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
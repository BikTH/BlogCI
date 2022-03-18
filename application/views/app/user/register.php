<div class="container py-4">
    <!-- <?php echo validation_errors(); ?> -->
    <div class=" row justify-content-center">
        <div class="card-body p-0">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <?php if($this->session->flashdata('status')): ?>
                        <div class=" text-center alert alert-danger alert-dismissible fade show " role="alert">
                            <?= $this->session->flashdata('status');?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php unset($_SESSION['status']);?>
                    <?php endif; ?>
                    <h2 class="form-header text-primary text-center"> 
                        Please fill out the following form to join our community
                    </h2>
                    <div class="d-flex align-item-center">
                        <div class=" row justify-content-center">
                            <div class="col-lg-6 d-lg-block p-5 text-center ">
                                <!-- <h2 class="form-header text-primary justify-content-left"> 
                                    Please fill out the following form to join our community
                                </h2> -->
                                <img src="<?= img_url('registerimg.svg') ?>" class="img-fluid" alt="register img">
                            </div>
                            <div class="col-lg-6 p-5 text-secondary">
                                <form action="<?= site_url('Users/register')?>" method="post" enctype="multipart/form-data"   class="row needs-validation" novalidate >
                                    <!-- <h2 class="form-header text-primary justify-content-left"> Welcome to your future favorite blog </h2> -->
                                    <div class="form-floating mb-2">
                                        <input value="<?= set_value('email');?>" id="email" name="email" type="email" class=" border-0 form-control" placeholder="Email address" require>
                                        <label class="" for="email">Email address</label>
                                        <small class="text-danger"> <?php echo form_error('email'); ?> </small>
                                    </div>
                                    <div class="form-floating mb-2">
                                        <input value="<?= set_value('pseudo');?>" id="pseudo" name="pseudo" type="text" class=" border-0 form-control" placeholder="pseudo" require>
                                        <label class="" for="pseudo">pseudo</label>
                                        <small class="text-danger"> <?php echo form_error('pseudo'); ?> </small>
                                    </div>
                                    <div class=" form-floating mb-2">
                                        <input value="<?= set_value('password');?>" id="password" name="password" type="password" class=" border-0 form-control" placeholder="Password (6+ characters)" require>
                                        <label class="" for="password">Password</label> 
                                        <small class="text-danger"> <?php echo form_error('password'); ?> </small>
                                    </div>
                                    <div class=" form-floating mb-2">
                                        <input value="<?= set_value('cpassword');?>" id="cpassword" name="cpassword" type="password" class=" border-0 form-control" placeholder="Confirm password" require>
                                        <label class="" for="cpassword">Confirm password</label>
                                        <small class="text-danger"> <?php echo form_error('cpassword'); ?> </small>
                                    </div>
                                    <div class="row mb-2 ">
                                        <div class=""> Birth's date </div>
                                        <!-- <small class="text-danger text-break"> <?php echo form_error('day'); ?>    </small>
                                        <small class="text-danger text-break"> <?php echo form_error('month'); ?>  </small>
                                        <small class="text-danger text-break"> <?php echo form_error('year'); ?>   </small> -->
                                        <div class="form-floating col">
                                            <select id="day" class="form-select border border-0" name="day" aria-label="Default select example">
                                                <option selected disabled text-secondarty>Day</option>
                                                <?php for ($i=1; $i <= 31; $i++) : ?>
                                                    <option value="<?=$i?>"> <?=$i?> </option>
                                                <?php endfor ?>
                                            </select>
                                            <label for="day">Day</label>
                                            <small class="text-danger text-break"> <?php echo form_error('day'); ?>    </small>
                                        </div>
                                        <div class=" form-floating col">
                                            <select id="month" class="form-select border-0" name="month"  aria-label="Default select example">
                                                <option selected disabled text-secondarty>Month</option>
                                                <?php $month = array("January", "Febuary", "March", "April", "May", "June", "Jully", "August", "September", "October", "November", "December"); ?>
                                                <?php for ($i=0; $i < count($month); $i++) : ?>
                                                    <option value="<?=$i + 1?>"><?= $month[$i] ?></option>
                                                <?php endfor ?>
                                            </select>
                                            <label for="day">Month</label>
                                            <small class="text-danger text-break"> <?php echo form_error('month'); ?>    </small>
                                        </div>
                                        <div class=" form-floating col">
                                            <select id="year" class="form-select border-0" name="year"  aria-label="Default select example">
                                                <option selected disabled text-secondarty>Year</option>
                                                <?php for ($i=1930; $i<=2022 ; $i++) : ?>
                                                    <option value="<?=$i?>"> <?=$i?> </option>
                                                <?php endfor ?>
                                            </select>
                                            <label for="day">Year</label>
                                            <small class="text-danger text-break"> <?php echo form_error('year'); ?>    </small>
                                        </div>
                                    </div>
                                    <small class="text-left">
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
</div>
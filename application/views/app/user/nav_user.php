<?php $user = $this->session->userdata('onlineuser')?>

<div class="navuser">
    <ul class="nav justify-content-center ">
        <div class="row d-flex align-items-center">
            <div class="col-auto">
                <div class="d-flex flex-row">
                    <li class="nav-item">
                        <a class="nav-link fs-4" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link fs-4" data-bs-toggle="modal" data-bs-target="#settings">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z"/>
                            </svg>
                        </a>
                    </li>
                </div>
            </div>
            <div class="col-auto">
                <!-- <div class="row"> -->
                    <li class="nav-item row">
                        <a class="nav-link" href="#">
                            <img src="<?= img_url_avatar('avatarmen.svg') ?>" class="rounded-circle img-profile img-thumbnail mx-auto d-block" alt="profile_pic">
                        </a>
                        <small class="text-primary text-center">
                            <?= $this->session->userdata('onlineuser')['pseudo']; ?>
                        </small>
                    </li>
                <!-- </div> -->
            </div>
            <div class="col-auto">
                <div class="d-flex flex-row-reverse">
                    <li class="nav-item">
                        <a type="button" class="nav-link fs-4" data-bs-toggle="modal" data-bs-target="#logout" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                                <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                                <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class=" nav-link fs-4" data-bs-toggle="modal" data-bs-target="#infouser">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                            </svg>
                        </a>
                    </li>
                </div>
            </div>
        </div>
    </ul>
</div>




<!-- Modal logout -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> -->
            <div class="modal-body text-danger">
                You are about to disconnect !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Abort</button>
                <a href="<?= site_url('Users/logout')?>" class="btn btn-outline-danger">Logout</a>
            </div>
        </div>
    </div>
</div>



<!-- Modal user's information -->
<div class="modal fade bg-transparent" id="infouser" tabindex="-1" aria-labelledby="infouserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered  ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infouserLabel">
                    <?= $this->session->userdata('onlineuser')['pseudo']; ?>'s informations
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body justify-content-center">
                <div class="m-4">
                    <div class=" row justify-content-center ">
                        <div class="card-body p-0">
                            <!-- <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1 "> -->
                                <div class="card bg-transparent text-sendary o-hidden border-0 my-5 shadow-2">
                                    <!-- <h2 class="form-header text-primary text-center"> Welcome Back </h2> -->
                                    <div class="row justify-content-center  ">
                                        <!-- <div class="col-lg-6 d-lg-block p-5 text-center d-none "> -->
                                        <div class="col-lg-4 col-sm-4  d-lg-block p-2 text-center">
                                            <img src="<?= img_url_avatar("avatarmen.svg") ?>" class="rounded-circle img-thumbnail mx-auto d-block" alt="profile img">
                                            <div class="h3">Bio</div>                                            <div class="col-md-12">
                                                <?php if($this->session->userdata('onlineuser')['bio'] == NULL){echo "<small class='text-danger'>information to complete</small>";}else{"$this->session->userdata('onlineuser')['bio']";} ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 p-2 text-secondary">
                                            <!-- pills of info -->
                                            <ul class="nav nav-pills mb-3 d-flex flex-row-reverse" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                                                        About user
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                                        Account's information
                                                    </button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link position-relative" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                                                        Notification
                                                        <span class="position-absolute top-0 start-90 translate-middle p-2 border borrder-light bg-danger rounded-circle">
                                                            <span class="visually-hidden">New alerts</span>
                                                        </span>
                                                    </button>
                                                </li>
                                            </ul>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                    <div class="shadow-lg p-3 mb-5 bg-body rounded">
                                                        <p>
                                                            Name             : <span class="text-primary"><?= $this->session->name ?></span>
                                                        </p>
                                                        <p>
                                                            Date de naissance: <span class="text-primary"> <?= $this->session->userdata('onlineuser')['day']; ?> / <?= $this->session->userdata('onlineuser')['month']; ?> / <?= $this->session->userdata('onlineuser')['year'];?> </span>
                                                        </p>
                                                        <p>
                                                            phone's number   : <span class="text-primary"><?= $this->session->userdata('onlineuser')['phone'] ?></span>
                                                        </p>
                                                        <p>
                                                            Town             : <span class="text-primary"><?= $this->session->userdata('onlineuser')['town'] ?></span>
                                                        </p>
                                                        <p>
                                                            Country          : <span class="text-primary"><?= strval($this->session->userdata('onlineuser')['country'])?></span>
                                                        </p>
                                                        <p>
                                                            Gender           : <span class="text-primary"><?= $this->session->userdata('onlineuser')['gender'] ?></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                        <div class="shadow-lg p-3 mb-5 bg-body rounded">
                                                            <p>
                                                                Pseudo          : <span class="text-primary"><?php if($this->session->userdata('onlineuser')['pseudo'] == NULL){echo "<small class='text-danger'>information to complete</small>";}else{echo $this->session->pseudo;} ?> </span>
                                                            </p>
                                                            <p>
                                                                Email           : <span class="text-primary"><?php if($this->session->userdata('onlineuser')['phone']== NULL){echo "<small class='text-danger'>information to complete</small>";}else{"$this->session->userdata('onlineuser')['phone']";} ?></span>
                                                            </p>
                                                            <p>
                                                                registered since: <span class="text-primary"><?php if($this->session->userdata('onlineuser')['town'] == NULL){echo "<small class='text-danger'>information to complete</small>";}else{"$this->session->userdata('onlineuser')['town']";} ?></span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    3
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>



<!-- Button trigger modal -->


<!-- Modal settings -->
<div class="modal fade" id="settings" tabindex="-1" aria-labelledby="settingsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="settingsLabel">Settings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>







<!-- <img src="<?= img_url_avatar("avatarwomen.svg") ?>" id="preview_image" style="max-width: 100%; height: 300px; width: 300px;" class="mx-auto img-fluid img-circle rounded-circle d-block" alt="avatar">
<h6 class="mt-2">
    You can change your avatar
</h6>
<form class="user" enctype="multipart/form-data" method="post" action="#">
    <label class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="image" onchange="document.getElementById('preview_image').src = window.URL.createObjectURL(this.files[0])">
        <div class="bg-gradient-dark box-shadow rounded">
            <span class="custom-file-control ">Choose a file</span>
        </div>
    </label>
    <button name="submit_update_avatar" type="submit" class=" mt-2 btn btn-outline-dark btn-user">
        Edit
    </button>
</form> -->












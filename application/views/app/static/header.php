    <nav class="navbar navbar-expand-lg navbar-transparent bg-light ">
        <div class="container">
            <a class="navbar-brand" href="<?= site_url('pages/homepage/home'); ?>">
            <img src="<?= img_url("logopage.png") ?>" class="img-header bg-transparent mx-auto" alt="header img">
            </a>
            <button class="navbar-toggler btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide-fill" viewBox="0 0 16 16">
                    <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0l-.396-.396zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= online_or_no($this->session->userdata('online'),site_url('pages/homepage/home'),site_url('pages/homepage2/home'))  ?>">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">About</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
                
                <ul class="navbar-nav d-flex">
                    <?php if($this->session->userdata('online')== '1'): ?>
                        <li class="nav-item text-primary">
                            <?= $this->session->userdata('onlineuser')['pseudo']; ?> | Space
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= site_url('Pages/user/login'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?= site_url('Pages/user/register'); ?>">Register</a>
                        </li>
                    <?php endif; ?> 
                </ul>
            </div>
        </div>
    </nav>

    <!-- <?php if($this->session->flashdata('status')): ?>

    <?php endif; ?> -->

    <!-- <br><br> -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Database Error</title>
<style type="text/css">

::selection { background-color: #E13300; color: white; }
::-moz-selection { background-color: #E13300; color: white; }

body {
	background-color: #fff;
	margin: 40px;
	font: 13px/20px normal Helvetica, Arial, sans-serif;
	color: #4F5155;
}

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

code {
	font-family: Consolas, Monaco, Courier New, Courier, monospace;
	font-size: 12px;
	background-color: #f9f9f9;
	border: 1px solid #D0D0D0;
	color: #002166;
	display: block;
	margin: 14px 0 14px 0;
	padding: 12px 10px 12px 10px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
}

p {
	margin: 12px 15px 12px 15px;
}
</style>
</head>
<body>
	<div id="container">
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
	</div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?= css_url('core') ?>">
		<title>Database Error</title>
	</head>
	<body>
	<div class=" row justify-content-center">
        <div class="card-body p-0">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                <div class="card bg-transparent text-sendary o-hidden border-0 my-5">
                    <h2 class="text-primary text-center"> 
						<?php echo $heading; ?>
                    </h2>
                    <div class="row align-item-center justify-content-center">
                        <div class="col-lg-6 d-lg-block p-5 text-center ">
                            <img src="<?= img_url('databaserror.svg') ?>" class="img-fluid" alt="register img">
                        </div>
                        <div class="col-lg-6 p-5 text-secondary text-left">
							<p class="">
								<?php echo $message; ?>
							</p>
                        </div>
                    </div>  
					<div class="text-left text-center">
						Return to homepage <a class="text-decoration-none" href="<?= site_url('pages/homepage/home'); ?>"> Here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



	    <footer class="footer mt-5 py-3 bg-light ">
			<div class="container text-center">
				<span>Copyright &copy; <a href="openxtech.com" class="href">openxtech</a> 2022</span>
			</div>
			<!-- <hr class="featurette-divider"> -->
		</footer>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</body>
</html>
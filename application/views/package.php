<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>BashaVara.Com</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>resources/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>resources/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>resources/css/custom.css">
</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url(); ?>resources/images/main.png" alt="" />
                </a>
                <p style="font-size:25pt; margin-top:10px; font-weight:bold;color:#CFA671">BASHAVARA.COM</p>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/owner">HOME</a>
                        </li>
                        <?php
                                        if($this->session->userdata('block_account')!=1){
                                    ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/post_ad">POST
                                AD</a></li>
                        <?php
                                        }
                                        ?>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>welcome/my_ad">MY
                                ADS</a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo base_url(); ?>welcome/owner_req">REQUEST</a></li>
                        <li class="nav-item dropdown ml-5">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                                data-toggle="dropdown"><?php echo $owner->first_name; ?></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-a">
                                <center><span class="mt-3" style="display: block;
									border-radius: 50%;
									width: 34px;
									height: 34px;
									background: #fff;
									border: 3px solid #d0a772;
									color: #d0a772;
									text-align: center;
									font-weight:500;
									"><?php echo $owner->post_limit; ?></span>
                                    <p style="font-weight:500; color: #d0a772;">Post Limit</p>
                                </center>
                                <hr>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>welcome/logout">LOGOUT</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->
    <div class="customer-reviews-box">
        <div class="container" style="margin-top:80px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading-title text-center">
                        <h2><?php
                    $messages_info = $this->session->userdata('limit_exceed');
                    if (isset($messages_info)) {
                        echo $messages_info;
                        $this->session->unset_userdata('limit_exceed');
                    }
                    ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 p-2" style="position: relative;
					display: block;
					margin: 0 auto;
					padding: 32px 20px;
					max-width: 310px;
					background-color: #fff;
					color: #2D2B3A;
					text-align: center;
					border-radius: 4px;
					box-shadow: 0 4px 16px rgba(100, 95, 136, 0.16);">
                    <h3 class="pt-4">Standard</h3>
                    ৳<span style="font-size:40px; font-weight:500;">100</span>
                    <p style="font-size:30px; color:#6C55F9;">Post Limit: 10</p>
                    <hr>
                    <a href="<?php echo base_url(); ?>welcome/checkout" class="btn btn-success mb-4">Subscribe</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="company-name">All Rights Reserved. &copy; 2023 <a href="#" style="margin-left: 200px"></a>
                        Developed By :
                        <a href="#">Team Sparrow (CSE 52nd Batch)</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    </footer>
    <!-- End Footer 

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url(); ?>resources/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url(); ?>resources/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/images-loded.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/form-validator.min.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/contact-form-script.js"></script>
    <script src="<?php echo base_url(); ?>resources/js/custom.js"></script>
</body>

</html>

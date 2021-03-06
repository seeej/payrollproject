<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $this->config->base_url() ?>assets/images/oops.png">
    <title></title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= $this->config->base_url() ?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?= $this->config->base_url() ?>assets/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= $this->config->base_url() ?>assets/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?= $this->config->base_url() ?>assets/css/colors/default.css" id="theme" rel="stylesheet">
    <style>
        .btn-span {
            width: 120px;
            height: 18px;
            background: #F33154;
            padding: 10px 28px;
            border: 2px solid #F33154;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            border-radius: 20px;
            cursor: pointer;
            color: white;
        }
        span:hover {
            background-color: #F33154;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            <h2 class="text-success" style = "font-size: 80px"><?= $subject ?></h2>
            <hr>
            <p class="text-muted m-t-30 m-b-30" style = "color: #0f0f0f"><i><?= $message ?></i></p><br>
            <a href="<?= $link ?>"><span class = "btn-span">Reset Password</span></a><br>
        </div><hr><br>
        <footer class="footer text-center">2017 &copy; System EXtraoridnary Igniters | B31 </footer>
    </div>
</section>
<!-- jQuery -->
<script src="<?= $this->config->base_url() ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?= $this->config->base_url() ?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>

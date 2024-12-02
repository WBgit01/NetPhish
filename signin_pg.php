<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="libs/css/signin-pg.css">
    <link rel="stylesheet" href="mediaquery.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="shortcut icon" href="https://image.flaticon.com/icons/png/512/870/870910.ico">
    <link rel="icon" type="image/x-icon" href="img/netflix-icon.ico">
    <title>Netflix</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="index.php">
                <img src="img/net-logo.png" alt="Logo">
            </a>
        </div>
    </div>
    <div class="main">
        <div class="area"></div>
        <form action="#" class="container">
            <h1>Sign In</h1>
            <div class="form-element">
                <input type="text" name="username" id="username" required />
                <label class="floating-label" for="username">Email or mobile number</label>
            </div>
            <div class="form-element">
                <input type="password" name="password" id="password" required />
                <label class="floating-label" for="password">Password</label>
            </div>
            <button class="btn">Sign In</button>
            <h2>OR</h2>
            <button class="btn2">Use a Sign-In Code</button>
            <h3>Forgot password?</h3>
            <div class="tickbox">
                <input type="checkbox"> <span>Remember me</span>
            </div>
            <div class="spn1">New to Netflix? <span>Sign up now</span>.</div>
            <div class="spn2">This page is protected by Google reCAPTCHA to <br> ensure you're not a bot. <span>Learn More</span>.</div>
        </form>
    </div>

    <?php 
        include_once "foot_layout.php"
    ?>
</body>
</html>

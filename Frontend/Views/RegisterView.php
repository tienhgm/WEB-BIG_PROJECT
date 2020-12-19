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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="post" class="register-form" id="register-form" action="index.php?controller=account&action=registerPost">
                            <div class="form-group">
                                <label><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input name="name" type="text" placeholder="Tên của bạn"/>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-email"></i></label>
                                 <input name="email" type="text" placeholder="Email của bạn" required>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Mật khẩu"/>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-account-box-phone"></i></label>
                                <input type="text" name="phonenumber" id="phonenumber" placeholder="Số điện thoại"/>
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Đăng ký"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="../Assets/Frontend/images/signup-image.jpg" alt="sing up image"></figure>
						<?php if(isset($_GET["notify"]) && $_GET["notify"]=="success"): ?>
                        <span style="color:red; font-size: 16px; font-weight: bold;">Đăng ký thành công</span>
                    	<?php endif; ?>  
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="../Assets/Frontend/js/jquery-3.5.1.min.js"></script>
   
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
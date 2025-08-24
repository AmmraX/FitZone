<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];
$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error){
    return !empty($error) ? "<p class='error-message'>$error</P>" : '';
}

function isActiveForm($formName, $activeForm){
    return $formName === $activeForm ? 'active' : '';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="script.js" defer></script>
</head>
<body>

    <header class="header">
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.html">About Us</a>
            <a href="services.html">Services</a>
            <a href="trainers.html">Our Trainers</a>
            <a href="membership.html">Membership Plans</a>
            <a href="blog.html">Blog</a>
            <a href="contact.html">Contact Us</a>
        </nav>

        <form action="#" class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit"><i class='bx bx-search'></i></button>
        </form>
    </header>

    <div class="background"></div>

    <div class="container">
        <div class="content">
            <h2 class="logo"><i class='bx bx-dumbbell'></i>FitZone</h2>

            <div class="text-sci">
                <h2>Welcome!<br><span>to Fitzone Gym</span></h2>

                <p>Your one-stop shop for fitness! We provide cutting-edge equipment, knowledgeable trainers,<br> 
                and an inspiring community to help you reach your fitness objectives, regardless 
                <br>of your level of experience.
                Take the first step toward a stronger, healthier self by joining us today.<br>
                Feel free to alter it to fit the particular services or emphasis of your gym.
                </p>

                <div class="social-icons">
                    <a href="https://lk.linkedin.com/"><i class='bx bxl-linkedin' ></i></a>
                    <a href="https://www.facebook.com/"><i class='bx bxl-facebook' ></i></a>
                    <a href="https://www.whatsapp.com/"><i class='bx bxl-whatsapp' ></i></a>
                    <a href="https://www.instagram.com/"><i class='bx bxl-instagram' ></i></a>
                </div>
        </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login <?= isActiveForm('login', $activeForm); ?>" id="login-form">
                <form action="login_register.php" method="post">
                    <h2>LOGIN</h2>
                    <?= showError($errors['login']); ?>
                    <div class="input-box">
                        <span class="icons"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icons"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot Passowrd</a>
                    </div>

                    <button type="submit" class="btn" name="login">LOGIN</button>

                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">
                        REGISTER</a></p>
                    </div>
                </form>
            </div>

             <div class="form-box register <?= isActiveForm('register', $activeForm); ?>" id="register-form">
                <form action="login_register.php" method="post">
                    <h2>REGISTER</h2>
                    <?= showError($errors['register']); ?>
                    <div class="input-box">
                        <span class="icons"><i class='bx bxs-user'></i></span>
                        <input type="text" name="name" required>
                        <label>Name</label>
                    </div>

                    <div class="input-box">
                        <span class="icons"><i class='bx bxs-envelope'></i></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icons"><i class='bx bxs-lock-alt' ></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms
                        & conditions</label>
                    </div>

                    <button type="submit" class="btn" name="register">REGISTER</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">
                        LOGIN</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>